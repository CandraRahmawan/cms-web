<?php

use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;

Router::defaultRouteClass('DashedRoute');

Router::scope('/', function (RouteBuilder $routes) {
    $routes->connect('/', ['controller' => 'Home', 'action' => 'index']);
    $routes->connect('/*', ['controller' => 'Pages', 'action' => 'index']);
    $routes->connect('/artikel/*', ['controller' => 'Blog', 'action' => 'index']);
    $routes->connect('/service-kami', ['controller' => 'Pages', 'action' => 'testDesign']);
    $routes->connect('/robots.txt', ['controller' => 'Common', 'action' => 'robots']);
    $routes->fallbacks('DashedRoute');
});

Plugin::routes();
