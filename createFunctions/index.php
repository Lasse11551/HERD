<?php

// Functions
// Man kan ikke have 2 funktioner som hedder det samme

foo(); // hvis man ikke kalder foo først her vil bar ikke kunne blive kørt, da den først bliver declared efter at foo er blevet kaldt
bar();

    function foo() {
        echo 'Foo';
        function bar() {
            echo 'Bar';
        }
    }

function hoo(): int|float { //Her fortæller vi php at den forventet datatype på retur værdien er int - man kan også fortælle den at den kan forvente 2 forskellige værdier
    return 1;
}

function poo(): mixed { //Man kan skrive mixed for at fortælle at der kan være forskellige slags return datatyper
    return 1;
}
