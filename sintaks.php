<!-- contoh for -->

<?php
for ($i = 0; $i < 5; $i++) {
    echo "Hello World <br>" ;
}
?>

<!-- contoh while -->

<?php
while( $i > 5 ) {
echo "HELLO WORLD! <br>" ;
$i++ ;
}

?>


<!-- contoh do... while  -->

<?php
$i = 10 ; 
do {
echo "Hello World! <br>" ;
$i++;  
} while ($i < 5);

?>

<!-- contoh if else -->

<?php
$x = 10;

if ( $x < 20 ){
    echo "benar";
} else {
    echo "salah";
}
?>

<!-- contoh if... if else ...else -->

<?php
$x = 10;

if ( $x < 20 ){
        echo "benar";
} else if ($x = 20){
    echo "SIRSAK";
} else {
        echo "salah";
} 
?>

<!-- contoh function date -->

<?php
echo date("l d-M-Y");
?>

<!-- contoh function time  -->

<?php
echo time();
?>

<!-- contoh date -->

<?php
echo date("l", time()+60*60*24*365);
?>

<!-- contoh mktime -->

<?php
echo mktime(0,0,0,4,12,2003);
?>

<!-- contoh date + mktime -->

<?php
echo date ("l",mktime(0,0,0,4,12,2003));
?>  

<!-- contoh strototime -->

<?php
echo strtotime("april 12 2003");
?>

<!-- contoh user-defined function  -->

<?php
function salam($waktu = "datang", $nama = "admin"){
    return "selamat $waktu,$nama!";
} 
?>

<!-- contoh array <5.4 -->

<?php
$hari = array ('Senin','selasa','rabu');
?>

<!-- contoh array >5.4 -->
<?php
$bulan = ["Januari",'februari','dll'];
?>

<!-- contoh var_dump -->

<?php
var_dump($hari);
?>

<!-- contoh print_r -->

<?php
print_r($bulan);
?>

<!-- contoh memanggil hanya satu elemen array -->

<?php
echo $hari[0];
?>

<!-- contoh + elemen array  -->

<?php 
$hari [] = "Kamis"
?>

<!-- contoh echo array (for) -->
<?php
$angka = [3,2,15,20,11,34,55,22,34,67,89];
?>

<?php for ($i = 0; $i < count($angka); $i++) { ?>
    <?php echo $angka [$i] ; ?>
<?php } ?>

<!-- contoh templating echo -->

<?= $angka [$i] ; ?>

<!-- contoh foreach -->

<?php foreach( $angka as $a ) { ?>
    <?= $a  ?>
<?php } ?> 

<!-- contoh templating foreach -->

<?php foreach ( $angka as $a) : ?>
    <?= $a ?>
<?php  endforeach; ?>

<!-- contoh array multidimensi numerik -->

<?php
$mahasiswa =[
    ['luqman','0987655432','Backend','f.catus45@gmail.com'],
    ['SIRSAK','123456789','Backend','sirsak23@gmail.com'],
    ['BUNGLON','4567890123','Backend','bunglon5@gmail.com'],
    ['KATAK','6789012345','Backend','katak67@gmail.com'],
];
?>

<!-- contoh array multidimensi asosiatif -->

<?php
$mahasiswa = [
    [
        "nama"      => "Luqman",
        "nrp"       => "123456789",
        "email"     => "luqman@gmail.com",
        "jurusan"   => "backend"
    ],
    [
        "nama"      => "sirsak",
        "nrp"       => "0987654321",
        "email"     => "sirsak@gmail.com",
        "jurusan"   => "backend"
    ]  
];
?>

<!-- cara untuk ngitung aritmatika -->

<?php 
$jumlah = 0;
for ($n = 0; $n <= 37; $n++) {
    ( $jumlah = $jumlah+1*3 );
    echo   $n . "=" . $jumlah . "\n";
}

?>

<!-- contoh masukin INPUT lewat trim(gets(STDIN))  -->

<?php
echo "masukan nilai X : " ;
$x = trim(fgets(STDIN));
echo "masukan nilai Y : ";
$y = trim(fgets(STDIN));
echo "Nilai hasil adalah : " . $x + $y;
?>

<!-- Switch -->

<?php
$buah = "sirsak";
switch($buah){
    case"apel";
    echo "WUIHHH MENGELIKAN \n";
    break;
    case "sirsak";
    echo "3 SANIN \n";
    break;
    default:
    echo "GETOTTT \n";
}

?>
<!-- Milih Bilangan Aritmatika -->
<?php 
$n = 0;
$r = 3;

$r = 3*($n + 1);
echo $r . "\n";
?>

<!-- Contoh class PHP -->

<?php
class mobil{
    public $roda = 4;
    public $bensin = 10; 

    function berjalan($l){
        echo "brum......brum..."."\n";
        $this->bensin = $this->bensin-=$l;
        if ($this->bensin<=0) {
            
            echo"dorong cuy"."\n";
        }
    }
        function isi_bensin($l){
            echo "ISI BENSIN"."\n";
            $this->bensin+=$l;
        }
        function maintence(){
            echo "Bensin = $this->bensin"."\n";
            echo "roda = $this->roda buah"."\n";
        }
        function jebol($l){
            echo "Ban-nya pecah"."\n";
            $this->roda-=$l ;
            "buah"."\n";
        }
    
}


$avanza = new mobil ();
$avanza->berjalan(2)."\n";
$avanza->isi_bensin(4)."\n";
$avanza->maintence();
$avanza->jebol(2);
$avanza->maintence();
?>

<!-- Mean  -->

<?php
function MEAN($ns){
    $a = array_sum($ns) / count($ns);
    return  $a ;
}
$ns = [5, 9, 6, 7, 9, 8, 10, 7, 8];
echo "MEAN :". MEAN($ns)  ;
?>

<!-- Modus  -->
<?php

$ns = [5, 9, 6, 7, 9, 8, 10, 7, 8];
$a = array_count_values($ns);
foreach ($a as $b => $c){
    if ($c == max ($a)){
        echo "Mode [$b] data [$c]";
    }
}

?>

<!-- Mean  -->
<?php
$ns = [5, 9, 6, 7, 9, 8, 10, 7, 8];
sort($ns);
$a = count($ns);
$b = $a / 2 ;
$c = (int) $b ;
$d = $ns[$c];
echo $d."\n";

?>

<!-- Fungsi Bangun Datar  -->
<?php
function TRIANGLE(int $pedestal, int $height){
    $area = $pedestal * $height/2;
    echo "THE TRIANGEL area IF "."\n"."THE HEIGHT"."\n".$pedestal."\n"."THE PEDESTAL"."\n"."$height"."\n"."="."\n".$area."\n";
}
TRIANGLE(10,45);
?>

<!-- Ganti Variabel Function -->
<?php

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
<!-- Rumus Dasar Bikin Bintang -->
<?php
for ($x = 0 ; $x <= 9 ; $x++){
    for ($y = 9 ; $y > 0 ; $y--){
        if($x + $y < 10 || $x < $y){
            echo "- ";

        }else{
            echo"* ";
        }
    }        echo "\n";
}

?>

<!-- Bikin bintang pake cara Otak dewek -->

<?php
for ($a = 1 ; $a <= 9 ; $a++){
    for($b = 1 ; $b <=9  ; $b++){
        if($a == 9||$b == 9-4&&$a!=4&&$a!=3&&$a!=2&&$a!=1) {
    echo "* ";
        }else if($a == 8 &&$b!=1&&$b!=9){
            echo "* ";
        }else if($a == 7 &&$b!=1&&$b!=2&&$b!=8&&$b!=9){
            echo "* ";
        }else if($a == 6 &&$b!=1&&$b!=2&&$b!=3&&$b!=7&&$b!=8&&$b!=9 ){
            echo "* ";
        }else if($a == 5 &&$b!=1&&$b!=2&&$b!=3&&$b!=4&&$b!=6&&$b!=7&&$b!=8&&$b!=9 ){
            echo "* ";
        }else{
    echo "- ";
        }
    }
    echo "\n";
}
?>

<!-- Templating Class  -->

<?php
class santri {
    public $nama;
    public $jurusan;
    public $organisasi;

    function get_nama($n){
        $this->nama = $n;
        echo "nama saya ". $n . "\n";
    }

    function get_jurusan($j){
        $this->jurusan = $j;
        echo "jurusan saya adalah  ". $j . "\n";
    }

    function get_organisasi($o){
        $this->organisasi = $o;
        echo "saya mengikuti organisasi ". $o ." di pondok IT". "\n";
    }
    
    function get_ganti_jurusan($gj){
        $this->jurusan = $gj;
        echo "lalu saya pindah jurusan menjadi ". $gj . "\n";
    }
}

$luqman = new santri ();
$luqman->get_nama("Luqman");
$luqman->get_jurusan("Backend");
$luqman->get_organisasi("BEMS");
$luqman->get_ganti_jurusan("Mobile");

?>

<!-- HOW TO SHOW ARRAY MULTIDIMENSIONAL -->
<?php
    $b = $this->buku;
    foreach($b as $c => $d )
{
    echo "BOOK NUMBER = $c ". PHP_EOL;
        foreach($d as $e => $f)
    {
        echo "$e => $f " . PHP_EOL;
    }
    echo "_________________________". PHP_EOL;
}


?>

<!------------ CONSTRUCTOR------------->

<?php

class buah{
    public $nama ;
    public $warna ;

    public function __construct($n){
        $this->nama = $n ;
        echo "ANDA TELAH MEMBUAT OBJEK BUAH".PHP_EOL ; 
    }
}
$sirsak = new buah("SIRSAK");
?>

<!-- CLASS MODIFIER -->

<?php

class car{
    public $name = "mustang";
    protected $CC = "700 HP";
}
$mustang = new car();
echo $mustang->name;// OK
// echo $mustang->CC;//ERROR KARENA PROTECTED

?>