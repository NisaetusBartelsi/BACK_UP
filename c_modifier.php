<?php

class mobil{
    public $name = "mustang";
    protected $CC = "700 HP";
}
$mustang = new mobil();
echo $mustang->name;// OK
// echo $mustang->CC;//ERROR KARENA PROTECTED

?>