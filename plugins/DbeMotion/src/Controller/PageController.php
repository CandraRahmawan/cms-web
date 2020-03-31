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
    $this->set(compact('content'));
  }
  
  public function ourStory() {
    $content = $this->plugin('our_story_page');
    $this->set(compact('content'));
  }
  
  public function review() {
    $youtube = $this->plugin('youtube_review');
    $this->set(compact('youtube'));
  }
  
  public function warrantyInformation() {
    $warranty = $this->plugin('warranty_information_page');
    $service_centre = $this->plugin('service_centre');
    $this->set(compact('service_centre', 'warranty'));
  }
  
  public function contact() {
    $contact = $this->plugin('contact_page');
    $service_centre = $this->plugin('service_centre');
    $this->set(compact('service_centre', 'contact'));
  }
  
  public function productLists() {
    $this->plugin('product_lists');
  }
  
  public function productDetail() {
    $this->plugin('product_detail');
  }
}
