<?php

// Working with filesystem

$dir = scandir(__DIR__);

var_dump($dir);
var_dump(is_file($dir[2]));
var_dump(is_dir($dir[2]));

//mkdir('foo/bar', recursive: true);
//rmdir('foo');

//tjek om en fil eksisterer og indsæt noget i den

/*if(file_exists('foo.txt')) {
    echo filesize('foo.txt');

    file_put_contents('foo.txt', 'hello world');

    clearstatcache();
    echo filesize('foo.txt');
} else {
    echo 'File not found';
}*/

//Tjekke om en fil eksisterer, hvis den ikke gør print noget. hvis den eksisterer læs den og print linje for linje ud, indtil der ikke er mere
//Også luk filen bagefter

/*if(! file_exists('foo.txt')){
    echo 'File not found';

    return;
}
$file = fopen('foo.txt', 'r');

while (($line = fgetcsv($file)) !== false) {
    print_r($line);
}

fclose($file);*/

// få indhold af en fil, også læs specifikke ting i det med offset og length
$content = file_get_contents('foo.txt', offset: 3, length: 2);

echo $content;

//Indsæt noget i en fil - hvis filen ikke eksisterer laver den filen og indsætter teksten. Hvis du ikke indsætter FILE_APPEND, overskriver den filen
file_put_contents('bar.txt', 'hello', FILE_APPEND);

// slet filer
unlink('bar.txt');

//kopier content fra en fil til en anden
copy('foo.txt', 'bar.txt');

// hvis du ikke vil kopiere men rename
rename('foo.txt', 'bar.txt');

