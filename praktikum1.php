<?php
include 'koneksi.php';

$sql = "CREATE TABLE kontak (
    id INT(4) NOT NULL, AUTO_INCREMENT,
    nama VARCHAR(30) NOT NULL,
    jkel VARCHAR(10),
    email VARCHAR(40),
    alamat VARCHAR(50),
    kota VARCHAR(20),
    pesan TEXT)";


?>
