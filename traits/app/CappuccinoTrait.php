<?php

namespace App;

trait CappuccinoTrait
{
    private function makeCappuccino() { //hvis denne funktion er private, kan den benytte inde i klassen hvor man bruger traitet, men man kan ikke bruge den på en instans af et objekt, af den klasse
        echo static::class . ' is making cappuccino ' . PHP_EOL;
    }

    //use LatteTrait; // man kan benytte andre trait, i et trait, så hvis nogen bruger CappuccinoTrait, får de også LatteTrait funktioner

    // Hvis der er 2 funktioner i LatteTrait og CappuccinoTrait der hedder det samme og der er en klasse som benytter 
    //begge trait, ved den ikke hvilken en den skal bruge når funktionen bliver kaldt
    // public function makeLatte() {
    //     echo static::class . ' is making latte (Cappuccino trait) ' . PHP_EOL;
    // }

    //Hvis du overskriver parentclassens funktioner herinde vil den overskrive funktionen for alle der bruger dette trait - 
    //så her vil både CappuccinoMaker og AllInOneCoffeeMaker bruge denne funktion istedet da det indhenter dette trait
    // public function makeCoffee()
    // {
    //     echo 'making coffee (updated)' . PHP_EOL;
    // }
}