<?php
//Konfigurasi database
$servername= "localhost";
$user = "root";
$password = "";
$database = "dbformulir";
//Perintah php untuk akses database latihan
$conn = mysqli_connect($servername, $user, $password, $database);

//cek koneksi
if (!$conn){
    die("Connection failed!" . mysqli_connect_error());
}
?>