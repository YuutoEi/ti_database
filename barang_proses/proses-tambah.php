<?php
include '../connection.php';

// Menangkap data yang dikirim
$id_barang = $_POST['id_barang'];
$Nama = $_POST['Nama'];
$TanggalMasuk = $_POST['TanggalMasuk'];
$JenisBarang = $_POST['JenisBarang'];
$LokasiBarang = $_POST['LokasiBarang'];
$Saran = $_POST['Saran'];

// Input ke database
mysqli_query($koneksi, "INSERT INTO masuk (id_barang, Nama, TanggalMasuk, JenisBarang, LokasiBarang, Saran) VALUES ('$id_barang','$Nama','$TanggalMasuk','$JenisBarang','$LokasiBarang','$Saran');");

// Kembali ke index.php
header("location:masuk.php");