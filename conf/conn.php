<?php
$host = "localhost:3307";
$user = "root";
$password = "";
$db = "klinik_bk";

$conn = mysqli_connect($host, $user, $password, $db);

//Cek Koneksi
if (!$conn) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}
//echo "Koneksi ke database sukses..";
