<!-- //var_dump dan juga print_r ditunjukan untuk para deveoloper bukan untuk user karena untuk mengetahui bug atau variabel yang dia buat jika untuk user array akan ditampilkan menggunakan pengulangan bisa dengan for atau yang lebih khusus untuk array foreach
//for
//foreach -->
<?php
$angka = [3,2,15,20,11,34,55,22,34,67,89];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        .kotak{
            width: 50px;
            height: 50px;
            background-color : salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px  ;
            float: left  ;
        }
        .A{
            clear : both;
        }
    </style>
</head>
<body>
<!-- index atau isi dari arraynya sesuaikan dengan looping atau variabel fornya baris ke 31 s/d 33 dibaca tampilkan var angka (yg diatas itu lo )lalu ambil var angka dari index ke 0,1,2 seterusnya jika kalian ingin menambahkan angkanya perhatikan loopingnya, kalau misalkan kalian ingin looping sesuai dengan jumlah array yang kalian inginkan maka gunakan fungsi count dengan isi array yang kalian inginkan contoh count($angka) maka dia akan mengulang sebanyak jumlah elemen array-nya  -->

<?php for ($i = 0; $i < count($angka); $i++) { ?>
    <div class="kotak"><?= $angka [$i] ; ?></div>
    <?php } ?>


<div class ='A'> </div>

<!-- foreach artinya untuk setiap. as artinya sebagai jadi untuk setiap variabel yang disebutkan diambil dijadikan variabel baru lalu ditampilkan makanya setelah as kita tuliskan variabel barunya misalkanya disini $a  -->
<?php foreach( $angka as $a ) { ?>
    <div class="kotak"><?php echo $a  ?></div>
<?php } ?> 

<div class='A'></div>

<?php echo "hello world"; ?>
<?php foreach ( $angka as $a) : ?>
<div class="kotak"><?= $a ?></div>
<?php  endforeach; ?>

</body>
</html>