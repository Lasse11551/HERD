<?php

namespace App;

class CollectionAgency implements DebtCollector
{
    public function __construct()
    {
        
    }

    public function collect(float $owedAmount): float {
        $guaranteed = $owedAmount * 0.5;

        return mt_rand($guaranteed, $owedAmount); //genererer et random tal mellem $guaranteed (50) og $owedAmount (100)
    }
}