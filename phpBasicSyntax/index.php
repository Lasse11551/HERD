<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php echo "Hello World!"?>
    </h1>
    <p>My first paragraph</p>
    <?php 
        //Syntax for at lave en variabel
        $x = 10;
        $y = 5;

        echo '<p>' . $x, ", ", $y . '</p>';
        ?>
    
</body>
</html>

<?php
//Tid til at bruge semicolon igen :(
/*Den generelle regel omkring php er at hvis det er en fil med ren php kode, 
så skal der et closing tag på, hvis det er i html kode, så skal der ikke et 
closing tag på*/

//Echo eller print bruges til at udskrive noget, ligesom console.log()
//print har en retur værdi på 1 - så det skal huskes så det ikke kommer på det man udskriver
//Echo er dertil en lille smule hurtigere end print

$firstName = 'Gio ';
$x = 1;
$y = &$x; //Hvis man ikke benytter sig af "&" tegnet vil y ikke ændre sig efter at x ændrer sig

$x = 3;

echo "Hello {$firstName} ";
echo $y;
