<?php

spl_autoload_register(function($class) { // En autoloader må ikke returnere noget eller kaste en fejl/error
    $path = __DIR__ . '/../' . lcfirst(str_replace('\\', '/', $class)) . '.php';

    if(file_exists($path)) {
        require $path;
    }
});

//se video for at forstå bedst muligt - omhandler runtime osv., hvornår og hvordan den aflæser objekterne

use App\ClassA;
use App\ClassB;

$classA = new ClassA();
$classB = new ClassB();

// echo $classA->getName() . PHP_EOL;
// echo $classB->getName() . PHP_EOL;

echo $classA::getName() . PHP_EOL;
echo $classB::getName() . PHP_EOL;