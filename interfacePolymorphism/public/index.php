<?php

spl_autoload_register(function($class) { // En autoloader må ikke returnere noget eller kaste en fejl/error
    $path = __DIR__ . '/../' . lcfirst(str_replace('\\', '/', $class)) . '.php';

    if(file_exists($path)) {
        require $path;
    }
});

use App\CollectionAgency;
use App\DebtCollectionService;
use App\Rocky;

$service = new DebtCollectionService;

echo $service->collectDebt(new Rocky()) . PHP_EOL; //PHP_EOL står for br