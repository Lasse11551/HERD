<?php

// Date & Time

$currentTime = time(); // returnerer antallet af sekunder der er gået siden 1970 januar 1

echo $currentTime . '<br />';

echo $currentTime + 5 * 24 *60 * 60 . '<br />'; // returnerer tiden fem dage i fremtiden

echo $currentTime - 60 * 60 * 24 . '<br />'; //returnerer et tidsstempel igår

echo date('m/d/Y g:ia') . '<br />';
            //format    //tidsindput
echo date('m/d/Y g:ia', $currentTime + 5 * 24 * 60 * 60) . '<br />';

echo date('m/d/Y g:ia', $currentTime - 60 * 60 * 24) . '<br />';

echo date_default_timezone_get() . '<br />';

date_default_timezone_set('America/New_York');

echo date('m/d/Y g:ia') . '<br />';

echo date('m/d/Y g:ia', $currentTime + 5 * 24 * 60 * 60) . '<br />';

echo date('m/d/Y g:ia', $currentTime - 60 * 60 * 24) . '<br />';

echo date_default_timezone_get() . '<br />';

//mktime

echo date('m/d/Y g:ia', mktime(0, 0, 0, 4, 10, null)) . '<br />';

echo date('m/d/Y g:ia', strtotime('2021-01-18 07:00:00')) . '<br />';
echo date('m/d/Y g:ia', strtotime('tomorrow')) . '<br />'; // imorgen midnat
$date = date('m/d/Y g:ia', strtotime('first dat of february')) . '<br />'; // 

var_dump(date_parse($date));
var_dump(date_parse_from_format('m/d/Y g:ia', $date));