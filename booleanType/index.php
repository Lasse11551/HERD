<?php

/* BOOLEANS */

$isComplete = true;

//integers 0 -0 = false
//floats 0.0 -0.0 = false
//'' = false
//'0' = false
//[] = false
//null = false

//Booleans bliver tit brugt til at kontrollere noget

var_dump($isComplete) . ' ';

var_dump(is_bool($isComplete));

if($isComplete) {
    // do something
    echo 'Succes ';
} else {
    // do something
    echo 'Fail ';
}

echo $isComplete . ' ';