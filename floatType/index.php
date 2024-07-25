<?php

/* FLOATS */

// tal med decimaler på

$x = 13.5;

var_dump($x);
echo $x;

echo PHP_FLOAT_MAX;
echo PHP_FLOAT_MIN;

// Der kan ske problemer når man burger floor eller ceil sammen mange et gange stykke af decimal tal
$y = floor((0.1 + 0.7) * 10); // giver 7 men man regner med 8
$u = ceil((0.1 + 0.2) * 10); // giver 4 men man regner med 3


//Aldrig sammenlign float direkte - her er svaret 'no' selvom man regner med 'yes'
$i = 0.23;
$j = 1 - 0.77;

if($i == $j) {
    echo 'yes';
} else {
    echo 'no';
}

echo PHP_FLOAT_MAX + 1; // giver INF (infinity) - Det sker når man går 'out of bounds' med float