<?php
include '../connection.php';

$id = $_GET['id'];

mysqli_query($koneksi,"DELETE FROM `semua` WHERE id_masuk='$id'");

header("location:showDataMasuk.php")



?>