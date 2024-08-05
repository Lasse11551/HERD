<?php

//Traits bliver primært brugt til at reduceret code duplication, og øge code reuse

namespace App;

class LatteMaker extends CoffeeMaker
{
    use LatteTrait;
    
}