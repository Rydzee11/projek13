<?php
session_start();
if (isset($_SESSION['username'])) {
    header("location:tampilDataMhs.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
</head>

<body class="login-page">

    <div class="login-container">
        <div class="login-header">
            <h1>Selamat Datang</h1>
            <p>Silakan login untuk mengelola data</p>
        </div>

        <form method="post">
            <div class="form-group">
                <label>NIM</label>
                <input type="text" name="nim" placeholder="Masukkan NIM Anda" required autofocus>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="passw" placeholder="Masukkan Password" required>
            </div>

            <button type="submit" name="login" class="btn-submit">Login</button>

            <?php
            if (isset($_POST['login'])) {
                require "koneksi.php";
                $username = mysqli_real_escape_string($koneksi, $_POST['nim']);
                $password = $_POST['passw'];

                $sql = "SELECT * FROM mhs WHERE nim='$username' LIMIT 1";
                $query = mysqli_query($koneksi, $sql);

                if (mysqli_num_rows($query) == 1) {
                    $data = mysqli_fetch_assoc($query);

                    if (password_verify($password, $data['pass'])) {
                        $_SESSION['username'] = $data['nim'];
                        header("location:tampilDataMhs.php");
                        exit;
                    } else {
                        echo "<div class='pass-salah'>Password salah!</div>";
                    }
                } else {
                    echo "<div class='pass-salah'>NIM tidak ditemukan!</div>";
                }
            }
            ?>
        </form>

    </div>

</body>

</html>