<?php

require_once(__DIR__ . "/inc/init.php");

use Controller\Error404Controller;
use Controller\MainController;
use Lib\App;
use Lib\Routes;

App::init(__DIR__);

Routes::get("", new MainController);
Routes::get("/", new MainController);
Routes::get("/404", new Error404Controller);

App::execute($url, $request_method);

exit();
