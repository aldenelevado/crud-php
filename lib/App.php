<?php

namespace Lib;

use Lib\Routes;
use Lib\Route;
use Lib\IController;
use Controller\Error404Controller;
use Controller\MainController;

class App {

    public static $dir;

    public static function init($dir) {
        foreach (glob($dir . "/inc/*.php") as $filename) {
            require_once $filename;
        }
        foreach (glob($dir . "/lib/*.php") as $filename) {
            require_once $filename;
        }
        foreach (glob($dir . "/controller/*.php") as $filename) {
            require_once $filename;
        }
        foreach (glob($dir . "/model/*.php") as $filename) {
            require_once $filename;
        }
        App::$dir = $dir;
    }

    public static function renderView($page) {
        require(App::$dir . "/views/" . $page . ".php");
    }

    public static function execute($url, $request_method) {
        switch ($request_method) {
            case 'GET' :
                App::execute_get($url);
                break;
            case 'POST' :
                App::execute_post($url);
                break;
            default:
                break;
        }
    }

    public static function execute_get($url) {
        $controller =  App::find_route_controller($url, Routes::$get_routes);
        $controller->init();
        $controller->render();
    }

    public static function execute_post($url) {
        $controller = App::find_route_controller($url, Routes::$post_routes);
        $controller->exec();
        $controller->render();
    }

    public static function find_route_controller($url, $routes) {
        $filtered_routes = array_filter($routes, function($route) use($url) {
            return $route->url === $url;
        });
        $route = null;
        foreach ($routes as &$val) {
            if ($val->url == $url) {
                $route = $val;
                break;
            }
        }

        if (!is_null($route)) {
            return $route->controller;
        } else {
            header("Location: /crud-php/404"); 
        }
        return null;
    }
}