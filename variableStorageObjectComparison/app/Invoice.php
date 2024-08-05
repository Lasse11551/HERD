<?php

namespace App;

class Invoice
{
    public function __construct(public int $amount, public string $description)
    {
        
    }
}