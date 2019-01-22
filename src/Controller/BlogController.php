<?php

namespace App\Controller;

class BlogController extends AppController
{

    public function beforeRender(\Cake\Event\Event $event)
    {
        parent::beforeRender($event);
        $this->viewBuilder()->layout('layout');
    }

    public function index()
    {
        $this->set(compact('content'));
    }

}
