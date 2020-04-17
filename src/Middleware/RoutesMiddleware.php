<?php

namespace App\Middleware;

class RoutesMiddleware {
  
  public function __construct() {
  }
  
  public function __invoke($request, $response, $next) {
    $requestUri = $_SERVER['REQUEST_URI'];
    $exceptCharacter = ['.css', '.js', '.png', '.jpg', '.jpeg', '.json', '.svg', '.txt'];
    $except = false;
    foreach ($exceptCharacter as $item) {
      if (strpos($requestUri, $item) !== false) {
        $except = true;
      }
    }
    if (substr($requestUri, -1) != '/' && $except == false) {
      return $response->withHeader('Location', $requestUri . "/");
    }
    return $next($request, $response);
  }
}