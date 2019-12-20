<?php
    include "basecss.php";
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./res/css/landing.css">
    <title>Selamat datang di PerfectSeed</title>
</head>

<body>
    <div class="container-fluid">

        <div class="row main-div">
            
            <!-- Bagian kiri -->
            <div class="col-md side-left">
                <ul class="features-ul">

                    <li class="features-li">
                        <span class="features-icon"><i class="material-icons">speed</i></span>
                        <span class="features-text">Proses analisa sangat cepat.</span>
                    </li>

                    <li class="features-li">
                        <span class="features-icon"><i class="material-icons">directions_run</i></span>
                        <span class="features-text">Bisa diakses dimana saja.</span>
                    </li>

                    <li class="features-li">
                        <span class="features-icon"><i class="material-icons">how_to_reg</i></span>
                        <span class="features-text">Berdasarkan uji coba para ahli.</span>
                    </li>
                </ul>

                <img class="bg-logo" src="./res/img/logo-bg.png" alt="">


            </div>
            <!-- endof bagian kiri -->

            <!-- Bagian button -->
            <div class="col-md side-form text-center">
                <div class="container-fluid main-box">
                    <img src="./res/img/logo-perfectseed.png" alt="">
                    
                    <div class="row mt-3">
                        <div class="col">
                            <p>Bergabung dengan PerfectSeed dan dapatkan semua fasilitasnya.</p>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col">
                            <a href="./register2.php"><button type="button" class="btn btn-daftar">Daftar Sekarang</button></a>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col">
                            <a href="./login.php"><button type="button" class="btn btn-masuk">Masuk</button></a>
                        </div>
                    </div>

                </div>
            </div>
            <!-- endof bagian button -->

        </div>

        <!-- Bottom bar -->
        <div class="row bottom-div">
            <div class="col-md text-center p-2">
                <p>(c) PerfectSeed 2019</p>
            </div>
        </div>
        <!-- endof bottom bar -->

    </div>
</body>