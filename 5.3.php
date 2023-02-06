
<!-- array multidimensi adalah array di dalam array contohnya dibawah ini yang perlu kalian perhatikan adalah antara array satu dengan yang lainnya dibatasi dengan koma kurung siku untuk buka dan untuk tutup secara besar setelah = dan sebelum ; tapi menggunakan cara ini haru sangat teliti karena php tidak akan menganggap salah jika kodenya benar misalkan nama tertukar dengan email atau yang lainnya  kita tidak bisa memberi tahu data ini apa karena ini adalah array numerik adalah yang indexnya angka untuk menghindari kesalahannya kita bisa menggunakan array asosiatif                         -->
<?php
$mahasiswa =[
    ['luqman','0987655432','Backend','f.catus45@gmail.com'],
    ['SIRSAK','123456789','Backend','sirsak23@gmail.com'],
    ['BUNGLON','4567890123','Backend','bunglon5@gmail.com'],
    ['KATAK','6789012345','Backend','katak67@gmail.com'],






];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daftar mahasiswa</title>
</head>
<body>
    <h1>daftar mahasiswa</h1>
<?php foreach($mahasiswa as $a) : ?>
    <ul> 
    <li>Nama:<?= $a [0];?></li>
    <li>NRP:<?= $a [1];?></li>
    <li>jurusan:<?= $a [2];?></li>
    <li>email:<?= $a [3];?></li>
    </ul>
<?php endforeach; ?>
</body>
</html>