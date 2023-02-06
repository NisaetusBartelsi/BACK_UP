<?php

class perpus{

        public $buku = [
            [
            "buku"=>"Arbiterasi",
            "ISBN"=>"01-223"
            ],
            [
            "buku"=>"Semesta yang tak terjangkau",
            "ISBN"=>"06-102"
            ],
            [
            "buku"=>"Forbidden guns",
            "ISBN"=>"02-301"
            ] 
            ];
            public $jmlbk = 3;

    public function Peminjaman_buku($index){
        $data = $this->buku[$index];
        echo "Kamu meminjam buku dari perpustakaan\n";
        $buku = $this->buku;
        
        foreach($data as $key =>$value)
        {
            echo "$key : $value \n";
        }
        unset($this->buku[$index]);
        $this->jmlbk = $this->jmlbk-1;
    }
    public function Pengembalian_buku($data){
        echo "Kamu mengembalikan buku ke perpustakaan \n";
        foreach($data as $key =>$value)
        {
            echo "$key : $value \n";

        }
        
        $this->jmlbk = $this->jmlbk+1;
    }
    public function cek()
    {   
        $books = $this->buku;
        foreach($books as $key => $book1){
            echo "index : $key \n";
            foreach($book1 as $key => $value){
                echo "$key : $value \n";
        }
        echo "_____________\n";
        }
        echo "\n";
    }

    public function jumlah_buku(){
        echo "jumlah buku di perpurtakaan adalah :" .$this->jmlbk;
    }

    }

$orang = new perpus();

echo "Selamat datang di Perpustakaan. \n";
echo "silahkan pilih opsi dibawah \n";

echo "1) mengecek buku \n";
echo "2) meminjam buku \n";
echo "3) mengembalikan buku \n";

echo "input : ";
$input = trim(fgets(STDIN));
switch($input){
    case 1 :
        $orang->cek();
    break ;
    case 2 :
        echo "silahkan pilih buku sesuai index :";
        $in = trim(fgets(STDIN));
        $orang->Peminjaman_buku($in);
    break ;
    case 3 :
        $data = [
            "buku" => "Rahasia Dunia ketiga",
            "ISBN" => "09-991"
        ];
        $orang->Pengembalian_buku($data).PHP_EOL;     
        echo "Anda telah mengembalikan buku \n";
    break;
    default : 
        echo "Input salah \n";
    break;
    }