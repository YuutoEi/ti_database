<?php
include '../connection.php';

// Menangkap data yang dikirim
$id_barang = $_POST['id_barang'];
$Nama = $_POST['Nama'];
$TanggalMasuk = $_POST['TanggalMasuk'];
$JenisBarang = $_POST['JenisBarang'];
$StatusBarang = $_POST['StatusBarang'];
$LokasiBarang = $_POST['LokasiBarang'];
$Tambahan = $_POST['Tambahan'];

// Input ke database
mysqli_query($koneksi, "INSERT INTO semua (id_barang, Nama, TanggalMasuk, JenisBarang, StatusBarang, LokasiBarang, Tambahan) VALUES ('$id_barang','$Nama','$TanggalMasuk','$JenisBarang', '$StatusBarang','$LokasiBarang','$Tambahan');");

// Kembali ke index.php
header("location:masuk.php");