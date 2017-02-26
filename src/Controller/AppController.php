<?php

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\Utility\Hash;

class AppController extends Controller {

    public $id_themes;
    public $params;
    public $pass;

    public function initialize() {
        parent::initialize();
        $this->loadModel('ThemesSetting');
        $this->loadModel('Themes');
        $this->loadModel('Menu');
        $this->loadModel('Category');
        $this->loadModel('Content');
        $this->loadModel('Gallery');
        $this->loadComponent('Utility');
        $this->params = $this->request->params;
        $this->pass = $this->request->pass;
    }

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $themes = $this->Themes->find()
                ->select(['id_theme', 'name'])
                ->where(['active' => 'Y'])
                ->first();
        $this->id_themes = $themes['id_theme'];
        $this->viewBuilder()->theme($themes['name']);
    }

    public function beforeRender(Event $event) {
        parent::beforeRender($event);
        $base_url = $this->ThemesSetting->find()
                ->select(['value_1'])
                ->where(['is_active' => 'Y', '`key`' => 'base_url', 'id_theme' => $this->id_themes])
                ->first();
        $this->set('base_url', $base_url['value_1']);
        $menu_header = $this->__menuHeader();
        $social_media = $this->__socialMedia();
        $title_meta = $this->_titleMeta();
        $footer = $this->__footer();
        $this->set(compact('menu_header', 'social_media', 'footer', 'title_meta', 'menu_static'));
    }

    private function __menuHeader() {
        /* SELECT 
          c.name,
          c.category_id,
          md.parent_id,
          md.menu_detil_id
          FROM themes_setting ts
          RIGHT JOIN menu m ON m.menu_id=ts.value_1 AND ts.`key`="menu_header"
          INNER JOIN menu_detail md ON m.menu_id=md.menu_id
          INNER JOIN category c ON c.category_id=md.category_id
          LEFT JOIN content ct ON c.category_id=ct.category_id
          WHERE (ts.is_active="Y" AND ts.is_theme=1 AND c.`type`="Page" AND md.ended_date > NOW() AND m.is_active="Y"
          AND c.`status`="Y" AND md.`status`="Y" AND ct.`status`="Y")
          ORDER BY md.order_id ASC */
        $query = $this->Themes->find();
        $query->select(['c.name', 'c.category_id', 'md.parent_id', 'md.menu_detil_id', 'ct.link', 'md.drop_down']);
        $query->from('themes_setting ts');
        $query->join([
            'table' => 'menu',
            'alias' => 'm',
            'type' => 'RIGHT',
            'conditions' => 'm.menu_id=ts.value_1 AND ts.`key`="menu_header"']);
        $query->join([
            'table' => 'menu_detail',
            'alias' => 'md',
            'type' => 'INNER',
            'conditions' => 'm.menu_id=md.menu_id']);
        $query->join([
            'table' => 'category',
            'alias' => 'c',
            'type' => 'INNER',
            'conditions' => 'c.category_id=md.category_id']);
        $query->join([
            'table' => 'content',
            'alias' => 'ct',
            'type' => 'LEFT',
            'conditions' => 'c.category_id=ct.category_id']);
        $query->where(['ts.is_active' => 'Y', 'ts.id_theme' => $this->id_themes, 'c.`type`' => 'Page', 'md.ended_date > NOW()',
            'm.is_active' => 'Y', 'c.`status`' => 'Y', 'md.`status`' => 'Y', 'ct.`status`' => 'Y']);
        $query->order(['md.order_id' => 'ASC']);
        $result = $query->all();

        //debug($result);die;
        return $result;
    }

    private function __socialMedia() {
        $option['select'] = ['key', 'field_name', 'group', 'value_1'];
        $option['table'] = 'themes_setting';
        $option['where'] = ['id_theme' => $this->id_themes, 'is_active' => 'Y', '`group`' => 'social_media'];
        $result = $this->Utility->finds($option);

        return $result;
    }

    private function __footer() {
        $option['select'] = ['key', 'field_name', 'group', 'value_1'];
        $option['table'] = 'themes_setting';
        $option['where'] = ['id_theme' => $this->id_themes, 'is_active' => 'Y', '`group`' => 'footer'];
        $result = $this->Utility->finds($option);
        $result = Hash::combine($result, '{n}.key', '{n}.value_1');

        return $result;
    }

    private function __categoryPage($params) {
        $caseOrder = '';
        $id_category = '';
        for ($i = 0; $i < count($params['id']); $i++) {

            if ($i == 0)
                $comma = '';
            else
                $comma = ',';

            $caseOrder .= ' WHEN ' . $params['id'][$i] . ' THEN ' . $i;

            $id_category .= $comma . $params['id'][$i];
        }

        $sql = 'SELECT category.category_id, category.name, description 
                FROM category 
                WHERE category.status="Y" AND category_id IN(' . $id_category . ') 
                ORDER BY CASE category.category_id
                    ' . $caseOrder . '
                END';
        $result = $this->Utility->query($sql);

        return $result;
    }

    private function _titleMeta() {
        $result = [
            'title_web' => 'Website',
            'title_logo' => 'Website',
            'description_meta' => ''
        ];
        $query = $this->ThemesSetting->find()
                ->where([
                    'id_theme' => $this->id_themes,
                    '`key` IN ("title_web", "description_meta", "title_logo")',
                    'is_active' => 'Y'
                ])
                ->toArray();

        foreach ($query as $item) {
            $result[$item['key']] = $item['value_1'];
        }

        return $result;
    }

}
