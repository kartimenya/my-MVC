<?php

use core\Db;
use core\Router;

session_start();

require_once __DIR__ . '/../vendor/autoload.php';
require dirname(__DIR__) . '/config/config.php';
require CORE . '/funcs.php';

$db_config = require CONFIG . '/db.php';
$db = (Db::getInstance())->getConnection($db_config);


$rooter = new Router;
require CONFIG . '/routes.php';
$rooter->match();