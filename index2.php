<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD App</title>
</head>
<body>
    <h1>Add Activity</h1>
    <br>
    <a href="showData.php">Show Data</a>
    <br><br>
    <h3>Add Activity</h3>
    <form method="post" action="tambah_.php">
        <div class="Nama">
          <label for="input-nama">Nama Lengkap :</label><br>
          <input type="text" name="Nama" placeholder="nama..." id="input-nama" required /><br><br>
          <label for="inputnama">Email :</label><br />
          <input type="email" name="Email" placeholder="email..." id="input-nama" /><br>
        </div>

        <br /><br />

        <div class="jenjangPendidikan">
          <label for="jenjang-pendidikan">Jenjang Pendidikan :</label><br>
          <select name="JenjangPendidikan" id="jenjang_pendidikan">
            <option value="sd">SD</option>
            <option value="smp">SMP</option>
            <option value="sma/smk">SMA/SMK</option>
            <option value="lainnya">Lainnya</option>
          </select>
        </div>
        
        <br><br>
        
        <div class="jenisKelamin">
          <label for="jeniskelamin">Pilih Jenis Kelamin</label><br>
          <input type="radio" name="JenisKelamin" id="jeniskelamin" value="laki-laki">
          <label for="jeniskelamin">Laki - laki</label>
          <input type="radio" name="JenisKelamin" id="jeniskelamin" value="Perempuan">
          <label for="jeniskelamin">Perempuan</label>
        </div>
        <br>
        <br>
        <br>
        <div class="menemukan-website">
          <label for="menemukan">Dari mana Anda menemukan website ini?</label><br>
          <input type="checkbox" name="Menemukan1[]" id="menemukan" value="teman">
          <label for="menemukan">Teman</label><br>
          <input type="checkbox" name="Menemukan1[]" id="menemukan" value="Keluarga">
          <label for="menemukan">Keluarga</label><br>
          <input type="checkbox" name="Menemukan1[]" id="menemukan" value="guru">
          <label for="menemukan">Guru</label><br>
          <label for="lainnya">Lainnya</label>
          <input type="text" placeholder="ketik disini..." name="Menemukan2" id="menemukan">
        </div>
        
        <br>
        <br>
        <br>

        <div class="pertanyaan">

          <label for="kepuasan">Seberapa puas Anda dengan pengalaman menggunakan website kami?</label><br>
          <input type="radio" name="Pertanyaan1" id="sangat-puas" value="s-puas">
          <label for="s-puas">Sangat Puas</label><br>
          <input type="radio" name="Pertanyaan1" id="puas" value="puas">
          <label for="puas">Puas</label><br>
          <input type="radio" name="Pertanyaan1" id="biasa-aja" value="b-aja">
          <label for="b-aja">Biasa Saja</label><br>
          <input type="radio" name="Pertanyaan1" id="tidak-puas" value="t-puas">
          <label for="t-puas">Tidak Puas</label><br>
          <input type="radio" name="Pertanyaan1" id="sangat-tidak-puas" value="st-puas">
          <label for="st-puas">Sangat Tidak Puas</label><br>
        </div>
          
        <br>
        <br>
        <br>

        <div class="Pertanyaan2">

          <label for="kepuasan2">Seberapa mudah Anda melihat tampilan website ini?</label><br>
          <input type="radio" name="Pertanyaan2" id="sangat-puas" value="s-puas">
          <label for="s-puas">Sangat Puas</label><br>
          <input type="radio" name="Pertanyaan2" id="puas" value="puas">
          <label for="puas">Puas</label><br>
          <input type="radio" name="Pertanyaan2" id="biasa-aja" value="b-aja">
          <label for="b-aja">Biasa Saja</label><br>
          <input type="radio" name="Pertanyaan2" id="tidak-puas" value="t-puas">
          <label for="t-puas">Tidak Puas</label><br>
          <input type="radio" name="Pertanyaan2" id="sangat-tidak-puas" value="st-puas">
          <label for="st-puas">Sangat Tidak Puas</label><br>
        </div>
          
        <br>
        <br>
        <br>
        
        <div class="Pertanyaan3">

          <label for="kepuasan3"></label>Apakah informasi yang disajikan mudah dimengerti?<br>
          <input type="radio" name="Pertanyaan3" id="sangat-puas" value="s-puas">
          <label for="s-puas">Sangat Puas</label><br>
          <input type="radio" name="Pertanyaan3" id="puas" value="puas">
          <label for="puas">Puas</label><br>
          <input type="radio" name="Pertanyaan3" id="biasa-aja" value="b-aja">
          <label for="b-aja">Biasa Saja</label><br>
          <input type="radio" name="Pertanyaan3" id="tidak-puas" value="t-puas">
          <label for="t-puas">Tidak Puas</label><br>
          <input type="radio" name="Pertanyaan3" id="sangat-tidak-puas" value="st-puas">
          <label for="st-puas">Sangat Tidak Puas</label><br>
        </div>
        
        <br>
        <br>
        <br>
        
        <div class="Pertanyaan4">

          <label for="kepuasan4">Bagaimana penilaian Anda terhadap website kami?</label><br>
          <input type="radio" name="Pertanyaan4" id="sangat-puas" value="s-puas">
          <label for="s-puas">Sangat Puas</label><br>
          <input type="radio" name="Pertanyaan4" id="puas" value="puas">
          <label for="puas">Puas</label><br>
          <input type="radio" name="Pertanyaan4" id="biasa-aja" value="b-aja">
          <label for="b-aja">Biasa Saja</label><br>
          <input type="radio" name="Pertanyaan4" id="tidak-puas" value="t-puas">
          <label for="t-puas">Tidak Puas</label><br>
          <input type="radio" name="Pertanyaan4" id="sangat-tidak-puas" value="st-puas">
          <label for="st-puas">Sangat Tidak Puas</label><br>
        </div>
        
        <br>
        <br>
        <br>

        <div class="Saran">
          <label for="pesan-tambahan">Adakah pesan tambahan untuk kami?</label><br>
          <textarea rows="5" cols="40" name="Saran" id="pesan-tambahan" placeholder="ketik disini...."></textarea>
        </div>
        <br>

        <input type="submit" id="submit" value="SIMPAN">
      </form>
</body>
</html>