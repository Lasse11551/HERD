<?php

// variable, anonymous & arrow functions

//Creating a function
function sum(int|float ...$numbers): int|float {
    return array_sum($numbers);
}

// set a variable to equal the function
$x = 'sum';

if(is_callable($x)) {
    echo $x(1, 2, 3, 4);
} else {
    echo 'Not Callable';
}

// Anonymous function, set to a variable
$y = 1;
$sum2 = function (int|float ...$numbers) use ($x): int|float {
    echo $x;
    return array_sum($numbers);
};

echo $sum2(1, 2, 3, 4);

// callback function
//Man kan også benytte callable i en funktions parameter, også indsætte variabelnavn som f.eks. $callback, her vil man når man bruger funktionen kunne sende en anden funktion med

$array = [1, 2, 3, 4];

$array2 = array_map(function($element) {
    return $element * 2;
}, $array);

echo '<pre>';
print_r($array);

print_r($array2);
echo '</pre>';

// Arrow functions
// arrow functions er mere readable
// Arrow functions er ikke et lukket scope, så vi kan bruge variabler udenfor functionen - men ændringerne ved variablet holder ikke ved

$array = [1, 2, 3, 4];

$y = 5;

$array2 = array_map(fn($number) => $number * $number * $y, $array);

echo '<pre>';
print_r($array2);
echo '</pre>';

