<?php

ini_set('display_errors', 'On');
session_start();
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
include_once __DIR__ . '/vendor/autoload.php';

$private = json_decode(file_get_contents(__DIR__ . '/Config/Private.json'), true);
define('ROOT_URL', $private['root']);
define('ROOT_PATH', __DIR__);

$config = array_merge([
    'title' => 'TARDIS',
    'start' => 'Requests.layout();',
    'scripts' => [
    ],
    'prefix' => 'tardis_'
], $private);

$app = new \Liloi\TARDIS\Application($config);

echo $app->compile();