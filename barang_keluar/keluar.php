<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>TI</title>
</head>
<body>
  <div class="header">
    <h1>Barang Keluar</h1>
    <select onchange="window.open(this.options[this.selectedIndex].value,'_self')" width="60%" height="60%" name="menu" size="0"><br />
      <background><span><br />
          <option > - Show Data - <br /><br /><br />
          <option value="../barang_masuk/showDataMasuk.php">Masuk<br /><br /><br />
          <option value="showDataKeluar.php"> Keluar<br /><br /><br />
          <option value="../barang_proses/showDataProses.php">Proses<br /><br />
          <option value="../showDataRusak/showDataRusak.php">Rusak<br /><br />
    </select>
    <a href="../index.php">Home</a>
    <a href="../barang_masuk/masuk.php">Barang Masuk</a>
    <a href="../barang_rusak/rusak.php">Barang Rusak</a>
    <a href="../barang_proses/proses.php">Barang Proses</a>
  </div>
    <br><br>
    <form method="post" action="keluar-tambah.php">
      <h3>Masukkan Barang Keluar</h3><br>
        <div class="Nama">
          <label for="input-nama">Nama Barang :</label><br>
          <input type="text" name="Nama" placeholder="................" id="input-nama" required /><br><br>
          <label for="id_barang">
            ID Barang :
            <input type="text" name="id_barang" id="id_barang" placeholder="................" required>
          </label>
        </div>
        <div class="lokasi">
          <label for="lokasi">Lokasi :</label><br>
          <input type="text" name="LokasiBarang" id="lokasi" placeholder="................" required>
        </div>
        <div class="tanggal">
          
          <label for="tanggal">
            <br>
            Tanggal :
          </label>
          <input type="date" name="TanggalMasuk" id="tanggal" required>
          <br><br>
        </div>

    

        <div class="JenisBarang">
          <label for="jenis-barang">Jenis Barang :</label><br>
          <select name="JenisBarang" id="jenis_barang">
            <option value="Komputer">Komputer / Laptop</option>
            <option value="Printer">Printer</option>
            <option value="Internet">Internet (ex: Router, Switch, dll)</option>
            <option value="lainnya">Lainnya</option>
          </select>
        </div>
        <br>
        <br>
        <div class="Saran">
          <label for="pesan-tambahan">Tambahan :</label><br>
          <textarea rows="5" name="Saran" id="pesan-tambahan" placeholder="ketik disini...."></textarea>
        </div>
        <br>

        <input type="submit" id="submit" value="SIMPAN">
      </form>
</body>
</html>