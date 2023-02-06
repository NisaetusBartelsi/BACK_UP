<?php
// nomor 1
$sisi = 7;
//jawabannya
$luas_persegi = $sisi*$sisi;

echo $luas_persegi . "\n";
//nomor 2
$PA =7;
$PB =3;
$T  =4;

$LT = 1/2*($PA+$PB)*$T;

echo $LT . "\n";
//soal 3

$d=11;
$phie=22/7;
$LL = 1/2*$d*$d*$phie;
$LK = $phie*$d;

echo $LL . "\n";
echo $LK . "\n";

//soal 4
$c=37;

$F  = 9/5 * $c + 32  ;
$K  = $c + 275.15 ;
$R  = $c * 4/5 ;

echo $K  . "\n" ;
echo $F  . "\n" ;
echo $R  . "\n" ;
//soal no 5
$jumlah = 0;


for ($n = 0; $n <= 37; $n++) {
    ( $jumlah = $jumlah+1*3 );
    echo   $n . "=" . $jumlah . "\n";
}



?>