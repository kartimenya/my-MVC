<?php

use core\Router;

session_start();

require_once __DIR__ . '/../vendor/autoload.php';
require dirname(__DIR__) . '/config/config.php';
require_once __DIR__ . '/bootstrap.php';
require CORE . '/funcs.php';

$router = new Router;
require CONFIG . '/routes.php';
$router->match();