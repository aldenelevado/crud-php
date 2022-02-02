<?php
require_once(dirname(__DIR__, 1) . "/lib/App.php");
$request_uri = $_SERVER['REQUEST_URI'];
$url = str_replace("/crud-php","",$_SERVER['REQUEST_URI']);
$request_method = $_SERVER['REQUEST_METHOD'];

?>