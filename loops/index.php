<?php

// LOOPS

// while
$i = 0;
while ($i <= 15) {
    echo $i++;
}

$j = 0;

while ($j <= 15) {
    if($j %2 ===0) {
        $j++;

        continue;
    }

    echo $j++ . ',';
}

//Der er også en syntax til while loop som bliver brugt når man skal skrive php i html
// while (condition):
    //do something
//endwhile:

// do-while - do while loop tjekker på conditionen efter den har kørt loopet mindst en gang
$i = 0;
do {
    echo $i++;
} while($i <= 15);

// For
for($i =0; $i < 15; $i++) {
    echo $i;
}

// foreach
$programmingLanguages = ['php', 'Java', 'c++', 'go', 'rust'];

foreach($programmingLanguages as $key => $language) {
    echo $key . ': ' . $language . '<br>';
}
unset($language);

//Efter en reference i et foreach loop, skal du destory referencen, da værdien for den stadig holde, så hvis du bruger samme variabel navn igen, er der stadig fra tidligere

$user = [
    'name' => 'Gio',
    'email' => 'gio@email.com',
    'skills' => ['php', 'graphql', 'react'],
];

foreach($user as $key => $value) {
    if(is_array($value)) {
        $value = implode(',', $value);
    }
    echo $key . ': ' . $value . '<br />';
}