<?php

namespace DbeMotion\Controller;

use App\Controller\PagesController;

class PageController extends PagesController {
  
  public function beforeFilter(\Cake\Event\Event $event) {
    parent::beforeFilter($event);
    $this->loadModel('Products');
  }
  
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
    $category_id = 0;
    $category_url = explode('-', $this->request->category);
    if (sizeof($category_url) > 0) {
      $category_id = $category_url[0];
    }
    
    $product = $this->Paginator->paginate($this->Products->find('all')->join([
      'category' => [
        'table' => 'category',
        'type' => 'INNER',
        'conditions' => 'Products.category_id = category.category_id',
      ]
    ])
      ->where(['category.status' => 'Y', 'Products.status' => 'Y', 'Products.category_id' => $category_id])
      ->order(['Products.product_id' => 'DESC']), ['limit' => 6]);
    $this->set(compact('product'));
  }
  
  public function productDetail() {
    $id = explode("-", $this->request->params['detail']);
    if (sizeof($id) > 0) {
      $product = $this->Products->find()->join([
        'category' => [
          'table' => 'category',
          'type' => 'INNER',
          'conditions' => 'Products.category_id = category.category_id',
        ]
      ])->where(['Products.unique_id' => $id[0], 'category.status' => 'Y', 'Products.status' => 'Y'])
        ->first();
      $this->set(compact('product'));
      
      if (empty($product)) {
        $this->is_404_page = true;
        $this->render('/Page/404_page');
      }
    }
  }
}
