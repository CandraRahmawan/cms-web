<?php

use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;

Router::defaultRouteClass('DashedRoute');

Router::scope('/', function (RouteBuilder $routes) {
    $routes->connect('/', ['controller' => 'Home', 'action' => 'index']);
    $routes->connect('/pages/:id', ['controller' => 'Pages', 'action' => 'page'], ['id' => '[0-9]+']);
    $routes->fallbacks('DashedRoute');
});

Plugin::routes();
