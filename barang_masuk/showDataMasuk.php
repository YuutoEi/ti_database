<!DOCTYPE html>
<html lang="en">

<head>
    <!-- 
Sumber Belajar  :

Part 1 : https://www.malasngoding.com/membuat-crud-dengan-php-dan-mysqli-menampilkan-data/
Part 2 : https://www.malasngoding.com/membuat-crud-dengan-php-dan-mysqli-input-data/ 

Sumber Belajar

1. WPU : https://youtube.com/playlist?list=PLFIM0718LjIUqXfmEIBE3-uzERZPh3vp6&si=_WvOQv29dUI0VZid
2. Buku di link : bit.ly/modultkj101 
    -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Barang Masuk</title>
</head>

<body>
    
<div class="header">
    <h1>Barang Masuk</h1>
    <a href="../index.php" target="" >Home</a>
    <a href="showDataMasuk.php" target="_blank" >Show Data</a>
    <a href="../barang_rusak/rusak.php" target="" >Barang Keluar</a>
  </div>
    <hr>
    
    <div class="isi">

        <br><br>

        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Penerima</th>
                <th>Lantai</th>
                <th>Jenis Barang</th>
                <th>Kondisi</th>
                <th>Saran</th>
                <th>Action</th>
            </tr>
            <?php
            include '../connection.php';
            $no = 1;
            $data = mysqli_query($koneksi, "select * from masuk");
            while ($d = mysqli_fetch_array($data)) {
            ?>

                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['Nama'] ?></td>
                    <td><?php echo $d['Penerima'] ?></td>
                    <td><?php echo $d['Lantai'] ?></td>
                    <td><?php echo $d['JenisBarang'] ?></td>
                    <td><?php echo $d['Kondisi1']; echo ", ", $d['Kondisi2'] ?></td>
                    <td><?php echo $d['Saran'] ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $d['id_masuk']; ?>">EDIT</a>
                        <a href="hapus.php?id=<?php echo $d['id_masuk']; ?>">DELETE</a>
                    </td>
                </tr>
            <?php
            }
            ?>



    </div>


    </table>

</body>

</html>