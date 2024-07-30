<?php

declare(strict_types=1);

class Transaction
{
    private float $amount; //type hinting er anbefalet men ikke krævet - give variablen en datatype
    private string $description;

    public function __construct(float $amount, string $description) //constructor også kaldet en magic method
    {
        $this-> amount = $amount;
        $this->description = $description;
    }

    public function addTax(float $rate): Transaction
    {
        $this->amount += $this->amount * $rate /100;

        return $this;
    }

    public function applyDiscount(float $rate): Transaction
    {
        $this->amount -= $this->amount * $rate / 100;

        return $this;
    }

    public function getAmount(): float
    {  
        return $this->amount;
    }

    public function __destruct()
    {
        echo 'Destruct ' . $this->description . '<br />';
    }
}