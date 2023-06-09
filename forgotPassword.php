<?php
require_once("php/connectdb.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" type="image/x-icon" href="images/favicon.ico">

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Pendaftaran PPDB | SMPN 69 Philads</title>

        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <link rel="stylesheet" href="styleLogin.css">
    </head>
<body>

<div class="container">
    <div class="forms">
        <div class="form login">
            <span class="title">Atur Ulang Kata Sandi</span>

            <form action="#">
                <div class="input-field">
                    <input type="text" placeholder="Masukkan alamat email" required>
                    <i class="uil uil-envelope icon"></i>
                </div>

                <div class="input-field">
                    <input type="text" placeholder="Konfirmasi alamat email" required>
                    <i class="uil uil-envelope icon"></i>
                </div>

                <div class="input-field button">
                    <input type="button" value="Cek Alamat Email">
                </div>
            </form>

            <div class="login-signup">
                    <span class="text">Berhasil menemukannya?
                        <a href="login.php" class="text signup-link">Masuk sekarang</a>
                    </span>
            </div>
        </div>
    </div>
</div>

<script src="script.js"></script>

</body>
</html>
