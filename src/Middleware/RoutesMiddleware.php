<?php

namespace App\Middleware;

use Cake\Core\Configure;

class RoutesMiddleware {
  
  public function __construct() {
  }
  
  public function __invoke($request, $response, $next) {
    $requestUri = $_SERVER['REQUEST_URI'];
    $queryString = $_SERVER['QUERY_STRING'];
    $serverName = $_SERVER['SERVER_NAME'];
    $exceptCharacter = ['.css', '.js', '.png', '.jpg', '.jpeg', '.json', '.svg', '.txt', '.xml'];
    $except = false;
    foreach ($exceptCharacter as $item) {
      if (strpos($requestUri, $item) !== false) {
        $except = true;
      }
    }
    if ($except == false) {
      if (Configure::read('App.withWWW') && !strstr($serverName, 'www')) {
        return $response->withStatus(301)
          ->withHeader('Location', Configure::read('App.baseWebUrl') . $requestUri);
      }
      
      if (substr($request->here, -1) != '/') {
        return $response->withStatus(301)
          ->withHeader('Location', Configure::read('App.baseWebUrl') . $request->here . "/" . ($queryString ? '?' . $queryString : ''));
      }
    }
    
    return $next($request, $response);
  }
}
