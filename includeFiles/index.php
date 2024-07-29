<?php

// require / require_once / include / include_once

//include 'file.php'; //include vil resultere i en warning - som ikke stopper scriptet

require_once 'file.php'; //require vil resultere i en error - vil stoppe scriptet

//Hvis jeg bare brugte require, ville den hente $x værdien fra file.php igen på nr 2 og vil printe 5 anden gang - overskriver værdien der er blevet tilføjet 

include './partials/nav.php';

$x++;

echo $x . '<br />';

require_once 'file.php';

echo $x . '<br />';

echo 'Hello World';

