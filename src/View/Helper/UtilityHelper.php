<?php

namespace App\View\Helper;

use Cake\View\Helper;
use Cake\View\Helper\UrlHelper;
use Cake\Utility\Text;

class UtilityHelper extends Helper {
  public function formatDate($dateTime) {
    return date('d M Y', strtotime($dateTime));
  }
  
  public function basePathImgSliderBanner($base_url, $category_id) {
    return $this->buildFullUrl($base_url . '/img/Gallery/SliderBanner/' . $category_id . '/');
  }
  
  public function basePathImgArticle($base_url, $category_id) {
    return $this->buildFullUrl($base_url . '/img/Content/Article/' . $category_id . '/');
  }
  
  public function buildFullUrl($url) {
    $queryBuilder = sizeof($this->request->query) > 0 ? '?' . http_build_query($this->request->query) : '';
    $http = 'https://';
    if ($this->isDevelopment()) {
      $http = '//';
    } else {
      $url = str_replace($this->request->base, "", $url);
    }
    return $http . $this->request->env('HTTP_HOST') . $url . $queryBuilder;
  }
  
  public function isDevelopment() {
    return $this->request->env('HTTP_HOST') === 'localhost';
  }
  
  public function buildUrl($url) {
    if ($this->isDevelopment()) {
      return UrlHelper::build($url, true);
    }
    $fullUrl = UrlHelper::build($url, true);
    return str_replace($this->request->base, "", $fullUrl);
  }
  
  public function slugText($string) {
    return Text::slug(strtolower($string));
  }
}
