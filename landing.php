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

            </div>
            <!-- endof bagian kiri -->

            <!-- Bagian form -->
            <div class="col-md side-form text-center">
                <img src="./res/img/logo-perfectseed.png" alt="">
                <form action="proses-register.php" method="POST" class="pr-5">

                        <div class="form-group mt-5">
                        <input type="text" class="form-control" name="user_name" placeholder="User Name">
                        </div>

                        <div class="form-group">
                        <input type="password" class="form-control" name="pass" placeholder="Password">
                        </div>

                        <input type="submit" name="daftar" class="btn btn-success mt-4" value="Daftar">
                </form>
            </div>
            <!-- endof bagian form -->

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

</html>