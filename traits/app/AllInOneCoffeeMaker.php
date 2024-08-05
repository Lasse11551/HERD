<?php

//Traits bliver primært brugt til at reduceret code duplication, og øge code reuse

namespace App;

class AllInOneCoffeeMaker extends CoffeeMaker
{
    use LatteTrait; //{
    //     LatteTrait::makeLatte as makeOriginalLatte; //en anden måde man kan gøre det er at lave et alias til funktion navnet
    // }
    use CappuccinoTrait{
        CappuccinoTrait::makeCappuccino as public; //man kan ændre visibilitien på en funktion i et trait, der hvor man bruger den
    } 
    //{
        //LatteTrait::makeLatte insteadof CappuccinoTrait; //hvis 2 trait har samme funktiones navne, og begge traits bliver importeret, 
        //kan man gøre sådan her for at fortælle hvilken en den skal bruge
    //}

}