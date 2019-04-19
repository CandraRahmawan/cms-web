<?php

namespace App\Middleware;

class RoutesMiddleware
{
    public function forceTrailingSlash()
    {
        $requestUri = $_SERVER['REQUEST_URI'];
        $exceptCharacter = ['.css', '.js', '.png', '.jpg', '.jpeg', '.json'];
        $except = false;
        foreach ($exceptCharacter as $item) {
            if (strpos($requestUri, $item) !== false) {
                $except = true;
            }
        }
        if (substr($requestUri, -1) != '/' && $except == false) {
            header("Location: " . $requestUri . "/");
            return true;
        }
        return false;
    }
}