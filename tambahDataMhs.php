<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <h1>Form Input Mahasiswa</h1>
        <form action="simpanDataMhs.php" method="POST">

            <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" name="nim" id="nim" placeholder="A00.0000.00000" required>
            </div>

            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" name="nama" placeholder="Nama lengkap sesuai ijazah" required>
            </div>

            <div class="form-group">
                <label>Tempat Lahir</label>
                <input type="text" name="tempatLahir" required>
            </div>

            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" name="tanggalLahir" required>
            </div>

            <div class="form-group">
                <label>Jumlah Saudara</label>
                <input type="number" name="jmlSaudara" required>
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <textarea rows="3" name="alamat"></textarea>
            </div>

            <div class="form-group">
                <label>Kota</label>
                <select name="kota">
                    <option value="">Pilih Kota</option>
                    <option value="Semarang">Semarang</option>
                    <option value="Solo">Solo</option>
                    <option value="Brebes">Brebes</option>
                    <option value="Kudus">Kudus</option>
                    <option value="Demak">Demak</option>
                    <option value="Salatiga">Salatiga</option>
                </select>
            </div>

            <div class="form-group inline">
                <label>Jenis Kelamin:</label>
                <div class="radio-group">
                    <label><input type="radio" name="jk" value="Pria" required> Pria</label>
                    <label><input type="radio" name="jk" value="Wanita" required> Wanita</label>
                </div>
            </div>

            <div class="form-group inline">
                <label>Status:</label>
                <div class="radio-group">
                    <label><input type="radio" name="statusKeluarga" value="Belum Menikah" required> Belum Menikah</label>
                    <label><input type="radio" name="statusKeluarga" value="Menikah" required> Menikah</label>
                </div>
            </div>

            <div class="form-group">
                <label>Hobi (Boleh pilih lebih dari satu):</label>
                <div class="checkbox-grid">
                    <label><input type="checkbox" name="hobi[]" value="Membaca"> Membaca</label>
                    <label><input type="checkbox" name="hobi[]" value="Olahraga"> Olahraga</label>
                    <label><input type="checkbox" name="hobi[]" value="Musik"> Musik</label>
                    <label><input type="checkbox" name="hobi[]" value="Traveling"> Traveling</label>
                </div>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="contoh@email.com" required>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>

            <button type="submit" class="btn-submit">Simpan Data</button>
        </form>
    </div>
    

</body>

</html>