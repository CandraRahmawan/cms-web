<?php

namespace App\Middleware;

use Cake\Core\Configure;

class RoutesMiddleware {
  
  public function __construct() {
  }
  
  public function __invoke($request, $response, $next) {
    $requestUri = $_SERVER['REQUEST_URI'];
    $exceptCharacter = ['.css', '.js', '.png', '.jpg', '.jpeg', '.json', '.svg', '.txt', '.xml'];
    $except = false;
    foreach ($exceptCharacter as $item) {
      if (strpos($requestUri, $item) !== false) {
        $except = true;
      }
    }
    if (substr($requestUri, -1) != '/' && $except == false) {
      return $response->withStatus(301)
        ->withHeader('Location', Configure::read('App.baseWebUrl') . $requestUri . "/");
    }
    return $next($request, $response);
  }
}