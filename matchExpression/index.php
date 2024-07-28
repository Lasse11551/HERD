<?php

// Match expression

$paymentStatus = 1;

echo '<br>';

// match bruger strict comparison - så den bruger triple === - tjekker datatype og værdi
$paymentStatusDisplay = match($paymentStatus) { // Match returnerer en expression, og kan derfor sætte til et variabel, da det er en værdi
    1 => 'Paid',
    2, 3 => 'Payment Declined', // Man kan sætte 2 værdier til at give det samme resultat
    0 => 'Pending Payment',
    default => 'Unknown Payment Status',
};

echo $paymentStatusDisplay;

//Fordelen ved en match expression i forhold til et switch statement, er at man få den til at udføre f.eks. 
//en funktion, som returnerer en værdi og dertil behøver man ikke bruge break for at stoppe den

//Med switch behøver man dog ikke en default
//Hvis man modtager en mulighed som man ikke har et svar på så kommer der en error - f.eks. hvis paymentStatus var 5, 
//dette eksisterer ikke i det match jeg har lavet, så derfor kommer der en fejl - man skal komme med et svar på alt
//Derfor er det krævet at man har en default i et match