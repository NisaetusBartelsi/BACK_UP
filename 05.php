<?php
function sirsak ($angka) {
    echo "angkanya adalah : $angka \n";
} 
$g =16;
sirsak($g);

?> 
<?php
function tambah($a,$b){
    $hasil = $a + $b;
    echo "hasilnya : ".$hasil ."\n";
}
tambah(2,7);
?>
<?php
function kurang($a,$b){
    $hasil = $a - $b;
    return $hasil + 1;
}
echo "hasilnya 2 - 7 is". kurang(2,7) . "\n" ;
//NILAI DEFAULT VALUE
?>
<?php
function mobil($nama = "SUPRA"){
    echo "mobilku adalah $nama \n";
}
mobil();
?> 
<?php

//closeure

?>