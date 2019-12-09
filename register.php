<?php
include "basecss.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Pendaftaran</title>

    <style>
        .home-side{
            height: 100vh;
        }
    </style>
</head>

<body>
        <div class="row">

            <!-- Bagian Kiri -->
            <div class="col-4 home-side">
                <div class="container p-4">

                    <div class="row">
                        <div class="col text-center">
                                <img src="./res/img/logo-perfectseed-white.png" class="logo" alt="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col text-center mt-3">
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. </p>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Endof bagian kiri -->

            <!-- Bagian Form -->
            <div class="col-8 form-reg p-5">
                <h3>Halaman Pendaftaran</h3>
                <p>Tidak punya akun ? segera buat akun anda sekarang dalam waktu kurang dari 5 menit.</p>
                <form action="proses-register.php" method="POST">
                    <div class="form-group">
                    <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group">
                    <input type="text" class="form-control" name="user_name" placeholder="User Name">
                    </div>
                    <div class="form-group">
                    <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                    </div>
                    <div class="form-group">
                    <input type="password" class="form-control" name="pass" placeholder="Password">
                    </div>
                    <input type="submit" name="daftar" class="btn btn-success" value="Daftar">
                </form>
            </div>
            <!-- Endof Bagian Form -->

        </div>
</body>
</html>