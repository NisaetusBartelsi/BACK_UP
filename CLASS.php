
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