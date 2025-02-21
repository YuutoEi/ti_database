<?php
include '../connection.php';

$id = $_GET['id'];

mysqli_query($koneksi,"DELETE FROM `keluar` WHERE id_keluar='$id'");

header("location:showDataKeluar.php")



?>