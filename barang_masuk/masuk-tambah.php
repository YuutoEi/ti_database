<?php
include '../connection.php';

// Menangkap data yang dikirim
$Nama = $_POST['Nama'];
$Penerima = $_POST['Penerima'];
$Lantai = $_POST['Lantai'];
$JenisBarang = $_POST['JenisBarang'];
$kondisi1 = implode(", ", $_POST['kondisi1']);
$kondisi2 = $_POST['kondisi2'];
$Saran = $_POST['Saran'];

// Input ke database
mysqli_query($koneksi, "INSERT INTO masuk (Nama, Penerima, Lantai, JenisBarang, kondisi1, kondisi2, Saran) VALUES ('$Nama','$Penerima', '$Lantai', '$JenisBarang', '$kondisi1', '$kondisi2', '$Saran');");

// Kembali ke index.php
header("location:showDataMasuk.php");