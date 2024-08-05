<?php

//Traits bliver primært brugt til at reduceret code duplication, og øge code reuse

namespace App;

class CappuccinoMaker extends CoffeeMaker
{
    use CappuccinoTrait{
        CappuccinoTrait::makeCappuccino as public; //man kan ændre visibilitien på en funktion i et trait, der hvor man bruger den
    }

    use LatteTrait;
    
    //hvis du overskriver den metode du får fra CappuccinoTrait, herinde, bruger den den metode istedet

    // public function makeCappuccino()
    // {
    //     echo 'making cappuccino (updated)' . PHP_EOL;
    // }
}