<?php
    require "../basecss.php";
    require "../dbconfig/config.php";
    require "../api.php";
    require "../logic/proses-login.php";
    session_start();
    login();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Login</title>

    <link rel="stylesheet" type="text/css" href="../res/css/registration.css">

</head>

<body class="p-3">
    <div class="container">

            <?php
                if(isset($_GET['status'])):
            ?>
            <p>

            <?php 
                if($_GET['status'] == 'sukses'){
                    echo "<p class='alert alert-success' role='alert'>
                Success Added!.</p>";
                } else {
                    echo "<p class='alert alert-danger' role='alert'>
                Failed Added !.</p>";
                }
            ?>
            </p> 
            
            <?php endif; ?>

        <!-- row main box -->
        <div class="row row-main pb-5">

            <div class="col-md text-center pt-3 left-side">

                <div class="row pt-5">
                    <div class="col-md text-center  art-col">
                        <img src="../res/img/art-login.png" alt="" class="art .img-fluid">
                    </div>
                </div>
                
                <div class="row mt-3 px-3">
                    <div class="row text-center">
                       <div class="col-md px-5">
                            <h2>Halaman Login</h2>
                            <p>PerfectSeed merupakan Aplikasi Berbasis Web
                            yang akan menghitung kelayakan benih padi anda</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md right-side pt-3 text-center">
                <h4 class="mt-5 ">Lengkapi formulir dibawah ini</h4>
                <form action="" method="POST" class="pr-5">

                        <div class="form-group">
                        <input type="text" class="form-control" name="user_name" placeholder="User Name">
                        </div>


                        <div class="form-group">
                        <input type="password" class="form-control" name="pass" placeholder="Password">
                        </div>
                        
                        <div class="form-group">
                            <select name="user-type" id="inputState" class="form-control">
                                <option selected>Masuk Sebagai</option>
                                <option value="User">User</option>
                                <option value="Admin">Admin</option>
                            </select>
                        </div>

                        <div class="form-group mt-2">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" value="setuju">Ingat saya.
                                </label>
                            </div>
                        </div>
                        <input type="submit" name="submit" class="btn btn-success mt-4" value="login">
                </form>
            </div>
        </div>
        <!-- endof row main box -->

        <div class="row row-copy">
            <div class="col text-center mt-5">
                <p>Kelompok 5 - 2019</p>
            </div>
        </div>

        <!-- bg -->
            <img class="bg-bot" src="../res/img/elipse-bot.png" alt="">
            <img class="bg-top" src="../res/img/elipse-top.png" alt="">

            <!-- endof bg -->
    </div>
</body>
</html>