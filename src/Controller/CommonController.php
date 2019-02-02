<?php

namespace App\Controller;

class CommonController extends AppController
{

    public function beforeRender(\Cake\Event\Event $event)
    {
        parent::beforeRender($event);
    }

    public function robots()
    {
    }
}
