<?php

function autoload($nomeClasse)
{
    $path = __DIR__ . '/class/' . $nomeClasse . ".php";

    if (is_file($path)) {
        require_once $path;
    }
}

spl_autoload_register('autoload');