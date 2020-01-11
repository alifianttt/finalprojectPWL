<?php
    require "../dbconfig/config.php";
    require "../logic/function.php";
    require "../basecss.php";
    session_start();
    if(!isset($_SESSION['id'])){
        header('Location: ../view-page/Profile.php');
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Pendaftaran</title>

    <link rel="stylesheet" type="text/css" href="../res/css/registration.css">
    <link rel="stylesheet" type="text/css" href="../res/css/mycss.css">

</head>

<body class="p-3">
    <div class="container">

        <!-- row logo -->
        <div class="row row-logo p-2 mb-4">
            <div class="col-md text-center">
               <a href="./index.php"><img src="../res/img/logo-perfectseed-horizontal.png" alt="" class="logo text-xs-center"></a> 
            </div>
        </div>
        <!-- endof row logo -->

        <!-- row main box -->
        <div class="row row-main pb-5 text-center">
            <div class="col">
            <h1 class="text-center">Hasil Diagnosa</h1>
            <img class="" src="../res/img/tick.png" width="20%" height="" alt="">
        <?php
            $id = $_SESSION['id'];
            
            date_default_timezone_set('Asia/Jakarta');
            $now = (new DateTime())->format("Y-m-d H:i:s");
            if($_GET['res']=='layak'){
                $hasil = "Biji anda sangat layak";
                add($hasil, $id, $now);
                echo "<br>";
                echo "<h4 class='text-center'>Berhasil</h4>";
                echo "<br>";
                echo "<h4 class='text-center'>".$hasil."</h4>";
            } else if ($_GET['res']=='sedang1'){
                $hasil = "Biji anda cukup layak tapi perlu di rendam dengan air";
                add($hasil, $id, $now);
                echo "<br>";
                echo "<h4 class='text-center'>Berhasil</h4>";
                echo "<br>";
                echo "<h5 class='text-center'>".$hasil."</h5>";
            } else if($_GET['res']=='sedang2'){
                $hasil = "Biji anda memiliki vigor cukup tapi sebaiknya jangan direndam terlalu lama";
                add($hasil, $id, $now);
                echo "<br>";
                echo "<h4 class='text-center'>Berhasil</h4>";
                echo "<br>";
                echo "<h5 class='text-center'>".$hasil."</h5>";
            } else if($_GET['res']=='sedang3'){
                $hasil = "Biji anda perlu direndam dengan waktu yang cukup";
                add($hasil, $id, $now);
                echo "<br>";
                echo "<h4 class='text-center'>Berhasil</h4>";
                echo "<br>";
                echo "<h5 class='text-center'>".$hasil."</h5>";
            } else if($_GET['res']=='sedang4'){
                $hasil = "Biji anda perlu di ganti karena vigornya terlalu rendah";
                add($hasil, $id, $now);
                echo "<br>";
                echo "<h4 class='text-center'>Berhasil</h4>";
                echo "<br>";
                echo "<h5 class='text-center'>".$hasil."</h5>";
            }
        ?>
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