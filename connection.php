<?php
$koneksi = mysqli_connect("localhost","root","","ti_database");

//cek koneksi
if (mysqli_connect_errno()) {
    # code..
    echo "Koneksi Database Gagal". mysqli_connect_error();
}

?>