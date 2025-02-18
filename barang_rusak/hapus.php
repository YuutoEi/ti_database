<?php
include '../connection.php';

$id = $_GET['id'];

mysqli_query($koneksi,"DELETE FROM `rusak` WHERE id_rusak='$id'");

header("location:showDataRusak.php")



?>