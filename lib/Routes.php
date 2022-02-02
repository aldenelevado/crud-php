<?php

namespace Lib;
use Lib\IController;
use Lib\Route;

class Routes {

    public static $post_routes = array();
    public static $get_routes = array();

    public static function get($url, $controller) {
        $route = new Route($url, $controller);
        array_push(Routes::$get_routes, $route);
    }

    public static function post($url, $controller) {
        $route = new Route($url, $controller);
        array_push(Routes::$get_routes, $route);
    }
}
?>