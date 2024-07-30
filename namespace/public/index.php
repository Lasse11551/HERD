<?php

require_once '../PaymentGateway/Paddle/Transaction.php';
require_once '../Notification/Email.php';
require_once '../PaymentGateway/Paddle/CustomerProfile.php';
require_once '../PaymentGateway/Stripe/Transaction.php';

use PaymentGateway\Paddle;
use PaymentGateway\Stripe\Transaction1 as StripeTransaction;


$paddleTransaction = new Paddle\Transaction1();
$stripeTransaction = new StripeTransaction();
$paddleCustomerProfile = new Paddle\CustomerProfile();

var_dump($paddleTransaction, $stripeTransaction);