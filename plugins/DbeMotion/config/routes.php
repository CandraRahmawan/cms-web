<?php

use Cake\Routing\Router;
use Cake\Routing\RouteBuilder;

Router::scope('/', ['plugin' => 'DbeMotion'], function (RouteBuilder $routes) {
    $routes->connect('/products', ['controller' => 'Page', 'action' => 'productCategory']);
    $routes->connect('/buy', ['controller' => 'Page', 'action' => 'whereToBuy']);
    $routes->connect('/story', ['controller' => 'Page', 'action' => 'ourStory']);
    $routes->connect('/warranty', ['controller' => 'Page', 'action' => 'warrantyInformation']);
    $routes->connect('/contact', ['controller' => 'Page', 'action' => 'contact']);
});
