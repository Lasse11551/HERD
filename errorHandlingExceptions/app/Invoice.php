<?php

namespace App;

use App\Customer;
use App\Exception\MissingBillingInfoException;

class Invoice
{

    private Customer $customer;
    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    public function process(float $amount): void {

        if($amount <= 0) {
            throw new \InvalidArgumentException('Invalid invoice amount');
        }

        if(empty($this->customer->getBillingInfo())) {
            throw new MissingBillingInfoException();
        }
        echo 'Processing $' . $amount . 'invoice - ';
        
        sleep(1);

        echo 'OK' . PHP_EOL;
    }
}