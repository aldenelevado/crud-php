<?php

namespace Lib;

interface IController {
    public function init();
    public function execute();
    public function render();
}
?>