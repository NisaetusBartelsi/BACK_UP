<?php
//VIDIO KE 5

// Pengulangan
// for (ada tiga bagian inisialisasi, kondisi terminasi, inkermen dan dekermen )inisialisasi adalah menentukan variabel awal untuk pengulangannya terminasi untuk pemberhentian pengulangan dan dekermen dan inkermen untuk pengulangan maju dan mundur contoh ada (di baris 10). tag for() untuk menunjukan bahwa ini adalah perintah pengulangan, $i = 0 adalah untuk sebuah variabel biasa dimulai dengan 0 atau 1, i kependekan dari index, ;(titik koma untuk pemberhentian variabel )$i < 5 adalah kondisi terminasi atau perintah pemberhentian pengulangan.dan yang terakhir $i++ adalah inkermen untuk memajukan atau menambahkan jumlah pengulangan jika + dan jika - untuk mundur yaitu dekermen lalu {} kurung kurawal buka dan tutup berfungsi untuk memilih kata mana yang mau diulang, echo adalah salah satu sintaks untuk menampilkan kalimat,sedangkan "" menandakan kalimat apa yang mau di tampilkan, selama kondisinya bernilai benar maka pengulangan akan dilakukan. dan kalian bisa memasukkan tag HTML yang kalian ingin tampilkan di web browser kalian contohnya br (BARIS 8 S/D 10)
// while konsepnya sama saja tetep ada tiga bagian tadi yang membedakan hanya posisi tiap bagiannya untuk nilai awal bisa di tulis di luar whilenya dan inkermennya bisa ditulis sebelum penutup jadi yang for bisa lakukan while juga bisa lakukan dan jangan lupa untuk inkermen dan dekermen karena jika tidak di tulis kit akan masuk ke looping forever  (BARIS 14 S/D 17)
//do.. while  artinya lakukan hal ini selama kondisi bernilai true jadi jalankan dulu baru ceck kondisinya, perbedaannya dengan while adalah ketika kondisinya bernilai false maka dia akan menjalankan satu kali terlebih dahulu lalu jika nilainya FALSE maka dia akan berheti $i = 10 lakukan pengulangan untuk kata HELLO WORLD! <br> lalu lakukan $i++(lakukan penambahan satu kali pada variabel i)lakukan pengulangan pada kalimat HELLO WORLD! <br> jika nilai $i lebih kecil sama dengan 5 ;(selesai).(BARIS 19 S/D 23). dan ada juga gaya penulisan yang disebut templating yang akan sering ditemui intinya kita akan memisahkan sesuatu yang kita ingin tampilkan dengan PHP dengan tag PHP dan sesuatu yang ingin kita tampilkan dengan HTML jangan diletakkan didalam PHP, keluarkan  saja (ADA DI TES.PHP BARIS KE 12 S/D 23 ITU JUGA TERMASUK TEMPLATING) CARA SUPAYA TIDAK BINGUNG MENGGUNAKAN TEMPLATING KITA MENGGUNAKAN : (TITIK DUA) & END(FOR,IF,FOREACH) SEBAGAI PENGGANTI {} (KURUNG KURAWAL) (ADA DI BARIS 25 S/D 34) CARA MENYINGKAT PHP ECHO DENGAN MENGGUNAKAN =(<?PHP ECHO "VARIABEL")(<?= "VARIABEL")
// foreach : pengulangan khusus array

//for ($i = 0; $i < 5; $i++) {
  //  echo "Hello World <br>" ;
//}

//while( $i > 5 ) {
//echo "HELLO WORLD! <br>" ;
// $i++ ;
//}

//$i = 10 ; 
//do {
//  echo "Hello World! <br>" ;
//$i++;  
//} while ($i < 5);

//PENGKONDISIAN / PERCABANGAN
//UNTUK MENENTUKAN APA YANG TERJADI AKAN KETIKA KITA MEMBUAT SEBUAH PERNYATAAN JIKA PERNYATAAN BERNILAI TRUE APA YANG AKAN TERJADI DAN FALSE APA YANG AKAN TERJADI ADA 4 CARA PENGKONDISIAN
// 1.IF ELSE (INI BACAAN BARIS 30 S/D 35) X NILAINYA ADALAH 10. JIKA X LEBIH KECIL DARI 20 MAKA TAMPILKAN BENAR DAN JIKA SALAH TAMPILKAN "SALAH".
// 2.IF    ELSE IF     ELSE KONDISI INI ADALAH KONDISI DIMANA KETIKA KALIAN MENGINGIKAN KONDISI LAIN DARI PADA YANG KALIAN BUAT (BACAAN BARIS 37 S/D 44) JIKA X LEBIH KECIL DARI 20 MAKA TAMPILKAN BENAR DAN JIKA X ITU BERNILAI 20 MAKA TAMPILKAN "SIRSAK" DAN SELAIN DARIPADA ITU TAMPILKAN SALAH SELESAI.
// 3.TERNARY (IF ELSE SEDERHANA)
// 4.SWICTH (JIKA IF DAN ELSE SUDAH BANYAK)

// $x = 10;
// if ( $x < 20 ){
//  echo "benar";
// } else {
//  echo "salah";
// }

//$x = 10;
//if ( $x < 20 ){
//echo "benar";
//} else if ($x = 20){
//  echo "SIRSAK";
//} else {
// echo "salah";
// } 
//Ternary model
//  $i = 9;
//  echo $i > 6 ? "SIRSAK" : "APEL";//Sangat Baik

//VIDIO KE 6

//IMPLEMENTASI FUNCTION
// POTONGAN PROGRAM ATAU BARIS BARIS KODE YANG KITA BUAT UNTUK MEMPERMUDAH KITA SAAT KITA MROGRAM BISA KITA KASIH NAMA DAN BISA KITA PANGGGIL BERULANG ULANG ADA DUA JENIS FUNCTION

// 1.BUILT-IN FUNCTION DIDALAM PHP BUILT-IN FUNCTION SANGAT BANYAK DAN MEMPERMUDAH KITA DALAM AKTIVITAS KITA 
// A. DATE / TIME FUNGSI INI BERHUBUNGAN DENGAN TANGGAL DAN WAKTU
// 1.TIME()
// 2.DATE() DATE TERMASUK FUNGSI YANG MEMBUTUHKAN SETIDAKNYA SATU PARAMETER ATAU ARGUMENT KITA MEMANGGIL SEBUAH FUNCTION UNTUK MENGELOLA TANGGAL TERGANTUNG PARAMETER YANG KITA MASUKAN DAN DITAMPILKAN DENGAN SINTAKS ECHO SEBELUM FUNGSI DATE L UNTUK HARI, D UNTUK TANGGAL, M UNTUK BULAN, M KECIL UNTUK BULAN DALAM URUTAN ANGKA, DAN KITA MASUKAN LEBIH DARI SATU PARAMETER ATAU FORMAT DALAM SATU FUNCTION DAN PARAMETER SANGAT BUANYAK BANGET BISA DILIAT LANGSUNG DI WEBSITE PHPNYA PERGI KE DOKUMENTASI (LIAT DATE4.PHP BARIS KE ) 
// 3.MKTIME(MAKE TIME)()
// 4.STRTOTIME(STRING TO TIME)
//(semuaya ada di date4.php )

//2.USER-DEFINED FUNCTION YAITU FUNGSI YANG NANTINYA KITA BUAT SENDIRI (liat function.php)

//VIDIO KE 7
//
//ARRAY (LIAT /PERTEMUAN 5/LATIHAN1.PHP/LATIHAN2.PHP/LATIHAN3.PHP)
//sangat berguna ketika kita ingin masuk database


//VIDIO KE 8 
// ASOSIATIF ARRAY  
//(pertemuan 6/latihan1 dan 2)
//VIDIO KE 9
//REQUEST METHOD GET DAN POST
//Superglobals variabel yang dimiliki php dia variabel spesial milik php dan sebelum kita belajar tentang superglobal kita akan belajar tentang variabel scope
//VARIABEL SCOPE
//lingkup dari sebuah variabel di php 
//variabel scope / lingkup variabel
//$x = "10";//sebelah kiri ini adalah variabel lokal hanyay untuk latihan1.php
//variabel yang kita buat dalam function hanya berlaku untuk function itu saja
// $x = 10;

//  function tampilx($x) {
//  $x =20;
//  echo $x;
//  }


//tampilx();
//echo "<br>";
//echo $x;

//kasih sebuah key global $x: yang artinya adalah cari keluar variabel $x lalu tampilkan hasilnya ini contohnya

//$x = 10;

// function tampilx(){
//     global $x ;
//     echo $x ;
// }

//SUPER GLOBAL CONTOHNYA dari tujuh variabel super global yang disebutkan mereka semua adalah jelmaan dari array asosiatif maka perlakukan mereka seperti array asosiatif masing masing punya perilaku yang berbeda beda 
//$_GET
//var_dump($_GET);//arraynya sudah ada tapi masih kosong belum terisi
// $_POST
//var_dump($_POST);//sama seperti sudah ada tapi kosong belum terisi
// $_REQUEST
//var_dump($_REQUEST);//sama seperti yang diatas sudah ada array nya tapi belum terisi
// $_SESSION
// $_COOKIE
// $_SERVER
//var_dump($_SERVER);//sudah ada isinya banyak lagi. jika kalian ingin memanggil salah satu dari parameter parameter variabel server maka contohnya adalah ini (untuk ditampilkan pada user)
//echo $_SERVER ["SERVER_SOFTWARE"];
//bisa diakses dihalaman manapun
//$_ENV


//METODE REQUEST METHOD GET DAN POST
//metode get dan $_GET itu berbeda 

//VIDIO 10
//MYSQL = DATABASE =DATA
//DATA representasi fakta didunia nyata apapun  yang kita liat baca rasakan judul buku nama harga dokumen dan lain lain biasanya saling terkait misalkan buku pasti buku itu punya penerbit jumah halaman dan lain lain  masalahnya bagaimana kita menyimpan data data tersebut kita bisa menyimpan data di noteepad itu yang paling sederhana database adalah solusi dari kapasitas, kecepatan, keamanan, duplikasi, dll ketika kita nyimpan data tersebut di dalam aplikasi
//DATABASE 
//oracle dan lain lain itu bukan database itu adalah software untuk mengelola database DBMS menyimpan dan mengelola banyak database dan mysql itu adalah rdbms . rdbms didalamnya terdapat banyak tabel yang meyipam sebuah data didalam tabel itu baris itu disebut record dan kolom disebut field .  dan tiap tiap field ada peraturan untuk menulis databasenya.  tiap tiap tabel harus memiliki priary key (sebuah data yang dapat merepresentasikan satu baris record secara unik.)unik itu artinya tidak ada data yang sama.jika tidak ada yang sama maka itu bisa menjadi primary key.dan dari data itu kita bisa membuka semua data hanya dengan primary key.intinya kita harus menentukan primary key dengan record yang gak akan pernah sama 
//ISTILAH YANG SERING MUNCUL
//FIELD / COLUMN 
//ROW ATAU RECORD BARIS
//KEY
//1.primary key
//2.foreignkey
//AUTO INCREMENT (PENAMBAHAN SECARA AUTO SALAH SATU FITUR DATABASE)
//RELATIONSHIP HUBUNGAN ANTAR TABEL
//NORMALIZATION

//MYSQL
// SEBISA MUNGKIN JANGAN PAKE SPASI UNTUK PENAMAAN DATABASE
// JIKA KALIAN INGIN MEMBUAT DATABASE HAL YANG PALING PENTING ANDA PERHATIKAN ADALAH MEMBUAT GAMBARAN BAGAIMANA DATABASE ITU AKAN DIBUAT ENTAH MENGGUNAKAN NOTEPAD ATAU APAPUN AGAR TIDAK TERJADI KESALAHAN KETIKA KALIAN MEMBUAT DATABASE 
//CREATE DATABASE "NAMANYA JANGAN PAKE TANDA PETIK" (UNTUK MEMBUAT DATABASE BARU)
//USE "NAMA DATABASE"(MEMILIH DATABASE MANA YANG INGIN DIMASUKI)
//PASTIKAN YANG DI INPUT KEDALAM FIELDNYA DIGIT ADA SEGITU KALAU LEBIH DARIPADA 9 MAKA PAKE VARCHAR KALO CUMA 9 PAKE CHAR 
//SINTAKS MYSQL INSERT INTO "NAMADATABASE" VALUES('','Luqman','123456789','luqman@gmail.com','BackEnd','luqman.jpg')(UNTUK MEMASUKKAN) 
//JIKA KLAIAN INGIN MENAMPILKAN SEMUA YANG ADA DI TABEL KETIK (SELECT * FROM 'NAMA TABEL');
//KALO MAU SALAH SATU GANTI BINTANG PAKE NAMA DARI JUDUL TABLENYA
//KALO MAU CARI NAMA ORANG DARI NRP NYA AJA KALIAN BISA KETIK(SELECT * FROM MAHASISWA WHERE NRP = 'NOMOR NRPNYA';)NRP JUGA BISA DIGANTI OLEH SEMUA JUDUL TABEL.
//JIKA MAU GANTI ISI TABELNYA MAKA KALIAN BISA GANTI DENGAN(UPDATE 'NAMA TABLE' SET 'JUDUL TABEL'='JADI APA' WHERE ID(BISA PAKE NAMA ATAU JUDUL YANG LAIN) = 2)
//JIKA KALIAN INGIN MENGHAPUS DATA MAHASISWA PAKE (DELETE FROM 'NAMA TABLE' WHERE ID(BISA PAKE YANG LAIN JUDUL ATAU APAPUN ITU) = 3 ;)
//ITU  NAMANYA CRUD CREATE DAN LAIN LAIN 

//MENGHUBUNGKAN PHP DENGAN DATABASE
//LIAT DI INDEX.PHP PERTEMUAN 9


?>
