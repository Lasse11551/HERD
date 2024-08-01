<?php

declare(strict_types=1);

//Encapsulation beskytter det interne stadie - hvordan objektet ser ud indeni, hvor abstraction beskytter selve implementationen af det - hvad der sker inde i klassen når man benytter en funktion

namespace App\PaymentGateway\StaticPaddle;

class Transaction2
{
    private float $count = 0;

    public function __construct(public float $amount) {
        $this->amount = $amount;
    }

    public function process() {
        echo 'Processing paddle transaction...';
    }

    public function getCount() {
        return $this->amount;
    }

    public function setCount(float $amount) {
        $this->amount = $amount;
    }
}