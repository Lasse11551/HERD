<?php

spl_autoload_register(function ($class) {
    // Define the base directory for the namespace prefix
    $prefix = 'App\\';
    $baseDir = __DIR__ . '/../app/';

    // Does the class use the namespace prefix?
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        // No, move to the next registered autoloader
        return;
    }

    // Get the relative class name
    $relativeClass = substr($class, $len);

    // Replace the namespace prefix with the base directory, replace namespace
    // separators with directory separators in the relative class name, append
    // with .php
    $file = $baseDir . str_replace('\\', '/', $relativeClass) . '.php';

    // If the file exists, require it
    if (file_exists($file)) {
        require $file;
    } else {
        throw new Exception("Class file not found for $class at $file");
    }
});

//createFromFormat, kan bruges hvis du skal lave DateTime objektet om fra US time til EU time

$date = '12/05/2024 3:30PM';

$dateTime = DateTime::createFromFormat('d/m/Y g:iA', $date);

var_dump($dateTime);

//Comparison på DateTime objekter

$dateTime1 = new DateTime('05/25/2024 9:15 AM');
$dateTime2 = new DateTime('03/15/2024 9:14 AM');

var_dump($dateTime1 < $dateTime2);
var_dump($dateTime1 > $dateTime2);
var_dump($dateTime1 == $dateTime2);
var_dump($dateTime1 <=> $dateTime2);
var_dump($dateTime1->diff($dateTime2));
echo $dateTime2->diff($dateTime1)->format('%Y years, %m months, %d days, %H, %i, %s') . PHP_EOL;
$interval = new DateInterval('P3M2D'); //tilføj et hvis antal dage, måneder til et DateTime objekt
$dateTime1->add($interval);
echo $dateTime1->format('m/d/Y g:iA') . PHP_EOL;


// $dateTime = new DateTime('05/12/2024 3:30PM'); // bruger default timezone UTC - indsæt 'tomorrow' som variabel får du tiden imorgen

// echo $dateTime->format('m/d/Y g:iA') . PHP_EOL;

// $dateTime->setTimezone(new DateTimeZone('Europe/Amsterdam'));

// echo $dateTime->format('m/d/Y g:iA') . PHP_EOL;