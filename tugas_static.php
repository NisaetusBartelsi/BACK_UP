<?php
class robot{
    public static $retention = 10;
    public static $a = 0 ;

    public static function LUROB(){
        echo "MARHABAN ANA LUROB";
    } 
    //WHEN LUROB ONWARD NUMBER ONE
    public static function onward(){
        self::$retention = self::$retention -=2;
        $a = self :: $a = self :: $a += 5 ; 
        echo"I WALK ONWARD 5 STEP, AND I NOW IN  BOX  $a TH ".PHP_EOL;
    }
    //WHEN LUROB RETREAT NUMBER TWO
    public static function retreat(){
        self::$retention = self::$retention -=1;
        $a = self :: $a = self :: $a -= 2 ; 
        echo "I RETREAT 2 STEP , AND I NOW IN  BOX $a TH ".PHP_EOL;
    }
    //WHEN LUROB CECK
    public static function ceck(){
        echo "MY BATTERY NOW IS ".self::$retention ." mAh".PHP_EOL;
    }
    //WHEN LUROB TAKE A REST
    public static function charge(){      
        self::$retention = self::$retention +=2 ;
        echo "I'AM IN REST CONDITION".PHP_EOL;
    }

    public static function control(){
        self::onward();
        self::onward();
        self::retreat();
        self::onward();
        self::retreat();
        self::retreat();
        self::ceck();
        self::charge();
        self::retreat();
        self::ceck();
    }

}


robot::control();
?>


