<?php

//Tjek videoen for at forstå composer - bruges til at holde styr på dependencies og autoloader

use App\PaymentGateway\Paddle\Transaction2;
use App\Enums\Status;

spl_autoload_register(function($class) { // En autoloader må ikke returnere noget eller kaste en fejl/error
    $path = __DIR__ . '/../' . lcfirst(str_replace('\\', '/', $class)) . '.php';

    if(file_exists($path)) {
        require $path;
    }
});

$transaction = new Transaction2();

$transaction->setStatus(Status::PAID);

var_dump($transaction);