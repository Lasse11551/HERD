<?php

namespace App;

class ClassA
{
    protected static string $name = 'A';

    public static function getName() {
        
        return static::$name; //benyt static keywordet, for at benytte late static binding
    }
}