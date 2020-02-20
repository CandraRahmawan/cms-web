<?php

use Cake\Routing\Router;
use Cake\Routing\RouteBuilder;

Router::scope('/', ['plugin' => 'DbeMotion'], function (RouteBuilder $routes) {
    $routes->connect('/products', ['controller' => 'Page', 'action' => 'productCategory']);
    $routes->connect('/where-to-buy', ['controller' => 'Page', 'action' => 'whereToBuy']);
});
