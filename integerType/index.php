<?php

/* INTEGERS */

//Integers er tal uden decimaler på - hele tal

//Predefined constants - ændrer sig i forhold til hvor mange bit systemet kører på
PHP_INT_MAX;
PHP_INT_MIN;
PHP_INT_SIZE;

//Integers kan blive defineret med base 10 (standard) - eller med hexidecimal tal, octotal (ved jeg ikke hvad er) eller binære tal

$x = 10; //Printer 10 - standard
$y = 0x2A; //Printer 42 - hexadecimal
$t = 0b110; // Printer 6 - binære tal

$s = PHP_INT_MAX + 1;

//Hvis et integer går "out of bounds" som det gør her, da vi går over den maksimale integer værdi, bliver det til et float
var_dump($s);

//Casting med integer
$t = (int) true; // bliver til 1 - hvis det var false så = 0
$y = (int) 5.98; //med float runder den altid ned
$u = (int) '5.9'; //Hvis en string er numerisk, bliver det bare til det numeriske tal
$k = (int) 'dsds'; //Dette kan den ikke lave til et tal, så derfor bliver det til 0
$h = (int) '23dskmk'; //Den vil altid førsøge at lave det til et tal, så den fjerne alle bogstaver og returnerer kun de tal der er
$i = (int) null; //null bliver også til 0

//man kan også benytte sig af is_int til at tjekke om noget er en integer

//Man kan også benytte sig af underscore i tal for at gøre det mere læsbart
$l = 200_000; //Dette vil returnere 200000 - fungerer ikke hvis det er en string så printer den bare de underscores ud