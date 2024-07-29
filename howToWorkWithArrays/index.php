<?php

// prebuilt array functions

//array_chunk(array $array, int $length, bool $preserveKeys = false): array
//Opdeler array i nye arrays, som chunks - første parameter er hvilket array der skal opdeles, andet parameter er hvor mange 
//index værdier der må være i hvert array, tredje parameter er om keys skal forbeholde/vedvare/preserve

require('helpers.php');

$items = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5, 'f' => 6];
prettyPrintArray(array_chunk($items, 3, true));

// array_combine($array $keys, $array $values): array
// sætter 2 arrays sammen hvor det første array er keys, og det andet array er value - key value pairs
// hvis størrelsen på de 2 arrays ikke var ens ville der komme en error

$array1 = ['a', 'b', 'c'];
$array2 = [5, 10, 15];

prettyPrintArray(array_combine($array1, $array2));

// array_filter(array $array, callable|null $callback = null, int $mode = 0): array

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$even = array_filter($array, fn($number) => $number % 2 == 0, ARRAY_FILTER_USE_BOTH);

$even = array_values($even);

prettyPrintArray($even);

// array_keys(array $keys, mixed $search_value, bool $strict = false): array
// returnerer et array med de index'es som har din søge værdi

$array3 = ['a' => 5, 'b' => 10, 'c' => 15, 'd' => 5, 'e' => 10];
        //specifikke array, søge værdi, om det skal være losely comparison eller strict comparison
$keys = array_keys($array, 15, true);

prettyPrintArray($keys);

// array_map(callable|null $callback, array $array, array ...$arrays): array
// Send each value of an array to a function, multiply each value by itself, and return an array with the new values

$array4 = [1, 2, 3, 4, 5];

$array4 = array_map(fn($number) => $number * 3, $array4);

prettyPrintArray($array);

$array5 = ['a' => 1, 'b' => 2, 'c' => 3];
$array6 = ['d' => 4, 'e' => 5, 'f' => 6];

$array7 = array_map(fn($number5, $number6) => $number5 * $number6, $array5, $array6);

prettyPrintArray($array);

// array_merged(array ...$arrays): array
// Merge two arrays into one array - appender bare arrayet, hvis det ikke har samme key som en der allerede i er i arrayet, hvis det har overskriver det værdien

$array8 = [1, 2, 3];
$array9 = [4, 5, 6];
$array10 = [7, 8, 9];

$merged = array_merge($array1, $array2, $array3);

prettyPrintArray($merged);

// array_reduce(array $array, callable $callback, mixed $initialValue = null): mixed
$invoiceItems = [
    ['price' => 9.99, 'qty' => 3, 'desc' => 'Item 1'],
    ['price' => 29.99, 'qty' => 1, 'desc' => 'Item 2'],
    ['price' => 149, 'qty' => 1, 'desc' => 'Item 3'],
    ['price' => 14.99, 'qty' => 2, 'desc' => 'Item 4'],
    ['price' => 4.99, 'qty' => 4, 'desc' => 'Item 5']
];

$total = array_reduce(
    $invoiceItems, 
    fn($sum, $item) => $sum + $item['qty'] * $item['price'],
    500
);

echo $total;

//array_search(mixed $needle, array $haystack, bool $strict = false): int|string|false

$array11 = ['a', 'b', 'c', 'D', 'E', 'ab', 'bc', 'cd', 'b', 'd'];

$key = array_search('b', $array11);

var_dump($key);

// array_diff

$array12 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$array13 = ['f' => 4, 'g' => 5, 'i' => 6, 'j' => 7, 'k' => 8];
$array14 = ['l' => 3, 'm' => 9, 'n' => 10];

prettyPrintArray(array_diff($array12, $array13, $array14)); // vurderer det første array mod de resterende, og vil returnere de værdier, der er i det første array, som ikke er i de andre - tjekker kun værdier og ikke keys

prettyPrintArray(array_diff_assoc($array12, $array13, $array14));// vurderer det første array mod de resterende, og vil returnere de værdier, der er i det første array, som ikke er i de andre - tjekker både keys og værdier

// sort array

$array15 = ['d' => 3, 'b' => 1, 'c' => 4, 'a' => 2];

prettyPrintArray($array15);

asort($array15); // sorterer i forhold til værdierne
ksort($array15); // sorterer i forhold til keys

prettyPrintArray($array15);

// array destructor
//tjek det på nettet

