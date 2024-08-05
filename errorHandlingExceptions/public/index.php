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

// Når man bare sætter en generisk exception handler ind som \Exception, fanger den all fejl der er sat under den, dog er der fejl som f.eks. er under\throwAble istedet, som \Exception ikke fanger, men laver fatal error istedet

use App\Invoice;
use App\Customer;
use App\Exception\MissingBillingInfoException;

$invoice = new Invoice(new Customer());

try {
    $invoice->process(25);
} catch (MissingBillingInfoException $e) {
    echo $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine() . PHP_EOL;
} catch (\InvalidArgumentException $e) {
    echo $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine() . PHP_EOL;
} finally { //finally block vil altid blive kørt, lige meget hvilken exception der bliver fanget
    echo 'Finally block' . PHP_EOL;
}




//exceptiosn kan skabes med at bruge throw keyword