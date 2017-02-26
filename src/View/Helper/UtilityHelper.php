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

    public function categoryMenu($params) {
        $conn = ConnectionManager::get('default');
        $cols = $conn->execute("SELECT
                c.category_id, c.name, ct.link 
                FROM category c 
                INNER JOIN content ct ON ct.category_id=c.category_id 
                INNER JOIN menu_detail md ON ct.category_id=md.category_id
                WHERE md.parent_id='2'");
        $results = $cols->fetchAll('assoc');
        foreach ($results as $menu) {
            echo '<li><a href="' . $menu["link"] . '">' . $menu['name'] . '</a></li>';
        }
    }

}
