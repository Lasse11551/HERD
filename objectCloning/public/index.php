<?php

spl_autoload_register(function($class) { // En autoloader må ikke returnere noget eller kaste en fejl/error
    $path = __DIR__ . '/../' . lcfirst(str_replace('\\', '/', $class)) . '.php';

    if(file_exists($path)) {
        require $path;
    }
});

use App\Invoice;

    $invoice = new App\Invoice();

    $invoice2 = clone $invoice; //constructeren bliver ikke kaldt når man bruger clone, derfor laver man en magic method i klassen som giver nyt id

    var_dump($invoice, $invoice2, $invoice === $invoice2);