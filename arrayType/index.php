<?php

// ARRAYS
// I arrays får hvert element et index - det første starter på 0 også videre
$programmingLanguages = ['PHP', 'Java', 'Python'];

//En anden måde at opsætte et array er med key value pairs - multidimensional arrays
$programmingLanguagesVersion = [
    'php' => [
        'creator' => 'Rasmus Lerforf',
        'extension' => '.php',
        'website' => 'www.php.net',
        'isOpenSource' => true,
        'versions' => [
            ['version' => 8, 'releaseDate' => 'Nov 26, 2020'],
            ['version' => 7.4, 'releaseDate' => 'Nov 28, 2019'],
        ],
    ],
    'python' => '3.9'
];

//Hvis man prøver at tilgå et index som ikke eksisterer eller ikke har nogen værdi, vil man få en warning med undefinded array key at index
// eksempel på warning  - echo $programmingLanguages[3]; da der ikke er en værdi på plads 3, kun på 0, 1, 2
echo $programmingLanguages[1];

//For at undgå denne fejl kan man benytte sig af var_dump og isset

var_dump(isset($programmingLanguages[0]));
var_dump(isset($programmingLanguages[3]));


//Man kan også benytte sig af functionen count, til at finde ud af hvor mange ting der er i arrayet
echo count($programmingLanguages);

//Man kan også tilføje ting til arrayet
$programmingLanguages[] = 'C++';

//En anden måde man kan bruge er at benytte sig af funktionen array_push, hvor man specificerer hvilket array man arbejder med og hvad man gerne vil tilføje
array_push($programmingLanguages, 'C', 'GO', 'Javascript');

//Indsæt værdier i et array som key value pairs
$newLanguage = 'GO';

$programmingLanguagesVersion[$newLanguage] = '1.15';

//Man kan bruge var_dump på hele arrayet, men det er ikke så læsbart, så derfor kan man bruge print_r istedet
// at echo pre, gør det meget læsbart og laver det til en form for liste
echo '<pre>';
print_r($programmingLanguages);
echo '<pre>';

echo '<pre>';
print_r($programmingLanguagesVersion);
echo '<pre>';

echo $programmingLanguagesVersion['php']['versions'][0]['releaseDate'];

// Tidligere med strings, kunne man tilgå et char i en string bagfra, ved at skrive -1
/*$name = 'Gio';
echo $name[-1]; // Dette vil give bagstavet 'o'
*/

//Benyt pop til at fjerne sidste element og og shift til at fjerne det første element
//Du kan også bruge unset til at fjerne elementer - hvis du skriver selve arrayet ind i unset fjernes hele arrayet
//Unset reindexer dog ikke arrayet, så hvis du fjerner alle elementer i et array med det, og pusher et nyt vil det første fra 
//det næste index, der var da der var værdier i arrayet

//En måde at tjekke om noget eksisterer i et array - array_key_exist eller isset
$array = ['a' => 1, 'b' => null];

//Fortæller om key'en eksisterer i arrayet
var_dump(array_key_exists('a', $array));

//Fortæller dig om key'en eksisterer og om den er null
var_dump(isset($array['a']));


