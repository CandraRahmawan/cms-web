<?php

namespace App\Controller;

class BlogController extends AppController
{
    public $paginate = [
        'limit' => 10,
        'order' => [
            'Content.content_id' => 'desc'
        ]
    ];

    public function beforeRender(\Cake\Event\Event $event)
    {
        parent::beforeRender($event);
        $this->viewBuilder()->layout('layout');
    }

    public function index()
    {
        $blog = $this->Content
            ->find('all')
            ->select([
                'Content.title',
                'Content.content_id',
                'Content.description',
                'Content.create_date',
                'Content.category_id',
                'Content.picture',
                'u.first_name',
                'u.last_name',
            ])
            ->join([
                'cat' => [
                    'table' => 'category',
                    'type' => 'INNER',
                    'conditions' => 'cat.category_id = Content.category_id'
                ],
                'u' => [
                    'table' => 'users',
                    'type' => 'INNER',
                    'conditions' => 'u.user_id = Content.user_id'
                ]
            ])
            ->where([
                'Content.status' => 'Y',
                'cat.status' => 'Y',
                'cat.type' => 'Content'
            ]);
        $this->set('blog', $this->paginate($blog));
    }

}
