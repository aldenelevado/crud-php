<?php

namespace Lib;

use Lib\App;

abstract class AbstractController {

    public $view_header = "header";
    public $view_footer = "footer";

    public function render_header() {
        App::renderView($this->view_header);
    }

    public function render_footer() {
        App::renderView($this->view_footer);
    }

    public function renderViewAll($view) {
        $this->render_header();
        App::renderView($view);
        $this->render_footer();
    }
}

?>