<?php
define('ROOT_URL', '');
ini_set('display_errors', 'On');
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
include_once __DIR__ . '/vendor/autoload.php';

$private = json_decode(file_get_contents(__DIR__ . '/Config/Private.json'), true);

$config = array_merge([
    'title' => 'TARDIS',
    'start' => 'Requests.layout();',
    'scripts' => [
    ],
    'prefix' => 'tardis_'
], $private);

$app = new \Liloi\TARDIS\Application($config);

echo $app->compile();