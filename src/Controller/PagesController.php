<?php

namespace App\Controller;

use Cake\Utility\Hash;

class PagesController extends AppController {

    public function beforeRender(\Cake\Event\Event $event) {
        parent::beforeRender($event);
        $this->viewBuilder()->layout('layout');
    }

    public function index() {
        $param = $this->pass[0];
        $id = 0;
        $explode = explode('-', $param);

        if (is_array($explode)) {
            $id = $explode[count($explode)-1];
        } else {
            $this->redirect('/');
        }

        $content = $this->Content
                ->find('all')
                ->where(['content_id' => $id, 'status' => 'Y'])
                ->toArray();

        if (count($content) != 1) {
            $this->redirect('/');
        }

        $this->set(compact('content'));
    }

}
