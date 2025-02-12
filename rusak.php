<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TI</title>
</head>
<body>
    <h1>Masukan Barang</h1>
    <br>
    <a href="showDataMasuk.php" target="_blank" >Show Data</a>
    <br><br>
    <h3>Barang Masuk</h3>
    <form method="post" action="masuk-tambah.php">
        <div class="Nama">
          <label for="input-nama">Nama Barang :</label><br>
          <input type="text" name="Nama" placeholder="nama..." id="input-nama" required /><br><br>
        </div>

        <br /><br />

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
        <div class="Saran">
          <label for="pesan-tambahan">Tambahan :</label><br>
          <textarea rows="5" cols="40" name="Saran" id="pesan-tambahan" placeholder="ketik disini...."></textarea>
        </div>
        <br>

        <input type="submit" id="submit" value="SIMPAN">
      </form>
</body>
</html>