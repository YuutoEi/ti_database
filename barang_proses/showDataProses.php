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
    <h1>Data Barang Masuk</h1>
    <select onchange="window.open(this.options[this.selectedIndex].value,'_self')" width="60%" height="60%" name="menu" size="0"><br />
      <background><span><br />
          <option > - Show Data - <br /><br /><br />
          <option value="../barang_masuk/showDataMasuk.php">Masuk<br /><br /><br />
          <option value="../barang_keluar/showDataKeluar.php"> Keluar<br /><br /><br />
          <option value="../barang_proses/showDataProses.php">Proses<br /><br />
          <option value="../barang_rusak/showDataRusak.php">Rusak<br /><br />
    </select>
    <a href="../index.php">Home</a>
    <a href="../barang_masuk/masuk.php">Barang Masuk</a>
    <a href="../barang_keluar/keluar.php">Barang Keluar</a>
    <a href="../barang_rusak/rusak.php">Barang Rusak</a>
    <a href="../barang_proses/proses.php">Barang Proses</a>
  </div>
    <hr>
    
    <div class="isi">

        <br><br>

        <table border="1">
            <tr>
                <th>No</th>
                <th>Id Barang</th>
                <th>Nama</th>
                <th>Tanggal Masuk</th>
                <th>Jenis Barang</th>
                <th>Lokasi Barang</th>
                <th>Tambahan</th>
                <th>Action</th>
            </tr>
            <?php
            include '../connection.php';
            $no = 1;
            $data = mysqli_query($koneksi, "select * from proses");
            while ($d = mysqli_fetch_array($data)) {
            ?>

                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['id_barang'] ?></td>
                    <td><?php echo $d['Nama'] ?></td>
                    <td><?php echo $d['TanggalMasuk'] ?></td>
                    <td><?php echo $d['JenisBarang'] ?></td>
                    <!-- <td><?php #echo $d['Kondisi1']; echo ", ", $d['Kondisi2'] ?></td> -->
                    <td><?php echo $d['LokasiBarang'] ?></td>
                    <td><?php echo $d['Saran'] ?></td>
                    <td>
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