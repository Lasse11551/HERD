<?php

// Classes & Objects

require_once '../Transaction.php';

$transaction1 = (new Transaction(100, 'Transaction 1'))
->addTax(8)
->applyDiscount(10)
->getAmount();


$transaction2 = (new Transaction(100, 'Transaction 2'))
->addTax(8)
->applyDiscount(10)
->getAmount();


var_dump($transaction1, $transaction2);