<?php
include 'connection.php';

//menangkap data dari edit.php
$id = $_POST['id'];
$Nama = $_POST['Nama'];
$Email = $_POST['Email'];
$JenjangPendidikan = $_POST['JenjangPendidikan'];
$JenisKelamin = $_POST['JenisKelamin'];
$Menemukan1 = implode(", ", $_POST['Menemukan1']);
$Menemukan2 = $_POST['Menemukan2'];
$Pertanyaan1 = $_POST['Pertanyaan1'];
$Pertanyaan2 = $_POST['Pertanyaan2'];
$Pertanyaan3 = $_POST['Pertanyaan3'];
$Pertanyaan4 = $_POST['Pertanyaan4'];
$Saran = $_POST['Saran'];

//update ke database
mysqli_query($koneksi, "UPDATE `support` SET Nama='$Nama', Email='$Email', JenjangPendidikan='$JenjangPendidikan', JenisKelamin='$JenisKelamin', Menemukan1='$Menemukan1', Menemukan2='$Menemukan2', Pertanyaan1='$Pertanyaan1', Pertanyaan2='$Pertanyaan2', Pertanyaan3='$Pertanyaan3', Pertanyaan4='$Pertanyaan4', Saran='$Saran' WHERE id='$id'");

header("location:index.php");



?>