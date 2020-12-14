<?php
include_once ('global.php');
require_once BASE_PATH . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

use Core\Router;

$router = new Router();
$router->run();

