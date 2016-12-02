<?php

namespace App\Controller;

use Cake\Utility\Hash;

class PagesController extends AppController {
    
    public function beforeRender(\Cake\Event\Event $event) {
        parent::beforeRender($event);
        $this->viewBuilder()->layout('layout');
    }

    public function page() {
        $id = $this->params['id'];
    }

}
