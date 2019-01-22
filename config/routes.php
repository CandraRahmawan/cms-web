<?php

use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;

Router::defaultRouteClass('DashedRoute');

Router::scope('/', function (RouteBuilder $routes) {
    $routes->connect('/', ['controller' => 'Home', 'action' => 'index']);
    $routes->connect('/*', ['controller' => 'Pages', 'action' => 'index']);
    $routes->connect('/artikel/*', ['controller' => 'Blog', 'action' => 'index']);
    $routes->connect('/test-design', ['controller' => 'Pages', 'action' => 'testDesign']);
    $routes->fallbacks('DashedRoute');
});

Plugin::routes();
