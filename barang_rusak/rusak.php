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
    <h1>Barang Rusak</h1>
    <a href="../index.php" target="" >Home</a>
    <a href="showDataMasuk.php" target="_blank" >Show Data</a>
    <a href="../barang_rusak/rusak.php" target="" >Barang Proses</a>
  </div>
    <br><br>
    <form method="post" action="masuk-tambah.php">
      <h3>Masukkan Barang</h3><br>
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
        <br>
        <br>
        <div class="Saran">
          <label for="pesan-tambahan">Tambahan :</label><br>
          <textarea rows="5" name="Keterangan" id="pesan-tambahan" placeholder="ketik disini...."></textarea>
        </div>
        <br>

        <input type="submit" id="submit" value="SIMPAN">
      </form>
</body>
</html>