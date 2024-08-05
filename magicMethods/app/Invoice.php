<?php

namespace App;

class Invoice
{

    //Hvis variablen eksisterer bliver disse funktioner ikke automatisk brugt, så ændrer den bare variablen
    //når man prøver at tilgå et variabel som ikke er lavet på et objekt kan man bruge __get til at returnere navnet på variablen man prøver at få fat i

    protected array $data = [];
    private float $amount;
    private int $id;
    private string $accountNumber = 1324124;

//__get, __set

    public function __get($name)
    {
        if(array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }
        return null;
    }
    
    public function __set($name, $value)
    {
        if(property_exists($this, $name)) {
            return $this->name = $value;
        }
        return null;
    }

    //__isset bliver brugt når man prøver at bruge undefined eller unaccesable properties - __unset brugt når man prøver at bruge undefined eller unaccesable properties

    public function __isset($name): bool
    {  
        return array_key_exists($name, $this->data);
    }

    public function __unset($name): void
    {
        unset($this->data[$name]);
    }

    // __call - __callStatic

    public function __call($name, $arguments)
    {
        var_dump($name, $arguments);
    }

    public function __callStatic($name, $arguments)
    {
        var_dump('static', $name, $arguments);
    }

    // __toString - //Udskriver dette, hvis man prøver at echo et objekt - bruges tit til at udskrive et objekts fulde værdier og variabler
    public function __toString(): string
    {
        return 'hello';
    }

    // __invoke - bliver kørt man prøver at kalde et objekt direkte
    public function __invoke()
    {   
        var_dump('invoked');
    }

    // __debugInfo
    public function __debugInfo()
    {
        return [
            'id' => $this->id,
            'accountNumber' => '****' . substr($this->accountNumber, -4)
        ];
    }
}