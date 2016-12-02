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

        $query = $this->Content->find('all');
        $query->select(['t.key', 'content.content_id', 'content.description', 'content.status']);
        $query->join([
            'table' => 'themes_setting',
            'alias' => 't',
            'type' => 'INNER',
            'conditions' => 't.value_1 = content.category_id']);
        for ($i = 0; $i < count($result); $i++) {
            $query->orWhere(['category_id' => $result[$i]['value_1']]);
        }
        $result = $query->toArray();

        return $result;
    }

    private function __topSlider() {
        $option['select'] = ['value_1'];
        $option['table'] = 'themes_setting';
        $option['where'] = ['id_theme' => $this->id_themes, 'is_active' => 'Y', '`key`' => 'top_slider'];
        $result = $this->Utility->finds($option);

        $query = $this->Gallery->find('all');
        $query->select(['t.key', 'gallery.title', 'gallery.description', 'gallery.link', 'gallery.path', 'gallery.is_active', 'gallery.category_id']);
        $query->join([
            'table' => 'themes_setting',
            'alias' => 't',
            'type' => 'INNER',
            'conditions' => 't.value_1 = gallery.category_id']);
        for ($i = 0; $i < count($result); $i++) {
            $query->orWhere(['category_id' => $result[$i]['value_1']]);
        }
        $result = $query->toArray();

        return $result;
    }

}
