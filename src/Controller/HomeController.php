<?php

namespace App\Controller;

class HomeController extends AppController {

    public function index() {
        $section = $this->__section();
        $top_slider = $this->__topSlider();
        $this->viewBuilder()->layout('layout');
        $this->set(compact('top_slider', 'section'));
    }

    private function __section() {
        $option['select'] = ['value_1'];
        $option['table'] = 'themes_setting';
        $option['where'] = ['id_theme' => $this->id_themes, 'is_active' => 'Y', '`group`' => 'section'];
        $result = $this->Utility->finds($option);

        $query = $this->Content->find('all')
                ->select(['t.key', 'c.content_id', 'c.description', 'c.status'])
                ->from('content c')
                ->join([
            'table' => 'themes_setting',
            'alias' => 't',
            'type' => 'INNER',
            'conditions' => 't.value_1 = c.category_id']);
        for ($i = 0; $i < count($result); $i++) {
            $query->orWhere(['category_id' => $result[$i]['value_1']]);
        }
        $query->where(['t.is_active' => 'Y', 'c.status' => 'Y']);
        $query->where(['t.group' => 'section']);

        $result_content = $query->toArray();

        return $result_content;
    }

    private function __topSlider() {
        $option['select'] = ['value_1'];
        $option['table'] = 'themes_setting';
        $option['where'] = ['id_theme' => $this->id_themes, 'is_active' => 'Y', '`key`' => 'top_image_carousel'];
        $result = $this->Utility->finds($option);

        $query = $this->Gallery->find('all')
                ->select(['t.key', 'g.title', 'g.description', 'g.link', 'g.path', 'g.is_active', 'g.category_id'])
                ->from('gallery g')
                ->join([
            'table' => 'themes_setting',
            'alias' => 't',
            'type' => 'INNER',
            'conditions' => 't.value_1 = g.category_id']);
        for ($i = 0; $i < count($result); $i++) {
            $query->orWhere(['category_id' => $result[$i]['value_1']]);
        }
        $query->where(['t.is_active' => 'Y', 'g.is_active' => 'Y']);
        $query->where(['t.key' => 'top_image_carousel']);
        $result_content = $query->toArray();

        return $result_content;
    }

    private function __getSeoInfo() {

    }

}
