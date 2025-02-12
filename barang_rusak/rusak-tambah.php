<?php
include '../connection.php';

// Menangkap data yang dikirim
$Nama = $_POST['Nama'];
$JenisBarang = $_POST['JenisBarang'];
$Kondisi = $_POST['kondisi'];

// Input ke database
mysqli_query($koneksi, "INSERT INTO rusak (Nama, JenisBarang, kondisi) VALUES ('$Nama', '$JenisBarang','$Kondisi');");

// Kembali ke index.php
header("location:showData.php");