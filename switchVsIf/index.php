<?php

// Switch

$paymentStatus = 'paid';

switch($paymentStatus) { //Kører et loose statement check
    case 'paid';
        echo 'Paid';
        break; // hvis man f.eks. er inde i et while også herinde kan man bruge break 2; så hopper man ud af 2 ting

    case 'declined';
        echo 'Payment Declined';
        break;
    
    case 'pending';
        echo 'Pending Payment';
        break;

    default:
        echo 'Unknown Payment Status';
}