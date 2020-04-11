<?php

namespace DbeMotion\Controller;

use App\Controller\PagesController;
use KubAT\PhpSimple\HtmlDomParser;
use Cake\Utility\Hash;
use Cake\Core\Configure;

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
    
    $featured_plugin = $this->plugin('featured_category_product');
    $category = $this->Category->find()->select(['name'])->where(['status' => 'Y', 'category_id' => $category_id])->first();
    
    $featured = [
      'title' => '',
      'subtitle' => '',
      'description' => '',
      'img_url' => '',
      'bg_color' => ''
    ];
    $featuredSize = 0;
    $explode_category_url = explode('-', $this->request->category);
    foreach ($featured_plugin as $item) {
      $value_1 = json_decode($item['detail']['value_1']);
      $value_2 = json_decode($item['detail']['value_2']);
      if (sizeof($explode_category_url) > 0) {
        if ($explode_category_url[0] == $value_1->id) {
          $featured = [
            'title' => $value_2->title,
            'subtitle' => $value_2->subtitle,
            'description' => $value_2->description,
            'img_url' => $item['detail']['value_3'],
            'bg_color' => $value_2->bg_color
          ];
          $featuredSize++;
        }
      }
    }
    
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
        ->order(['Products.updated_date' => 'DESC']), ['limit' => 6]);
      
      $this->setSeo['meta_title'] = $category['name'];
      $this->setSeo['meta_description'] = !empty($featured['description']) ? $featured['description'] : 'Product List of DBE Acoustics';
      $og_image = $featured['img_url'];
      
      $this->set(compact('product', 'featuredSize', 'featured', 'category', 'og_image'));
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
      
      $full_base_admin_url = Configure::read('App.fullBaseAdminUrl');
      $extract_img = !empty($product['img_path']) ? json_decode($product['img_path']) : [];
      $img_url = [];
      foreach ($extract_img as $subItem) {
        $img_url[] = $subItem;
      }
      $srp_img = isset($img_url[0]) ? $full_base_admin_url . $img_url[0] : '';
      $detail_image['top_image'] = isset($img_url[1]) ? $full_base_admin_url . $img_url[1] : '';
      $detail_image['section_1_image'] = isset($img_url[2]) ? $full_base_admin_url . $img_url[2] : '';
      $detail_image['section_2_image'] = isset($img_url[3]) ? $full_base_admin_url . $img_url[3] : '';
      
      $this->setSeo['meta_title'] = $product['name'];
      $this->setSeo['meta_description'] = $product['subtitle'];
      $og_image = !empty($detail_image['top_image']) ? $detail_image['top_image'] : $srp_img;
      
      $this->set(compact('product', 'og_image', 'detail_image'));
      
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
