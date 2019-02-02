<?php

namespace App\View\Helper;

use Cake\View\Helper;
use Cake\Utility\Inflector;
use Cake\View\Helper\UrlHelper;

class UtilityHelper extends Helper
{
    public function buildBlogUrl($title, $id)
    {
        return $this->buildFullUrl(UrlHelper::build('/' . strtolower(Inflector::slug($title . DIRECTORY_SEPARATOR . $id))));
    }

    public function formatDate($dateTime)
    {
        return date('d M Y', strtotime($dateTime));
    }

    public function basePathImgSliderBanner($base_url, $category_id)
    {
        $base = $base_url . 'img/Gallery/SliderBanner/' . $category_id . '/';
        return $base;
    }

    public function basePathImgArticle($base_url, $category_id)
    {
        $base = $base_url . 'img/Content/Article/' . $category_id . '/';
        return $base;
    }

    public function buildFullUrl($url)
    {
        $http = 'https://';
        if ($this->isDevelopment()) {
            $http = '//';
        }
        return $http . $this->request->env('HTTP_HOST') . $url;
    }

    public function isDevelopment()
    {
        return $this->request->env('HTTP_HOST') === 'localhost';
    }
}
