<?php
include "koneksi.php";
$data = mysqli_query($koneksi, "SELECT * FROM mhs ORDER BY id ASC");
$nourut = 0;
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container-tampil">
        <div class="header">
            <h1>Daftar Mahasiswa</h1>
            <div class="tombol-nav">
                <a href="tambahDataMhs.php" class="btn-tambah">Tambah Data Baru</a>
                <a href="cetakDataMhsPdf.php" class="btn-tambah">Cetak Data</a>
                <a href="logout.php" class="btn-logout" onclick="return confirm('Yakin ingin logout?')">Logout</a>
            </div>
        </div>

        <div class="table">
            <table>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jml Sdr</th>
                    <th>Alamat</th>
                    <th>Kota</th>
                    <th>JK</th>
                    <th>Hobi</th>
                    <th>Email</th>
                    <th class="aksi">Aksi</th>
                </tr>
                
                <?php while ($row = mysqli_fetch_assoc($data)): ?>
                    <?php $nourut++; ?>
                    <tr>
                        <td><?= $nourut ?></td>
                        <td><?= $row['nim'] ?></td>
                        <td><?= $row['nama'] ?></td>
                        <td><?= $row['tempatLahir'] ?></td>
                        <td><?= $row['tanggalLahir'] ?></td>
                        <td><?= $row['jmlSaudara'] ?></td>
                        <td><?= $row['alamat'] ?></td>
                        <td><?= $row['kota'] ?></td>
                        <td><?= $row['jenisKelamin'] ?></td>
                        <td><?= $row['hobi'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td class="btn-aksi">
                            <a href="koreksiDataMhs.php?kode=<?= $row['id'] ?>" class="btn-edit">Koreksi</a>
                            <a href="hapusDataMhs.php?kode=<?= $row['id'] ?>" class="btn-hapus"
                                onclick="return confirm('Yakin dihapus?')">Hapus</a>
                        </td>
                    </tr>
                <?php
                endwhile;
                ?>

            </table>
        </div>
    </div>

</body>

</html>