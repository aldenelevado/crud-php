<?php

namespace Lib;

use Lib\IController;

class Route {

    public $url;
    public $controller;

    public function __construct($url, $controller) {
        $this->url = $url;
        $this->controller = $controller;
    }
    
}

?>