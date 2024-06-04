<?php


function autoload($nomeClass)
{

    $path = __DIR__ . "/class/" . $nomeClass . ".php";

    if (is_file($path)) {
        require_once $path;
    }
}

spl_autoload_register('autoload');