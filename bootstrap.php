<?php

function autoload($className)
{
    $dir = __DIR__ . DIRECTORY_SEPARATOR . 'Money';
    $filepath = $dir . DIRECTORY_SEPARATOR . $className . '.php';
    include_once $filepath;
}

spl_autoload_register('autoload');

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor/autoload.php';
