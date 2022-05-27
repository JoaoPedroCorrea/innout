<?php
require_once(dirname(__FILE__, 2) . '/src/config/config.php');

// echo $_SERVER['REQUEST_URI'];

$uri = urldecode($_SERVER['REQUEST_URI']);

if($uri === '/' || $uri === ''){
    $uri = '/loginController.php';
}
// echo CONTROLLER_PATH . $uri;
require_once(CONTROLLER_PATH . "{$uri}");
