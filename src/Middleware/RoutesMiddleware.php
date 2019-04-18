<?php

namespace App\Middleware;

class RoutesMiddleware
{
    public function forceTrailingSlash()
    {
        $requestUri = $_SERVER['REQUEST_URI'];
        if (substr($requestUri, -1) != '/') {
            header("Location: " . $requestUri . "/");
            return true;
        }
        return false;
    }
}