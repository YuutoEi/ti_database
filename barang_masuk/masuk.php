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
    <h1>Barang Masuk</h1>
    <a href="../index.php" target="" >Home</a>
    <a href="showDataMasuk.php" target="_blank" >Show Data</a>
    <a href="../barang_rusak/rusak.php" target="" >Barang Keluar</a>
  </div>
    <br><br>
    <form method="post" action="masuk-tambah.php">
      <h3>Masukkan Barang</h3><br>
        <div class="Nama">
          <label for="input-nama">Nama Barang :</label><br>
          <input type="text" name="Nama" placeholder="nama..." id="input-nama" required /><br><br>
          <label for="input-penerima">Penerima :</label><br>
          <input type="text" name="Penerima" placeholder="nama..." id="input-penerima" required /><br><br>
          <label for="input-lantai">Lantai :</label><br>
          <input type="text" name="Lantai" placeholder="lantai berapa..." id="input-lantai" required /><br><br>
        </div>

    

        <div class="JenisBarang">
          <label for="jenis-barang">Jenis Barang :</label><br>
          <select name="JenisBarang" id="jenis_barang">
            <option value="jenis-1">Jenis 1</option>
            <option value="Jenis-2">Jenis 2</option>
            <option value="Jenis-3">Jenis 3</option>
            <option value="lainnya">Lainnya</option>
          </select>
        </div>
        <br>
        <br>
        <div class="kondisi">
          <label for="kondisi">Kondisi Barang :</label><br>
          <input type="checkbox" name="kondisi1[]" id="kondisi" value="Bagus">
          <label for="kondisi">Bagus</label><br>
          <input type="checkbox" name="kondisi1[]" id="kondisi" value="Netral">
          <label for="kondisi">Netral</label><br>
          <input type="checkbox" name="kondisi1[]" id="kondisi" value="Buruk">
          <label for="kondisi">Buruk</label><br>
          <label for="lainnya">Lainnya</label>
          <input type="text" placeholder="ketik disini..." name="kondisi2" id="kondisi">
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