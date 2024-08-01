<?php

namespace App;

abstract class Field
{
    public function __construct(protected string $name)
    {
        
    }

    abstract public function render(): string; //abstract methods, does not return anything, but only sets up the method, with return type and so on
    
}