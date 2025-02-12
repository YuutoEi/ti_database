<?php
include '../connection.php';

$id = $_GET['id'];

mysqli_query($koneksi,"DELETE FROM `masuk` WHERE id_masuk='$id'");

header("location:masuk.php")



?>