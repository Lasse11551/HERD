<?php

/* STRINGS */

//Strings kan skrive i single eller double quotes - hvis man benytte sig af double quotes, kan man også benytte sig af andre 
//variabel naven i det
$firstName = 'Will';
$lastName = "Smith";

$name = $firstName . ' ' . $lastName;

$name[1] = 'I';

echo $name . '<br />';

//Man kan tilgå specifikke pladser i en string som man gør med et array - med minus værdier gør man det fra slutningen

echo $name[0];
echo $name[-2];

// Heredocs

$text = <<<TEXT
    <p>Hello</p>
    <p>World</p>
TEXT;

echo $text; //Skriver det på en linje
echo nl2br($text); //Laver en ny linje for hver

//Nowdoc

$text = <<<'TEXT'
Line 1
Line 2
Line 3
TEXT;

echo '<br />';
echo nl2br($text);
