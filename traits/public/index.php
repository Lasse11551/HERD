<?php

//Traits bliver primært brugt til at reduceret code duplication, og øge code reuse

spl_autoload_register(function($class) { // En autoloader må ikke returnere noget eller kaste en fejl/error
    $path = __DIR__ . '/../' . lcfirst(str_replace('\\', '/', $class)) . '.php';

    if(file_exists($path)) {
        require $path;
    }
});

use App\CoffeeMaker;
use App\LatteMaker;
use App\CappuccinoMaker;
use App\AllInOneCoffeeMaker;

$coffeeMaker = new CoffeeMaker();
$coffeeMaker->makeCoffee();

$latteMaker = new LatteMaker();
$latteMaker->makeLatte();
$latteMaker->makeCoffee();

$cappuccinoMaker = new CappuccinoMaker();
$cappuccinoMaker->makeCappuccino();
$cappuccinoMaker->makeCoffee();

$allInOneCoffeeMaker = new AllInOneCoffeeMaker();
$allInOneCoffeeMaker->makeCoffee();
$allInOneCoffeeMaker->makeLatte();
$allInOneCoffeeMaker->makeCappuccino();

