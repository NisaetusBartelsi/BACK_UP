<?php

class pi
{
public static $pi=10;
public static $p=5;

static function return_luas()
{
    $luasA = self::$pi*self::$p;
    return $luasA;
}
}

// echo pi::$pi * pi::$p; // untuk memanggil yang atas
// echo "\n";

$luasB = pi::return_luas();
echo $luasB . "\n";

