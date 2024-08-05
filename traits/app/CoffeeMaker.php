<?php

//Traits bliver primært brugt til at reduceret code duplication, og øge code reuse

namespace App;

class CoffeeMaker
{
    public function makeCoffee() {
        echo static::class . ' is making coffee ' . PHP_EOL;
    }
}