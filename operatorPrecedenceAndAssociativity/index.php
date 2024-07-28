<?php

// Operator Precedence & Associativity
// https://www.php.net/manual/en/language.operators.precedence.php

$x = 5 + 3 * 5; //Her ganger man først 3*5, da det har højest precedence, og derefter lægger 5 til - man kan dog sætte paranteser 
//omkring 5+3 for at gøre det først

$x = $y = 5; //Operator precedence er her den samme, og derfor kigger vi på associativity - dette har 'right' associativity, 
//derfor læser den det fra højre mod venstre - execute right to left

//Tjek denne video omkring specifikke ting - https://www.youtube.com/watch?v=pmX_-x3LX-k&list=PLr3d3QYzkw2xabQRUpcZ_IBk9W50M9pe-&index=15