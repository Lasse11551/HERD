<?php

namespace App;

interface DebtCollector //Et interface er hvor du definerer funktionerne i forhold til anvn og hvilke parameter, der skal bruge, men du laver ikke implementationen her - det gør man hvor man siger implements også interface navnet
{
    public const MY_CONSTANT = 1;
    public function collect(float $owedAmount): float;
}