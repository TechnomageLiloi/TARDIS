<?php

$fnDumper = __DIR__ . '/Boyard.phar';

try
{
    if(file_exists($fnDumper)) {
        unlink($fnDumper);
    }

    $oPhar = new Phar($fnDumper);
    $oPhar->startBuffering();

    $oPhar->setStub(Phar::createDefaultStub('index.php'));
    $oPhar->buildFromDirectory(dirname(__DIR__));

    $oPhar->stopBuffering();

    chmod($fnDumper, 0777);

} catch (Exception $e) {
    echo $e->getMessage();
}