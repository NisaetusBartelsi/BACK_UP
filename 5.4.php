<?php
$servername = "localhost";
$username = "Luqman";
$password = "LUQMAN45";

try {
    $conn = new PDO("mysql:host=$servername;dbname=phpdasar", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully \n";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <table border='1' cellpadding='10' cellspacing='0'
    >
<tr>
    <th>NO</th>
    <th>AKSI</th>
    <th>GAMBAR</th>
    <th>NIK</th>
    <th>NAMA</th>
    <th>EMAIL</th>
    <th>JURUSAN</th>
</tr>
<tr>
    <td>1</td>
    <td>
        <a href="">UBAH</a> | 
        <a href="">HAPUS</a>  
    </td>
    <td><img src="img/dcw.jpeg"></td>
    <td>123456789</td>
    <td>LUQMAN HADIANSYAH</td>
    <td>luqman@gmail.com</td>
    <td>BACKEND</td>
</tr> 

    </table>
</body>
</html>