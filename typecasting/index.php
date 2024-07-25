<?php

/* Data types & type Casting */

//Hvordan ved php hvad der er hvilken slags datatype? Det undersøger den automatisk imens programmet kører

#4 Scalar Types
    # bool - true or false
    $completed = true;
    # int - whole number
    $score = 75;
    # float - decimal numbers
    $price = 0.99;
    #string - text
    $greeting = 'Hello Gio';

    echo $completed . '<br />';
    echo $score . '<br />';
    echo $price . '<br />';
    echo $greeting . '<br />';

# gettype indbygget funktion, som returnerer hvilke type et variabel er

echo gettype($completed) . " ";
echo gettype($score) . " ";
echo gettype($price) . " ";
echo gettype($greeting) . " ";

#udover gettype kan man bruge var_dump, som både giver datatypen og værdien
var_dump($completed) . " ";
var_dump($score) . " ";
var_dump($price) . " ";
var_dump($greeting) . " ";

# 4 Compound Types
    # array - en liste af items
    $companies = [1, 2, 3, 0.5, -9.2, 'A', true];
    print_r($companies); // printer pladsen og værdien ud for hver ting i arrayet
    # object
    # callable
    # iterable

# 2 Special Types
    # resource
    # null

//Hvad der sker i denne funktion er at php type jongler (type coersion) datatyperne, selvop vi indsætter en string, converterer 
//den automatisk til en int - dette er fordi selvom den får den forkerte type, prøver den stadig at lave det til den rigtige datatype
//Hvis det er muligt at lave det om til en int, gør den det automatisk, selv hvis du indsatte en float, ville den bare runde ned eller op

//Dertil kan man declare strict types, som gør at det skal modtage korrekte datatyper - dette gøre med declare(strict_types=1)
//Dog kan float og int godt blandes selvom man har sat strict_types til - Det er godt at benytte strict_types, da det giver en mere clean code, og kan gøre fejl tydelige

    function sum(int $x, int $y) {
        return $x + $y;
    }

    echo sum(2, '3');

// Typecasting

$x = (int) '5';
var_dump ($x);