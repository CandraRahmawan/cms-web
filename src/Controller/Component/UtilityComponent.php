<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Datasource\ConnectionManager;
use Cake\ORM\TableRegistry;

class UtilityComponent extends Component {

    public function query($sql) {
        $conn = ConnectionManager::get('default');
        $cols = $conn->execute($sql);
        $result = $cols->fetchAll('assoc');
        return $result;
    }

    public function finds($option) {
        $model = TableRegistry::get($option['table']);
        $result = $model->find()
                ->select($option['select'])
                ->where($option['where'])
                ->toArray();

        return $result;
    }

}
