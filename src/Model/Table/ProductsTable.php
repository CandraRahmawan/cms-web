<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class ProductsTable extends Table {
  
  public function initialize(array $config) {
    parent::initialize($config);
    $this->belongsTo('Category', [
      'foreignKey' => 'category_id',
      'joinType' => 'INNER',
    ]);
  }
}
