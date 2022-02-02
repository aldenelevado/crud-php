<?php

namespace Controller;

use Lib\IController;
use Lib\AbstractController;

class Error404Controller extends AbstractController implements IController {

    public $view_body = "404";
    
    public function init() {

    }

    public function execute() {

    }

    public function render() {
        $this->renderViewAll($this->view_body);
    }

}
