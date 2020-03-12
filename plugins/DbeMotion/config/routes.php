<?php

use Cake\Routing\Router;
use Cake\Routing\RouteBuilder;

Router::scope('/', ['plugin' => 'DbeMotion'], function (RouteBuilder $routes) {
    $routes->connect('/products', ['controller' => 'Page', 'action' => 'productCategory']);
    $routes->connect(
        '/products/:category', ['controller' => 'Page', 'action' => 'productLists']
    )->setPatterns(['category' => '[a-z]+(?:[a-z\-]+)?$']);
    $routes->connect('/buy', ['controller' => 'Page', 'action' => 'whereToBuy']);
    $routes->connect('/story', ['controller' => 'Page', 'action' => 'ourStory']);
    $routes->connect('/review', ['controller' => 'Page', 'action' => 'review']);
    $routes->connect('/warranty', ['controller' => 'Page', 'action' => 'warrantyInformation']);
    $routes->connect('/contact', ['controller' => 'Page', 'action' => 'contact']);
});
