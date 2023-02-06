<?php

class buah{
    public $nama ;
    public $warna ;

    public function __construct($n){
        $this->nama = $n ;
        echo "ANDA TELAH MEMBUAT OBJEK BUAH".PHP_EOL ; 
    }
    function get_nama(){
        
        echo "NAMA BUAHNYA" . $this->nama .PHP_EOL ; 
    }
    public function __destruct(){
        
        echo "INI ADALAH AKHIR . . . . BYE $this->nama ".PHP_EOL ; 
    }
}

$sirsak = new buah ("SIRSAK");
$sirsak->get_nama();

?>