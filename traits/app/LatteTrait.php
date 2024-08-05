<?php

namespace App;

trait LatteTrait
{

    private string $milkType = 'whole-milk';
    //protected string $milkType = 'whole-milk'; //hvis du definerer variabler i trait, kan du ikke redefinere dem andre steder, det skal være præcist det samme
    public function makeLatte() {
        echo static::class . ' is making latte ' . $this->milkType . PHP_EOL;
    }

    public static function foo() {
        echo 'foobar';
    }

    public function setMilkType(string $milkType): static {

        $this->milkType = $milkType;
        return $this;
    }

    
}