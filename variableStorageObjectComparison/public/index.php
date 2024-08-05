<?php

spl_autoload_register(function($class) { // En autoloader må ikke returnere noget eller kaste en fejl/error
    $path = __DIR__ . '/../' . lcfirst(str_replace('\\', '/', $class)) . '.php';

    if(file_exists($path)) {
        require $path;
    }
});

use App\Invoice;
use App\CustomInvoice;

$invoice1 = new Invoice(25, 'My Invoice');
$invoice2 = new CustomInvoice(25, 'My Invoice');

$invoice3 = $invoice1;

echo 'invoice1 == invoice3' . PHP_EOL;
var_dump($invoice1 == $invoice3);

echo 'invoice1 === invoice3' . PHP_EOL;
var_dump($invoice1 === $invoice3);

$invoice3->amount = 250;

echo 'invoice1 == invoice2' . PHP_EOL;
var_dump($invoice1 == $invoice2);

echo 'invoice1 === invoice2' . PHP_EOL;
var_dump($invoice1 === $invoice2);

