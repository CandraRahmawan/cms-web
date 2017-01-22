<?php

namespace App\View\Helper;

use Cake\View\Helper;
use Cake\Datasource\ConnectionManager;
use Cake\Utility\Hash;

class UtilityHelper extends Helper {

    public function enumValue($table, $field) {
        $conn = ConnectionManager::get('default');
        $cols = $conn->execute("SHOW COLUMNS FROM $table LIKE '$field'");
        $results = $cols->fetchAll('assoc');
        $enum = explode(',', substr(str_replace(array("'", "(", ")"), '', $results[0]['Type']), 4));
        return $enum;
    }

    public function categoryOption($params) {
        $conn = ConnectionManager::get('default');
        $cols = $conn->execute("SELECT category_id, name FROM category WHERE status='Y' AND type='{$params}'");
        $results = $cols->fetchAll('assoc');
        $results = Hash::combine($results, '{n}.category_id', '{n}.name');
        return $results;
    }

    public function basePathImgSliderBanner($base_url, $category_id) {
        $base = $base_url . 'img/Gallery/SliderBanner/' . $category_id . '/';
        return $base;
    }

    public function getCategoryById($id) {
        $conn = ConnectionManager::get('default');
        $cols = $conn->execute("SELECT category_id, name FROM category WHERE status='Y' AND category_id='{$id}'");
        $results = $cols->fetchAll('assoc');
        return $results;
    }

}
