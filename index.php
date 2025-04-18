<?php

namespace Liloi\TARDIS;

include_once __DIR__ . '/RuneFramework.phar';
include_once __DIR__ . '/Application.php';

$private = json_decode(file_get_contents('./Config/Private.json'), true);

$config = array_merge([
    'title' => 'TARDIS',
    'start' => 'Requests.layout();',
    'scripts' => [
        $private['root'] . '/Requests.js',
        $private['root'] . '/API/Road/Requests.js',
        $private['root'] . '/API/Quest/Requests.js',
        $private['root'] . '/API/Atoms/Requests.js',
    ],
    'prefix' => 'tardis_'
], $private);

$app = new Application($config);

echo $app->compile();