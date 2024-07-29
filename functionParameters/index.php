<?php

declare(strict_types=1); // Gør at man skal bruge de rigtige datatyper

function sum(int|float $x, int|float $y): int|float { //Man kan sætte hvilke slags datatyper functionen kan tage imod, og sætte en default værdi, hvis der ikke bliver sendt noget
    return $x + $y;
}

$a = 6.0;
$b = 7;

echo sum($a, $b);

function sum2(int|float $x, int|float $y, int|float ...$numbers): int|float {
    return array_sum($numbers);
}

$a = 6.8;
$b = 7;
$numbers = [50, 100, 25.90, 8, 9];

echo sum2($a, $b, ...$numbers) . '<br />'; // ...$numbers, gør at hvert element blive sendt ind individuelt, man kan ikke bare sende et array når det ikke er det som bliver spurgt om

function joo(int $x, int $y): int {
    if($x % $y == 0) {
        return $x /$y;
    }

    return $x;
}

$x = 6;
$y = 3;

echo joo(y: $y, x: $x); // Man kan benytte sig af named arguments, så man sætter navnet på parameteren i forhold til hvad 
//den hedder i functionen - Hvis en function har default værdier til alle sine parameter, kan man sætte nogle specifikke 
//istedet for alle når man benytter sig af functionen 