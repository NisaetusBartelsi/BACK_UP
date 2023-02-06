<?php
//NOMOR SATU
//MEAN

function MEAN($ns){
    $a = array_sum($ns) / count($ns);
    return  $a ;
}
$ns = [5, 9, 6, 7, 9, 8, 10, 7, 8];
echo "MEAN :". MEAN($ns)."\n"  ;


//MEDIAN
$ns = [5, 9, 6, 7, 9, 8, 10, 7, 8];
sort($ns);
$a = count($ns);
$b = $a / 2 ;
$c = (int) $b ;
$d = $ns[$c];
echo "INI MEDIAN GOBLOK = ".$d."\n";

//NOMOR MODUS

$ns = [5, 9, 6, 7, 9, 8, 10, 7, 8];
$a = array_count_values($ns);
foreach ($a as $b => $c){
    if ($c == max ($a)){
        echo "Mode [$b] data [$c]";
        echo "\n";
    }
}

//NOMOR DUA
$ns = [5, 9, 6, 7.1, 9, 8, 10, 7, 8];
rsort($ns);

    foreach($ns as $n){
        if($n >= 9){
            echo "$n " ;

        } else if( $n <= 7) {
            echo "$n ";
        }
    }

    echo "\n";
    


//  NOMOR TIGA
function retangle(int $widht,int $height){  
    $area  = $widht * $height;
    echo "LUAS PERSEGI PANJANG JIKA "."\n"."TINGGINYA "."\n".$height."\n". "DAN PANJANGNYA"."\n".$widht ."\n"."ADALAH "."\n".$area ."\n"; 
}
retangle(12,21);
//NOMOR 4

//SEGITIGA

function TRIANGLE(int $pedestal, int $height){
    $area = $pedestal * $height/2;
    echo "THE TRIANGEL area IF "."\n"."THE HEIGHT"."\n".$pedestal."\n"."THE PEDESTAL"."\n"."$height"."\n"."="."\n".$area."\n";
}
TRIANGLE(10,45);

//LINGKARAN

function CIRCLE(int $radius,float $π){
    $area = $radius * $radius  * $π ;
    echo "THE CIRCLE area IF "."\n"."THE RADIUS"."\n".$radius."\n"."And THE π "."\n"."$π"."\n"."="."\n".$area."\n";
}
CIRCLE(14,22/7);

//TRAPESIUM
function TRAPESIUM(int $pedestial,int $roof,int $height){
    $area = ($pedestial+$roof) * $height ;
    echo "THE TRAPESIUM area IF "."\n"."THE PEDESTIAL"."\n".$pedestial."\n"."And ROOF "."\n".$roof."\n"."HEIGHT"."\n".$height."\n"."="."\n".$area."\n";
}
TRAPESIUM(4,6,8);
// TRAPESIUM();


//NOMOR LIMA

$numbers = [2, 3, 4, 5, 6, 7, 8, 9];
function referensi(&$numbers){
    foreach($numbers as $number){
        echo "$number  ";
    }

}
$pick = [6, 9, 12, 15, 18, 21, 24, 27];
referensi($pick);
echo $pick;
?>