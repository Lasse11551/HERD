<?php

// return / declare / goto

function sum(int $x, int $y) {
    $z = $x + $y;
    return $z; // et return statement stopper kun denne function og ikke hele scriptet den bliver brugt i
}

$x = sum(5, 10);

//return; // hvis vi sætter et return statement her stopper det hele scriptet

echo $x;
echo '<br />';
echo 'Hello World';

// declare - ticks
$x = 3;
$y = 5;
$z = $x + $y;

function onTick() {
    echo 'Tick<br />';
}

register_tick_function('onTick');

declare(ticks=1);

$i = 0;
$length = 10;

while ($i < $length) {
    echo $i++ . '<br />';
}

//declare - encoding

// declare - strict types - dette er noget som bliver sat i toppen af et script, som tjekker alle variabler og om de passer som parameter

declare(strict_types=1); //Gør at der altid vil være strict comparison - så man kan ikke sætte en string som parameter, hvis man har sat den som int i funktionen

//Hvis man exporterer f.eks. en sum funktion, fra denne fil, til en anden, vil der ikke blive tjekket for strict type i den anden fil