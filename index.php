<?php

ini_set('display_errors', 'On');
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
include_once __DIR__ . '/vendor/autoload.php';

$private = json_decode(file_get_contents(__DIR__ . '/Config/Private.json'), true);
define('ROOT_URL', $private['root']);

$config = array_merge([
    'title' => 'BOYARD',
    'start' => 'Requests.layout();',
    'scripts' => [
    ],
    'prefix' => 'fort_'
], $private);

$app = new \Liloi\BOYARD\Application($config);

echo $app->compile();