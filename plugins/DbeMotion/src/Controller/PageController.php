<?php

namespace DbeMotion\Controller;

use App\Controller\PagesController;

class PageController extends PagesController {
  
  public function productCategory() {
    $content = $this->plugin('product_category_page');
    $this->set(compact('content'));
  }
  
  public function whereToBuy() {
    $content = $this->plugin('where_to_buy_page');
  }
  
  public function ourStory() {
    $content = $this->plugin('our_story_page');
  }
  
  public function review() {
    $content = $this->plugin('review_page');
    $youtube = $this->plugin('youtube_review');
    $this->set(compact('content', 'youtube'));
  }
  
  public function warrantyInformation() {
    $this->plugin('warranty_information_page');
  }
  
  public function contact() {
    $this->plugin('contact_page');
  }
  
  public function productLists() {
    $this->pluginContent('product_lists');
  }
  
  public function productDetail() {
    $this->pluginContent('product_detail');
  }
}
