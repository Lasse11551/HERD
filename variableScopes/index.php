<?php

// Variable scopes

$x = 5;

function foo() {
    global $x;
    echo $x; //Dette vil ikke fungere da, du ikke kan bruge variabler udenfor functionen medmindre de er med som parameter, man kan definere det variabel i function som global
    //Dette er dog en reference til det originale $x, så det ændrer også ved det
}

include ('script1.php');

echo '<br />';
echo $x;

function getValue() {
    static $value = null;

    if($value = null) {
        $value = somethingExpensive()
;    }

    return $value;
}

function somethingExpensive() {
    sleep(2);

    echo 'Processing';

    return 10;
}

echo getValue() . '<br />';
echo getValue() . '<br />';
echo getValue() . '<br />';