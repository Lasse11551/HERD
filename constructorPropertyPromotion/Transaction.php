<?php

declare(strict_types=1);

//En kortere måde at opsætte en klasse og constructor på, man kan sætte variablerne der er til klassen i constructoren
class Transaction
{
    public function __construct(
        private float $amount, 
        private string $description
        ) //constructor også kaldet en magic method
    {
        $this->amount = $amount;
    }
}