<?php

namespace App\View\Helper;

use Cake\View\Helper;

class UtilityHelper extends Helper
{
    public function formatDate($dateTime)
    {
        return date('d M Y', strtotime($dateTime));
    }

    public function basePathImgSliderBanner($base_url, $category_id)
    {
        return $this->buildFullUrl($base_url . '/img/Gallery/SliderBanner/' . $category_id . '/');
    }

    public function basePathImgArticle($base_url, $category_id)
    {
        return $this->buildFullUrl($base_url . '/img/Content/Article/' . $category_id . '/');
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
