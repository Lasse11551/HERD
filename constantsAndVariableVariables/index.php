<?php

// Constants
// Når man har defineret en constant kan man ikke overskrive eller ændre den

//Metode 1 til at lave en constant - define - key value pair

$paid = 'PAID ';

define('STATUS_PAID', $paid);

//Metode 2 til at lave en constant 

const STATUS_PAID2 = 'paid ';

//Forskellen på de 2 er at const er defineret på compile time og define er defineret på run time
//Const kan ikke bruges inde i if statements eller f.eks. loops

//Hvornår bruger man constants?
//Man bruger det til når man har noget statisk data, f.eks. STATUS_PAID

//Variable Variables
// Med variable variables, er navnet på nr. 2 værdi, værdien af nr. 1 værdi - så her er kaldenavnet for $$foo 
//altså bar - man kan også benytte sig af $$foo til at kalde på værdien

$foo = 'bar';
$$foo = ' baz ';

echo $foo, $bar;

echo STATUS_PAID;
echo STATUS_PAID2;

//Pre defined constants

echo PHP_VERSION;

//Magic Constants - kan ændres på baggrund af hvor de bliver brugt f.eks.

echo " " . __LINE__; //Dette vil printe hvilke linje af koden vi er på, hvilket vil ændre sig ud fra hvilken linje man er på