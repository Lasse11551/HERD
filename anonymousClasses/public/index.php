<?php

spl_autoload_register(function($class) { // En autoloader må ikke returnere noget eller kaste en fejl/error
    $path = __DIR__ . '/../' . lcfirst(str_replace('\\', '/', $class)) . '.php';

    if(file_exists($path)) {
        require $path;
    }
});

use App\ClassA;
use App\MyInterface;

// $obj = new class(1, 2, 3) implements MyInterface {
//     public function __construct(public int $x, public int $y, public int $z)
//     {
        
//     }
// };

// foo($obj);

// function foo(MyInterface $obj){
//     var_dump($obj);
// }

$obj = new ClassA(1, 2);

var_dump($obj->bar());

