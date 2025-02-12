<!-- https://www.maribelajarcoding.com/2019/09/membuat-crud-checkbox-menggunakan-php.html -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit CRUD App</title>
</head>

<body>
    <h2>Edit Activity</h2><br>
    <a href="index.php"><- Back</a>

            <?php
            include 'connection.php';

            $id = $_GET['id'];
            $data = mysqli_query($koneksi, "select * from support where id='$id'");
            $d = mysqli_fetch_array($data);
            $DataMenemukan = explode(", ", $d['Menemukan1']);
            ?>
                <form method="post" action="edit_.php">
                    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                    <div class="Nama">
                        <label for="input-nama">Nama Lengkap :</label><br>
                        <input type="text" name="Nama" id="input-nama" value="<?php echo $d['Nama']; ?>" required /><br><br>
                        <label for="inputnama">Email :</label><br />
                        <input type="email" name="Email" id="input-nama" value="<?php echo $d['Email'] ?>" required /><br>
                    </div>

                    <br /><br />

                    <div class="jenjangPendidikan">
                        <label for="jenjang-pendidikan">Jenjang Pendidikan :</label><br>
                        <?php $JenjangPendidikan = $d['JenjangPendidikan'] ?>
                        <select name="JenjangPendidikan" id="jenjang_pendidikan">
                            <option value="sd" <?php if ($JenjangPendidikan == 'sd') echo "selected"; ?> >SD</option>
                            <option value="smp" <?php if ($JenjangPendidikan == 'smp') echo "selected"; ?> >SMP</option>
                            <option value="sma/smk" <?php if ($JenjangPendidikan == 'sma/smk') echo "selected"; ?> >SMA/SMK</option>
                            <option value="lainnya" <?php if ($JenjangPendidikan == 'lainnya') echo "selected"; ?> >Lainnya</option>
                        </select>
                    </div>
                    
                    <br><br>
                    
                    <div class="jenisKelamin">
                        <?php $JenisKelamin = $d['JenisKelamin'] ?>
                        <label for="jeniskelamin">Pilih Jenis Kelamin</label><br>
                        <input type="radio" name="JenisKelamin" id="jeniskelamin" value="laki-laki" <?php if ($JenisKelamin == 'laki-laki') echo "checked"; ?> >
                        <label for="jeniskelamin">Laki - laki</label>
                        <input type="radio" name="JenisKelamin" id="jeniskelamin" value="Perempuan" <?php if ($JenisKelamin == 'Perempuan') echo "checked"; ?> >
                        <label for="jeniskelamin">Perempuan</label>
                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="menemukan-website">
                        <label for="menemukan">Dari mana Anda menemukan website ini?</label><br>
                        <input type="checkbox" name="Menemukan1[]" id="menemukan" value="teman" <?php if (in_array("teman",$DataMenemukan)) echo "checked"; ?> >
                        <label for="menemukan">Teman</label><br>
                        <input type="checkbox" name="Menemukan1[]" id="menemukan" value="Keluarga" <?php if (in_array("Keluarga", $DataMenemukan)) echo "checked"; ?>>
                        <label for="menemukan">Keluarga</label><br>
                        <input type="checkbox" name="Menemukan1[]" id="menemukan" value="guru" <?php if (in_array("guru", $DataMenemukan)) echo "checked"; ?> >
                        <label for="menemukan">Guru</label><br>
                        <label for="lainnya">Lainnya</label>
                        <input type="text" placeholder="ketik disini..." name="Menemukan2" id="menemukan" value="<?php echo $d['Menemukan2'] ?>" >
                    </div>
                    
                    <br>
                    <br>
                    <br>

                    <div class="pertanyaan">
                        <?php $perta1 = $d['Pertanyaan1'] ?>
                        <label for="kepuasan">Seberapa puas Anda dengan pengalaman menggunakan website kami?</label><br>
                        <input type="radio" name="Pertanyaan1" id="sangat-puas" value="s-puas" <?php if ($perta1 == "s-puas") echo "checked" ?> >
                        <label for="s-puas">Sangat Puas</label><br>
                        <input type="radio" name="Pertanyaan1" id="puas" value="puas" <?php if ($perta1 == "puas") echo "checked" ?>>
                        <label for="puas">Puas</label><br>
                        <input type="radio" name="Pertanyaan1" id="biasa-aja" value="b-aja" <?php if ($perta1 == "b-aja") echo "checked" ?>>
                        <label for="b-aja">Biasa Saja</label><br>
                        <input type="radio" name="Pertanyaan1" id="tidak-puas" value="t-puas" <?php if ($perta1 == "t-puas") echo "checked" ?>>
                        <label for="t-puas">Tidak Puas</label><br>
                        <input type="radio" name="Pertanyaan1" id="sangat-tidak-puas" value="st-puas" <?php if ($perta1 == "st-puas") echo "checked" ?> >
                        <label for="st-puas">Sangat Tidak Puas</label><br>
                    </div>
                    
                    <br>
                    <br>
                    <br>
                    
                    <div class="Pertanyaan2">
                        
                        <?php $perta2 = $d['Pertanyaan2'] ?>
                        <label for="kepuasan2">Seberapa mudah Anda melihat tampilan website ini?</label><br>
                        <input type="radio" name="Pertanyaan2" id="sangat-puas" value="s-puas" <?php if ($perta2 == "s-puas") echo "checked" ?> >
                        <label for="s-puas">Sangat Puas</label><br>
                        <input type="radio" name="Pertanyaan2" id="puas" value="puas" <?php if ($perta2 == "puas") echo "checked" ?>>
                        <label for="puas">Puas</label><br>
                        <input type="radio" name="Pertanyaan2" id="biasa-aja" value="b-aja" <?php if ($perta2 == "b-aja") echo "checked" ?>>
                        <label for="b-aja">Biasa Saja</label><br>
                        <input type="radio" name="Pertanyaan2" id="tidak-puas" value="t-puas" <?php if ($perta2 == "t-puas") echo "checked" ?>>
                        <label for="t-puas">Tidak Puas</label><br>
                        <input type="radio" name="Pertanyaan2" id="sangat-tidak-puas" value="st-puas" <?php if ($perta2 == "st-puas") echo "checked" ?> >
                        <label for="st-puas">Sangat Tidak Puas</label><br>
                    </div>
                    
                    <br>
                    <br>
                    <br>
                    
                    <div class="Pertanyaan3">
                        <?php $perta3 = $d['Pertanyaan3'] ?>
                        
                        <label for="kepuasan3"></label>Apakah informasi yang disajikan mudah dimengerti?<br>
                        <input type="radio" name="Pertanyaan3" id="sangat-puas" value="s-puas" <?php if ($perta3 == "s-puas") echo "checked" ?> >
                        <label for="s-puas">Sangat Puas</label><br>
                        <input type="radio" name="Pertanyaan3" id="puas" value="puas" <?php if ($perta3 == "puas") echo "checked" ?>>
                        <label for="puas">Puas</label><br>
                        <input type="radio" name="Pertanyaan3" id="biasa-aja" value="b-aja" <?php if ($perta3 == "b-aja") echo "checked" ?>>
                        <label for="b-aja">Biasa Saja</label><br>
                        <input type="radio" name="Pertanyaan3" id="tidak-puas" value="t-puas" <?php if ($perta3 == "t-puas") echo "checked" ?>>
                        <label for="t-puas">Tidak Puas</label><br>
                        <input type="radio" name="Pertanyaan3" id="sangat-tidak-puas" value="st-puas" <?php if ($perta3 == "st-puas") echo "checked" ?> >
                        <label for="st-puas">Sangat Tidak Puas</label><br>
                    </div>
                    
                    <br>
                    <br>
                    <br>
                    
                    <div class="Pertanyaan4">
                        <?php $perta4 = $d['Pertanyaan4'] ?>
                        
                        <input type="radio" name="Pertanyaan4" id="sangat-puas" value="s-puas" <?php if ($perta4 == "s-puas") echo "checked" ?> >
                        <label for="s-puas">Sangat Puas</label><br>
                        <input type="radio" name="Pertanyaan4" id="puas" value="puas" <?php if ($perta4 == "puas") echo "checked" ?>>
                        <label for="puas">Puas</label><br>
                        <input type="radio" name="Pertanyaan4" id="biasa-aja" value="b-aja" <?php if ($perta4 == "b-aja") echo "checked" ?>>
                        <label for="b-aja">Biasa Saja</label><br>
                        <input type="radio" name="Pertanyaan4" id="tidak-puas" value="t-puas" <?php if ($perta4 == "t-puas") echo "checked" ?>>
                        <label for="t-puas">Tidak Puas</label><br>
                        <input type="radio" name="Pertanyaan4" id="sangat-tidak-puas" value="st-puas" <?php if ($perta4 == "st-puas") echo "checked" ?> >
                        <label for="st-puas">Sangat Tidak Puas</label><br>
                    </div>
                    
                    <br>
                    <br>
                    <br>

                    <div class="Saran">
                        <label for="pesan-tambahan">Adakah pesan tambahan untuk kami?</label><br>
                        <textarea rows="5" cols="40" name="Saran" id="pesan-tambahan"><?php echo $d['Saran'] ?></textarea>
                    </div>
                    <br>

                    <input type="submit" id="submit" value="SIMPAN">
      </form>

    

</body>

</html>