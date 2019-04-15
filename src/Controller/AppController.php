<?php

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\Utility\Hash;
use Cake\Utility\Inflector;

class AppController extends Controller
{

    public $id_themes;
    public $params;
    public $pass;
    public $baseUrl;

    public function initialize()
    {
        parent::initialize();
        $this->loadModel('ThemesSetting');
        $this->loadModel('Themes');
        $this->loadModel('Menu');
        $this->loadModel('Category');
        $this->loadModel('Content');
        $this->loadModel('Gallery');
        $this->loadModel('MenuDetail');
        $this->loadModel('Seo');
        $this->loadComponent('Utility');
        $this->params = $this->request->params;
        $this->pass = $this->request->pass;
        $this->baseUrl = $this->buildBaseUrl();
        $this->loadComponent('Paginator');
    }

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $themes = $this->Themes->find()
            ->select(['id_theme', 'name'])
            ->where(['active' => 'Y'])
            ->first();
        $this->id_themes = $themes['id_theme'];
        $this->viewBuilder()->theme($themes['name']);
    }

    public function beforeRender(Event $event)
    {
        parent::beforeRender($event);
        $path_url_admin = $this->ThemesSetting->find()
            ->select(['value_1'])
            ->where(['is_active' => 'Y', '`key`' => 'path_url_admin', 'id_theme' => $this->id_themes])
            ->first();
        $settings = $this->__getThemesSetting();
        $menu_header = $this->__menuHeader();
        $random_blog_post = $this->__randomBlogPost();
        $seo = $this->__getSeoInfo();
        $this->set('path_url_admin', $path_url_admin['value_1']);
        $this->set(compact('menu_header', 'settings', 'menu_static', 'random_blog_post', 'seo'));
    }

    private function __menuHeader()
    {
        $result = [];
        $menu = $this->Themes->find();
        $menu->select(['md.parent_id', 'md.menu_detail_id', 'md.drop_down', 'md.custom_link', 'md.name', 'md.content_id']);
        $menu->from('themes_setting ts');
        $menu->join([
            'table' => 'menu',
            'alias' => 'm',
            'type' => 'RIGHT',
            'conditions' => 'm.menu_id=ts.value_1 AND ts.`key`="menu_header"']);
        $menu->join([
            'table' => 'menu_detail',
            'alias' => 'md',
            'type' => 'INNER',
            'conditions' => 'm.menu_id=md.menu_id']);
        $menu->where(['ts.is_active' => 'Y', 'ts.id_theme' => $this->id_themes,
            'm.is_active' => 'Y', 'md.`status`' => 'Y']);
        $menu->order(['md.order_id' => 'ASC']);
        $menu_result = $menu->toList();

        if (sizeof($menu_result) > 0) {
            $content_id = Hash::extract($menu_result, '{n}.md.content_id');

            $content = $this->Content->find();
            $content->select(['c.link', 'c.content_id']);
            $content->from('content c');
            $content->join([
                'table' => 'category',
                'alias' => 'ct',
                'type' => 'INNER',
                'conditions' => 'ct.category_id=c.category_id'
            ]);
            $content->where(['ct.status' => 'Y', 'c.status' => 'Y', 'c.content_id IN' => $content_id]);
            $content_result = $content->toList();

            $menu_result = Hash::extract($menu_result, '{n}.md');
            $content_result = Hash::extract($content_result, '{n}.c');
            foreach ($menu_result as $key => $item) {
                $result[$key]['name'] = $item['name'];
                $link = '';
                if ($item['content_id'] == '0') {
                    $link = $item['custom_link'];
                } else {
                    foreach ($content_result as $content) {
                        if ($content['content_id'] == $item['content_id']) {
                            $link = $content['link'];
                        }
                    }
                }
                $result[$key]['link'] = $link;
                $result[$key]['active'] = '';
                if (Inflector::slug($link, '-') == $this->request->url) {
                    $result[$key]['active'] = 'active';
                }

            }
        }
        return $result;
    }

    private function __getThemesSetting()
    {
        $option['select'] = ['key', 'field_name', 'group', 'value_1'];
        $option['table'] = 'themes_setting';
        $option['where'] = ['id_theme' => $this->id_themes, 'is_active' => 'Y'];
        $result = $this->Utility->finds($option);
        $result = Hash::combine($result, '{n}.key', '{n}.value_1');
        return $result;
    }

    private function __randomBlogPost($limit = 5)
    {
        return $content = $this->Content
            ->find('all')
            ->select(['Content.title', 'Content.content_id', 'Content.link'])
            ->join([
                'table' => 'category',
                'alias' => 'cat',
                'type' => 'INNER',
                'conditions' => 'cat.category_id = Content.category_id'])
            ->where([
                'Content.status' => 'Y',
                'cat.status' => 'Y',
                'cat.type' => 'Content'
            ])
            ->order('RAND()')
            ->limit($limit)
            ->toArray();
    }

    private function __getSeoInfo()
    {
        $id = 0;
        if (sizeof($this->pass) > 0) {
            $param = $this->pass[0];
            $explode = explode('-', $param);
            if (is_array($explode)) {
                $id = $explode[count($explode) - 1];
            }
        }

        $seo = $this->Content->find()
            ->select('seo_id')
            ->where(['content_id' => $id])
            ->toArray();

        if (sizeof($seo) <= 0) {
            $url = '/' . $this->request->url;
            $seo = $this->MenuDetail->find()
                ->select('seo_id')
                ->where(['custom_link' => $url])
                ->toArray();
        }

        if (sizeof($seo) > 0) {
            $seo = $this->Seo->get($seo[0]['seo_id']);
        }

        return $seo;
    }

    private function buildBaseUrl()
    {
        $http = 'https://';
        if ($this->isDevelopment()) {
            $http = '//';
        }
        return $http . $this->request->env('HTTP_HOST');
    }

    private function isDevelopment()
    {
        return $this->request->env('HTTP_HOST') === 'localhost';
    }

}
