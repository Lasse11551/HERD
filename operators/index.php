<?php

//Hvis en operator tager en værdi kaldes det en Unary operator (!), hvis den tager 2 værdier kaldes det en binary operator, 3 værdi hedder det en ternary (?:)

// OPERATORS

// Arithmetic Operators (+ - * / % **)
//The PHP arithmetic operators are used with numeric values to perform common arithmetical operations, such as addition, subtraction, multiplication etc.
$t = +'10'; //At sætte "+" eller "-" foran en string, vil konvertere det til en string
$x = 10;
$y = 2;

var_dump($x - $y);
var_dump($x / $y); //hvis man dividerer bliver det automatisk til en float - hvis man dividerer med 0 får man en fejl
var_dump($x % $y); // dividerer x med y, og returnerer hvad der er tilbage af værdi, f.eks. her bliver de 0, men hvis y var 3, ville den returnere 1. Hvis man gjorde det med decimal tal, vil de automatik blive cast til integers
//Brug fmod, for at udføre "%" på float tal, for det korrekte resultat - var_dump(fmod($x, $y));

// Assignment Operators (= += -= /= %= **=)
$x = 5; //Sætter x til at være 5
$x = $y = 10; //Sætter både x og y til 10;
$x *= 3;
echo $x;

// String Operators (.) Concat operator
$q = 'Hello';
$q .= 'World';
echo $q;

// Comparison Operators (== === <> < > <=> ?? ?:)
$x = 5;
$y = 10;

var_dump($x == $y); //Tjekker kun værdi - er true selv hvis $x er en string
var_dump($x === $y); //Tjekker både værdi og datatype
var_dump($x != $y); //Tjekker om værdierne ikke er ens
var_dump($x !== $y); //Tjekker om værdierne og datatyperne ikke er ens
var_dump($x > $y); //Tjekker om venstre værdi er større end højre
var_dump($x < $y); //Tjekker om højre værdi er større end venstre
var_dump($x >= $y); //Tjekker om venstre værdi er større eller ligmed højre 
var_dump($x <= $y); //Tjekker om højre værdi er er større eller ligmed venstre
var_dump($x <=> $y); //returnerer 0 hvis x == y, returnerer -1 hvis x er mindre end y, returnerer 1 hvis y er mindre end x

$x = 'Hello World';
$y = strpos($x, 'H');

$result = $y === false ? 'H Not Found' : 'H Found at index ' . $y; //if expression = true, evaluer første retur værdi "H Not Found" ellers evaluer expression 2

echo $result;

$x = null;
$y = $x ?? 'hello'; //Hvis $x er null, sæt y til default værdi af 'hello'. Hvis x havde en værdi, ville $y blive sat til den værdi

var_dump($y);


// Error Control Operators (@)
$x = @file('foo.txt'); //@ Suppresser (holde fejlen nede - fremviser ikke fejlen) - her vil den lede efter filen, men kan ikke finde den, hvilket vil resultere i en fejl, men '@' gør at fejlen ikke bliver fremvist

// Increment/Decrement Operators (++, --)
//Kan kun påvirke numeriske tal - hvis man bruger dem på en string, virker det ikke med '--', men hvis man '++', så vil det øge det sidste bogstav f.eks. 'c' til et 'd'
$x = 5;

$x++; //returnerer værdien først og lægger derefter 1 til
$x--; // returnerer værdien først og trækker derefter 1 fra
++$x; //Lægger 1 til værdien først og returnerer derefter
--$x; //Trækker 1 fra værdien og returnerer derefter

// Logical Operators (&& pipe symbol ! and or xor)
$x = true;
$y = false;

var_dump($x && $y); //både x og y skal være true, for at få true tilbage, hvis en af dem er false, returnerer det false
var_dump($x || $y); //Enten skal x eller y være true for at få true tilbage eller dem begge - short circuit evaluation
var_dump(!$x || $y); //her tjekker vi om $x er false eller $y er true - short circuit evaluation
$z = $x and $y; //Man skulle tro det ville fungere som && men and vurderer først med $x hvis det er true sæt $z til det og discard resten - short circuit evaluation


//Bitwise Operators (& pipe symbol ^ << >>)

// Array Operators (+ == ===)
$x = ['a', 'b', 'c'];
$y = ['d', 'e', 'f', 'g', 'h'];

$e = ['a' => 1, 'b' => 2, 'c' => 3];
$r = ['d' => 4, 'e' => 5, 'f' => 6];

$z = $x + $y; //Tjekker om de 2 arrays, har samme pladser, og ikke på selve værdierne - kun g og h bliver tilføjet
$v = $e + $r; // her vil de blive sat sammen fordi de 2 arrays har forskellige index kalde navne
$v = $e == $r; //returnerer false med var_dump, da de ikke har de samme key value pairs
$v = $e === $r; //

// Execution Operators (``)

// Type Operators (instanceof)

// Nullsafe Operators - PHP8 (?)