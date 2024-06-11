<?php

namespace Core;

class Router {

    private static $routes = [];

    public static function GET($route, $controller, $method = 'index')
    {
        self::add('GET', $route, $controller, $method);

        //$_SERVER['REQUEST_METHOD']
    }

    public static function POST($route, $controller, $method = 'index')
    {
        self::add('POST', $route, $controller, $method);

        //$_SERVER['REQUEST_METHOD']
    }


    private static function add($requestMethod ,$route, $controller, $method = 'index')
    {
        self::$routes[$requestMethod][$route] = ['controller' => $controller, 'method' => $method];
    }

    public function dispatch($uri)
    {
        $requestMethod = $_SERVER['REQUEST_METHOD'];

        $routes = self::$routes;

        if(array_key_exists($uri, $routes[$requestMethod])){
            $controllerName = $routes[$requestMethod][$uri]['controller'];
            $methodName = $routes[$requestMethod][$uri]['method'];

            $controller = new $controllerName();
            $controller->$methodName();
        }
        else{
            echo '404 - Page Not Found';
        }
    }
}