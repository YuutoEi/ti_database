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
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <div class="header">
        <h1 class="header-text">SPARK DATABASE MANAGEMENT</h1>
        <img src="spark._20240926_113859_0000.png" alt="ini logo spark">
    </div>
    <hr>
    
    <div class="isi">

        <div class="tambah">
        <button> <a class="add-acti" href="index.php">+ Add Response</a> </button>
        </div>

        <br><br>

        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jenjang Pendidikan</th>
                <th>Jenis Kelamin</th>
                <th>Dari Mana Menemukan Website Ini</th>
                <th>Pertanyaan 1</th>
                <th>Pertanyaan 2</th>
                <th>Pertanyaan 3</th>
                <th>Pertanyaan 4</th>
                <th>Saran</th>
                <th>Action</th>
            </tr>
            <?php
            include 'connection.php';
            $no = 1;
            $data = mysqli_query($koneksi, "select * from support");
            while ($d = mysqli_fetch_array($data)) {
            ?>

                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['Nama'] ?></td>
                    <td><?php echo $d['Email'] ?></td>
                    <td><?php echo $d['JenjangPendidikan'] ?></td>
                    <td><?php echo $d['JenisKelamin'] ?></td>
                    <td><?php echo $d['Menemukan1']; echo ", ", $d['Menemukan2'] ?></td>
                    <td><?php echo $d['Pertanyaan1'] ?></td>
                    <td><?php echo $d['Pertanyaan2'] ?></td>
                    <td><?php echo $d['Pertanyaan3'] ?></td>
                    <td><?php echo $d['Pertanyaan4'] ?></td>
                    <td><?php echo $d['Saran'] ?></td>
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