<?php

namespace Controller;

use Lib\IController;
use Lib\AbstractController;

class MainController extends AbstractController implements IController {

    public $view_body = "main";
    
    public function init() {

    }

    public function execute() {

    }

    public function render() {
        $this->renderViewAll($this->view_body);
    }

}
