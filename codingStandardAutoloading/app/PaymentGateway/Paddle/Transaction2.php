<?php

declare(strict_types=1);

namespace App\PaymentGateway\Paddle; //Det er en standard at strukturere dine namespace efter folder structure

use App\Enums\Status;

class Transaction2 
{

    private string $status;

    public function __construct()
    {
        $this->setStatus(Status::PENDING);
    }

    public function setStatus(string $status): self
    {
        if(! isset(Status::ALL_STATUSES[$status])) {
            throw new \InvalidArgumentException('Invalid status');
        }
        $this->status = $status;

        return $this;
    }

}