<?php

namespace App\Controller;

class HomeController extends AppController
{

    public function index()
    {
        $section = $this->__section();
        $top_slider = $this->__topSlider();
        $plugin_service_page = $this->__plugin('service_page');
        $plugin_area_coverage = $this->__plugin('area_coverage');
        $plugin_why_choose_us = $this->__plugin('why_choose_us');
        $this->viewBuilder()->layout('layout');
        $this->set(compact('top_slider', 'section', 'plugin_service_page', 'plugin_area_coverage', 'plugin_why_choose_us'));
    }

    private function __section()
    {
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

    private function __topSlider()
    {
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

    private function __plugin($key)
    {
        $this->loadModel('Plugins');
        $themesKey = $this->ThemesSetting->find()
            ->select(['value_1'])
            ->where(['is_active' => 'Y', '`key`' => $key, 'id_theme' => $this->id_themes])
            ->first();
        $plugin = $this->Plugins
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
                'plugin.plugin_id' => $themesKey['value_1']
            ])
            ->toArray();

        return $plugin;
    }
}
