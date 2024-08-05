<?php

//Magic methods er speicelle methods i php som overskriver phps default behavior , specifikke actions eller events sker
// Alle magic methods begynder med "__"

spl_autoload_register(function($class) { // En autoloader må ikke returnere noget eller kaste en fejl/error
    $path = __DIR__ . '/../' . lcfirst(str_replace('\\', '/', $class)) . '.php';

    if(file_exists($path)) {
        require $path;
    }
});

use App\Invoice;


$invoice = new Invoice();

$invoice->amount = 15;
var_dump(isset($invoice->amount));

unset($invoice->amount);