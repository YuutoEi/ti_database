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
    <title>Spark. Support</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    
    <div class="header">
        <h1 class="header-text">TI Database</h1>
    </div>
    <hr>
    
    <div class="isi">

        <div class="tambah">
        <button> <a class="add-acti" href="../index.php">+ Add Response</a> </button>
        </div>

        <br><br>

        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Barang</th>
                <th>Kondisi</th>
                <th>Action</th>
            </tr>
            <?php
            include '../connection.php';
            $no = 1;
            $data = mysqli_query($koneksi, "select * from rusak");
            while ($d = mysqli_fetch_array($data)) {
            ?>

                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['Nama'] ?></td>
                    <td><?php echo $d['JenisBarang'] ?></td>
                    <td><?php echo $d['Kondisi'] ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
                        <a href="hapus.php?id=<?php echo $d['id']; ?>">DELETE</a>
                    </td>
                </tr>
            <?php
            }
            ?>



    </div>


    </table>

</body>

</html>