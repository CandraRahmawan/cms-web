<?php

namespace App\Controller;

use Cake\Utility\Hash;
use Cake\Utility\Text;
use Cake\Collection\Collection;

class PagesController extends AppController
{

    public function beforeRender(\Cake\Event\Event $event)
    {
        parent::beforeRender($event);
        $this->viewBuilder()->layout('layout');
        $random_related_blog_post = $this->__randomRelatedBlogPost();
        $this->set(compact('random_related_blog_post'));
    }

    public function index()
    {
        $param = $this->pass[0];
        $id = 0;
        $explode = explode('-', $param);

        if (is_array($explode)) {
            $id = $explode[count($explode) - 1];
        } else {
            $this->redirect('/');
        }

        $content = $this->Content
            ->find('all')
            ->select([
                'cat.name',
                'Content.description',
                'Content.title',
                'Content.create_date',
                'Content.link',
                'Content.picture',
                'cat.type',
                'cat.category_id',
                'u.first_name',
                'u.last_name'
            ])
            ->join(
                [
                    'cat' => [
                        'table' => 'category',
                        'type' => 'INNER',
                        'conditions' => 'cat.category_id = Content.category_id'
                    ],
                    'u' => [
                        'table' => 'users',
                        'type' => 'INNER',
                        'conditions' => 'u.user_id = Content.user_id'
                    ]
                ])
            ->where([
                'Content.content_id' => $id,
                'Content.status' => 'Y',
                'cat.status' => 'Y',
                'OR' => [['cat.type' => 'Content'], ['cat.type' => 'Page']]
            ])
            ->toArray();

        if (count($content) != 1 || $content[0]['link'] != '/' . $param) {
            $this->redirect('/');
        }

        $this->set(compact('content'));
    }

    public function servicePage()
    {
        $this->loadModel('Plugins');
        $service_page = $this->ThemesSetting->find()
            ->select(['value_1'])
            ->where(['is_active' => 'Y', '`key`' => 'service_page', 'id_theme' => $this->id_themes])
            ->first();
        $service = $this->Plugins
            ->find('all')
            ->select([
                'detail.value_1',
                'detail.value_2',
                'detail.value_3'
            ])
            ->from('plugins plugin')
            ->join([
                'detail' => [
                    'table' => 'plugins_detail',
                    'type' => 'INNER',
                    'conditions' => 'plugin.plugin_id = detail.plugin_id',
                ]
            ])
            ->where([
                'plugin.is_active' => 'Y',
                'plugin.plugin_id' => $service_page['value_1']
            ])
            ->toArray();
        $this->set(compact('service'));
    }

    private function __randomRelatedBlogPost($limit = 3)
    {
        if (isset($this->request->pass[0])) {
            $pass_url = Text::tokenize($this->request->pass[0], '-');
            $collection = new Collection($pass_url);
            $content_id = $collection->last();

            $get_category = $this->Content
                ->find()
                ->select('Content.category_id')
                ->where(['Content.content_id' => $content_id])
                ->toArray();
            $category_id = Hash::extract($get_category, "{n}.category_id")[0];

            return $content = $this->Content
                ->find('all')
                ->select(['Content.title', 'Content.content_id', 'Content.description', 'Content.link'])
                ->join([
                    'table' => 'category',
                    'alias' => 'cat',
                    'type' => 'INNER',
                    'conditions' => 'cat.category_id = Content.category_id'])
                ->where([
                    'Content.status' => 'Y',
                    'cat.status' => 'Y',
                    'cat.type' => 'Content',
                    'cat.category_id' => $category_id,
                    'Content.content_id != ' => $content_id
                ])
                ->order('RAND()')
                ->limit($limit)
                ->toArray();
        }
    }

}
