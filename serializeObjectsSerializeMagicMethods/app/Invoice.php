<?php

namespace App;

class Invoice 
{
    protected string $id;

    public function __construct()
    {
        $this->id = uniqid('invoice_');
    }
}