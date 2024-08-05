<?php

use App\Invoice;

spl_autoload_register(function($class) { // En autoloader må ikke returnere noget eller kaste en fejl/error
    $path = __DIR__ . '/../' . lcfirst(str_replace('\\', '/', $class)) . '.php';

    if(file_exists($path)) {
        require $path;
    }
});

$invoice = new Invoice();

//echo serialize($invoice). PHP_EOL;
var_dump(unserialize('O:11:"App\Invoice":1:{s:5:"*id";s:21:"invoice_66acec4c44210";}'));

// echo serialize(true) . PHP_EOL;
// echo serialize(1) . PHP_EOL;
// echo serialize(2.5) . PHP_EOL;
// echo serialize('hello World') . PHP_EOL;
// echo serialize([1, 2, 3]) . PHP_EOL;
//var_dump(unserialize(serialize(['a' => 1, 'b' => 2])));