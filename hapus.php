<?php
include 'connection.php';

$id = $_GET['id'];

mysqli_query($koneksi,"DELETE FROM `support` WHERE id='$id'");

header("location:index.php")



?>