<?php

use Cake\Routing\Router;
use Cake\Routing\RouteBuilder;

Router::scope('/', ['plugin' => 'DbeMotion'], function (RouteBuilder $routes) {
  $routes->connect('/products', ['controller' => 'Page', 'action' => 'productCategory']);
  $routes->connect(
    '/products/:category', ['controller' => 'Page', 'action' => 'productLists'], ['category' => '[a-z0-9A-Z]+(?:[a-z0-9\-]+)(\/?)$', 'pass' => ['category']]
  );
  $routes->connect(
    '/products/:category/:detail', ['controller' => 'Page', 'action' => 'productDetail']
  )->setPatterns(['category' => '[a-z0-9A-Z]+(?:[a-z0-9\-]+)', 'detail' => '[a-z0-9A-Z]+(?:[a-z0-9\-]+)(\/?)$']);
  $routes->connect('/buy', ['controller' => 'Page', 'action' => 'whereToBuy']);
  $routes->connect('/story', ['controller' => 'Page', 'action' => 'ourStory']);
  $routes->connect('/review', ['controller' => 'Page', 'action' => 'review']);
  $routes->connect('/warranty', ['controller' => 'Page', 'action' => 'warrantyInformation']);
  $routes->connect('/contact', ['controller' => 'Page', 'action' => 'contact']);
  $routes->connect('/download-driver', ['controller' => 'Page', 'action' => 'downloadDriver']);
});
