<?php

class library{
    public $pinjam ;
    public $buku = 
[
[
    "DAFTAR" => "BUKU"
],
[
        "JUDUL" => "POOR DAD AND RICH DAD",
        "ISBN "  => "01-001",
        "PENULIS" => "ROBERT KIYOSAKI"
    ],
[
        "JUDUL" => "THE CASHFLOW QUADRANT",
        "ISBN "  => "01-002",
        "PENULIS" => "ROBERT KIYOSAKI"
    ],
[
        "JUDUL" => "FAKE",
        "ISBN "  => "01-003",
        "PENULIS" => "ROBERT KIYOSAKI"
    ],
[
        "JUDUL" => "WHY WE WANT TO BE RICH ",
        "ISBN "  => "01-004",
        "PENULIS" => "ROBERT KIYOSAKI"
    ]
];
    function __construct()
    {
        echo "WELCOME TO ISIS LIBRARY !  ". PHP_EOL . "WHAT YOU WANT TO DO ? ". PHP_EOL. "CHOSE BY NUMBER". PHP_EOL;
        echo "1).JUST TO KNOW BOOKS LIST ". PHP_EOL."2).BORROW THE BOOK" . PHP_EOL. "3).RETURN THE BOOK ". PHP_EOL
        ."4).READING IN HERE OR STUDY". PHP_EOL."5).DONATE THE BOOKS". PHP_EOL;
        echo "NO = ";
        $a = trim(fgets(STDIN));
        switch ($a){
//----------// SHOW THE ARRAY OF $BUKU//----------//
            case 1 : 
                $b = $this->buku;
                foreach($b as $c => $d ){
                    echo "BOOK NUMBER = $c ". PHP_EOL;
                    foreach($d as $e => $f){
                        echo "$e => $f " . PHP_EOL;
                    }
                    echo "_________________________". PHP_EOL;
                }

            break;

            case 2 :

//------// WHO WANT TO BORROW THE BOOK//-------------//
                echo "WHICH THE BOOK YOU WANT TO BORROW ?". PHP_EOL;
                // LIST OF BOOKS
                $b = $this->buku;
                foreach($b as $c => $d ){
                    echo "BOOK NUMBER = $c ". PHP_EOL;
                    foreach($d as $e => $f){
                        echo "$e => $f " . PHP_EOL;
                    }
                    echo "_________________________". PHP_EOL;
                }
//--------// WHEN WE TAKE THE BOOK FROM ARRAY //----// 
            
            echo "CHOSE BY BOOK NUMBER !". PHP_EOL. PHP_EOL;
            echo "BOOK NUMBER = ";
            $h =trim(fgets(STDIN));
            $b = $this->buku[$h];
            foreach($b as $c => $d ){
                echo "$c => $d ". PHP_EOL ;
            }
            unset($this->buku[$h]);
            echo "\n";
            echo "DON'T FORGET TO RETURN THE BOOK !". PHP_EOL. PHP_EOL;
//----------//CECK AFTER UNSET ARRAY//-------------//
                echo "REMAINING BOOKS". PHP_EOL;            
                $b = $this->buku;            
                foreach($b as $c => $d ){
                echo "BOOK NUMBER = $c ". PHP_EOL;
                foreach($d as $e => $f){
                    echo "$e => $f " . PHP_EOL;
                }
                echo "_________________________". PHP_EOL;
            }
            break;

            case 3:

//--//WHO WANT TO CECK THE BOOK//--//
            $i = $this->buku;
            echo $i ;
            
}


    }
}
//---------//WHEN I CALL CONSTRUCTOR//----------//
$Luqman = new library();
//--------//WHEN I LOOP THE CONSTRUCTOR//-------//
    echo "IS THERE ANYTHING ELSE YOU WANT TO DO ?". PHP_EOL;
    echo"YES OR NO". PHP_EOL;
    $g = trim(fgets(STDIN));

if($g == "YES"){
    while($g == "YES")
    {
        $Luqman = new library();
        echo "IS THERE ANYTHING ELSE YOU WANT TO DO ?". PHP_EOL ."YES OR NO". PHP_EOL;
        $g = trim(fgets(STDIN));
        
        if($g == "YES"){
            
        }else if($g == "NO"){
            echo "STAY READ BOOK" . PHP_EOL;
        }else{
            
        }
    }
//---// IF , ELSE IF AND ELSE BEFORE WHILE//------//
}else if($g == "NO"){
    echo "STAY READ BOOK" . PHP_EOL;
}else{

}
?>