<?php

namespace DbeMotion\Controller;

use App\Controller\PagesController;
use KubAT\PhpSimple\HtmlDomParser;
use Cake\Utility\Hash;

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
    $this->loadModel('Category');
    $category_id = 0;
    $category_url = explode('-', $this->request->category);
    if (sizeof($category_url) > 0) {
      $category_id = $category_url[0];
    }
    
    $featured = $this->plugin('featured_category_product');
    $category = $this->Category->find()->select(['name'])->where(['status' => 'Y', 'category_id' => $category_id])->first();
    
    if (empty($category)) {
      $this->is_404_page = true;
      $this->render('/Page/404_page');
    } else {
      $product = $this->Paginator->paginate($this->Products->find('all')->contain(['Category'])->join([
        'Category' => [
          'table' => 'category',
          'type' => 'INNER',
          'conditions' => 'Products.category_id = Category.category_id',
        ]
      ])
        ->where(['Category.status' => 'Y', 'Products.status' => 'Y', 'Products.category_id' => $category_id])
        ->order(['Products.product_id' => 'DESC']), ['limit' => 6]);
      $this->set(compact('product', 'featured', 'category'));
    }
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
      
      if ($product['render_template_filename'] == 'template_3') {
        $product['specification'] = $this->__parseDomSpecificationForTemplate3($product['specification']);
      }
      $this->set(compact('product'));
      
      if (empty($product)) {
        $this->is_404_page = true;
        $this->render('/Page/404_page');
      }
    }
  }
  
  private function __parseDomSpecificationForTemplate3($html) {
    $dom = HtmlDomParser::str_get_html(!empty($html) ? $html : '<div></div>');
    $specification = [];
    foreach ($dom->find('h2') as $index => $element) {
      $specification[$index]['title'] = $element->plaintext;
    }
    foreach ($dom->find('p') as $index => $element) {
      $specification[$index]['description'] = $element->plaintext;
    }
    foreach ($dom->find('table') as $index => $element) {
      $specification[$index]['specification'] = trim($element->innertext);
    }
    
    return $specification;
  }
}
