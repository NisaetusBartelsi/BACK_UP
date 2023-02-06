<?php
// Array Index

$a =["A",1,TRUE];
var_dump($a);
echo $a [1]."\n";

// Array Asosiatif        
$Laptop = [
    "MESIN" => " AMD RYZEN 5 3500 ",
    "RAM" => "12GB",
    "LAYAR" => "15,6 INCH"

];
//PEMANGGILAN ARRAY ASSOSIATIF
echo '$Laptop = [RAM]'."\n";

//
$angka = [4,15,25,1,35,2,77,30];
//rsort untuk ngurutkan array dari yang terbesar
rsort($angka);

foreach ($angka as $a){
    echo "$a ";

}
echo "\n";
//Penaambahan Array diluar 
$mobil [] ="ALPHARD";
$mobil [] ="BMW";
$mobil [] ="FERARY";

var_dump($mobil);
//Untuk menghapus penambahan array
unset($mobil [2] );
var_dump($mobil);

$kue = [
    "ukuran" => "30cm",
    "rasa" => "Green Tea",
    
];
$kue["harga"] = "50.000";
var_dump($kue);


$Buku = ['KIMIA','FISIKA','BIOLOGI'];
$Mobil = ['FERARY','LAMBO','SUPRA'];

function panggil($books){
    foreach ($books as $book){
        echo $book;
        echo "\n";
    }
}

panggil($Buku );
panggil($Mobil );
?>
<!-- 

-->