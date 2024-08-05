<?php

namespace App;

/**
 * @property-read int $x
 * @property-write float $y
 */

class Transaction
{
    /**@var Customer */
    private $customer;

    /**@var float */
    private $amount;
    /**
     * Some description
     * 
     * @param Customer $customer
     * @param float $amount
     * 
     * @throws \RunTimeException
     * @throws \InvalidArgumentException
     * 
     * @return bool
     */
    public function process(Customer $customer, float $amount): bool {

        //process transaction

        //if failed return false

        //otherwise return true
        return true;
    }

    /**
     * @param Customer[] $arr
     */

    public function foo(array $arr){

        /** @var Customer $obj */
        foreach($arr as $obj) {
            $obj->name;
        }
    }

    public function __get(string $name)
    {
        //ToDo
    }

    public function __set($name, $value): void
    {
        
    }
}