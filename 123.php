<?php
echo "DO YOU WANT TO TURN-ON LUROB (YES) (NO) ?".PHP_EOL;
$a = trim(fgets(STDIN));
if ($a == "YES"){
    class lurob{
        public static $battery = 100 ;
        public static $b = 0 ;
    
        public static function onward (){
//--------//The Comand for onward and count the step//--------//
            $b = self::$b = self::$b +=1;
            echo "I WALK 1 STEP" .PHP_EOL.PHP_EOL;
            
            if($b % 5 == 0 || $b ){
                self :: $battery -=2; 
            }
        }
    
        public static function retreat (){
    
        }
        public static function ceck (){
            $b = self :: $b ;
            echo "I HAVE WALKED $b $";
            
        }
    }
    
    echo "MARHABAN ISMI LUROB".PHP_EOL;
    echo "I CAN DO SOME COMAND PLEASE SELECT WIHT NUMBER ". PHP_EOL. PHP_EOL;
    echo "1).ONWARD". PHP_EOL;
    echo "2).RETREAT". PHP_EOL;
    echo "3).CHARGE". PHP_EOL;
    echo "4).CECK". PHP_EOL;
    echo "5).TURN-OFF".PHP_EOL;
    
    $a = trim(fgets(STDIN));
    if($a == 1){
}
}else{

}






?>