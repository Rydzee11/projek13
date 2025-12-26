<!DOCTYPE html>
<html>

<head>
    <title>Sistem Informasi Akademik::Edit Data Mahasiswa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    require "koneksi.php";
    $id = $_GET['kode'];
    $sql = "select * from mhs where id='$id'";
    $qry = mysqli_query($koneksi, $sql);
    $row1 = mysqli_fetch_assoc($qry);

    $xhobi = [];
    if (!empty($row1['hobi'])) {
        $xhobi = array_map('trim', explode(",", $row1['hobi']));
    }
    ?>
    <div class="container">
        <h1>Form Koreksi Data Mahasiswa</h1>
        <p>A12.2024.07218 - Muhamad Farid Alfarizi</p>
        <form action="simpanKoreksiDataMhs.php" method="POST">

            <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" name="nim" id="nim" value="<?php echo $row1['nim'] ?>">
            </div>

            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" name="nama" id="nama" value="<?php echo $row1['nama'] ?>">
            </div>

            <div class="form-group">
                <label>Tempat Lahir</label>
                <input type="text" name="tempatLahir" id="tempatLahir" value="<?php echo $row1['tempatLahir'] ?>">
            </div>

            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" name="tanggalLahir" id="tanggalLahir" value="<?php echo $row1['tanggalLahir'] ?>">
            </div>

            <div class="form-group">
                <label>Jumlah Saudara</label>
                <input type="text" name="jumlahSaudara" id="jumlahSaudara" value="<?php echo $row1['jmlSaudara'] ?>">
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" id="alamat" value="<?php echo $row1['alamat'] ?>">
            </div>

            <div class="form-group">
                <label>Kota</label>
                <select name="kota""> 
                <option value=" Semarang" <?= ($row1['kota'] == 'Semarang') ? 'selected' : ''; ?>>Semarang</option>
                    <option value="Solo" <?= ($row1['kota'] == 'Solo') ? 'selected' : ''; ?>>Solo</option>
                    <option value="Brebes" <?= ($row1['kota'] == 'Brebes') ? 'selected' : ''; ?>>Brebes</option>
                    <option value="Kudus" <?= ($row1['kota'] == 'Kudus') ? 'selected' : ''; ?>>Kudus</option>
                </select>
            </div>

            <div class="form-group inline">
                <label>Jenis Kelamin:<label>
                        <input type="radio" name="jenisKelamin" value="Pria" <?= ($row1['jenisKelamin'] == 'Pria') ? 'checked' : ''; ?>>Pria
                        <input type="radio" name="jenisKelamin" value="Wanita" <?= ($row1['jenisKelamin'] == 'Wanita') ? 'checked' : ''; ?>>Wanita
            </div>

            <div class="form-group inline">
                <label>Status:</label>
                <input type="radio" name="statusKeluarga" value="Belum Menikah" <?= ($row1['statusKeluarga'] == 'Belum Menikah') ? 'checked' : ''; ?>>Belum Menikah
                <input type="radio" name="statusKeluarga" value="Menikah" <?= ($row1['statusKeluarga'] == 'Menikah') ? 'checked' : ''; ?>>Menikah
            </div>

            <div class="form-group">
                <label>Hobi (Boleh pilih lebih dari satu):</label>
                <div class="checkbox-grid">
                    <label><input type="checkbox" name="hobi[]" value="Membaca" <?= in_array("Membaca", $xhobi) ? "checked" : "" ?>> Membaca</label>
                    <label><input type="checkbox" name="hobi[]" value="Olahraga" <?= in_array("Olahraga", $xhobi) ? "checked" : "" ?>> Olahraga</label>
                    <label><input type="checkbox" name="hobi[]" value="Musik" <?= in_array("Musik", $xhobi) ? "checked" : "" ?>> Musik</label>
                    <label><input type="checkbox" name="hobi[]" value="Traveling" <?= in_array("Traveling", $xhobi) ? "checked" : "" ?>> Traveling</label>
                </div>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" id="email" value="<?php echo $row1['email'] ?>">
            </div>

            <button type="Submit" id="Submit" class="btn-submit">Simpan Data</button>
            <input type="hidden" name="id" value="<?php echo $id ?>">
        </form>
    </div>
</body>

</html>