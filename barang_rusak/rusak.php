<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/index.css">
    <title>TI</title>
</head>
<body>
    <h1>Masukan Barang</h1>
    <br>
    <a href="showDataRusak.php" target="_blank" >Show Data</a>
    <br><br>
    <h3>Barang Rusak</h3>
    <form method="post" action="rusak-tambah.php">
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
        <div class="Kondisi">
          <label for="kondisi">Tambahan :</label><br>
          <textarea rows="5" cols="40" name="kondisi" id="kondisi" placeholder="ketik disini...."></textarea>
        </div>
        <br>

        <input type="submit" id="submit" value="SIMPAN">
      </form>
</body>
</html>