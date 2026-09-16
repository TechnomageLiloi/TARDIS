<?php

ini_set('display_errors', 'On');
session_start();
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);

define('ROOT_URL', '');
define('ROOT_PATH', __DIR__);

include_once __DIR__ . '/Core/Autoload.php';

$private = json_decode(file_get_contents(__DIR__ . '/Config/Private.json'), true);

$config = array_merge([
    'root' => __DIR__ . '/Macrocosm'
], $private);


$app = new \Liloi\Rune\Application($config);

echo $app->compile();
