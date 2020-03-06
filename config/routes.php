<?php

use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;

Router::defaultRouteClass('DashedRoute');

Router::scope('/', function (RouteBuilder $routes) {
    $routes->connect('/', ['controller' => 'Home', 'action' => 'index']);
    $routes->connect('/artikel/*', ['controller' => 'Blog', 'action' => 'index']);
    $routes->connect('/service-kami', ['controller' => 'Pages', 'action' => 'servicePage']);
    $routes->connect('/robots.txt', ['controller' => 'Seo', 'action' => 'robots']);
    $routes->connect('/sitemap-article.xml', ['controller' => 'Seo', 'action' => 'sitemap_article']);
    $routes->connect('/sitemap-page.xml', ['controller' => 'Seo', 'action' => 'sitemap_page']);
    $routes->connect('/*', ['controller' => 'Pages', 'action' => 'index']);
    $routes->fallbacks('DashedRoute');
});

Plugin::routes();
