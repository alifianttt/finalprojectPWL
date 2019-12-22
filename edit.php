<?php
include "basecss.php";
include "config.php";
include "proses-edit.php";

    session_start();
    include "config.php";
    $id = $_GET['id'];
    $select = "SELECT * FROM user_table where id_user='$id'";
    $sql = mysqli_query($db, $select);
    $row = mysqli_fetch_array($sql);
    editdata();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Pendaftaran</title>

    <link rel="stylesheet" type="text/css" href="./res/css/registration.css">

</head>

<body class="p-3">
    <div class="container">

        <!-- row logo -->
        <div class="row row-logo p-2 mb-4">
            <div class="col-md text-center">
               <a href="./index.php"><img src="./res/img/logo-perfectseed-horizontal.png" alt="" class="logo text-xs-center"></a> 
            </div>
        </div>
        <!-- endof row logo -->

        <!-- row main box -->
        <div class="row row-main pb-5">

            <div class="col-md text-center pt-3 left-side">

                <div class="row pt-5">
                    <div class="col-md text-center  art-col">
                        <img src="./res/img/art.png" alt="" class="art .img-fluid">
                    </div>
                </div>
                
                <div class="row mt-3 px-3">
                    <div class="row text-center">
                       <div class="col-md px-5">
                            <h2>Halaman Pendaftaran</h2>
                            <p>Tidak punya akun ? segera buat akun anda sekarang
                            dalam waktu kurang dari 5 menit.</p>
                       </div>
                    </div>
                </div>

            </div>

            <div class="col-md right-side pt-3 text-center">
                <h4 class="mt-5 ">Silahkan Edit Data Anda</h4>
                <form action="" method="POST" class="pr-5">
                        <div class="form-group mt-5">
                        <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" value="<?php echo $row['nama'];?>">
                        </div>

                        <div class="form-group">
                        <input type="text" class="form-control" name="user_name" placeholder="User Name" value="<?php echo $row['usr_name'];?>">
                        </div>

                        <div class="form-group">
                        <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="<?php echo $row['alamat'];?>">
                        </div>
                            <input type="submit" name="edit" class="btn btn-success mt-4" value="Edit">
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
            <img class="bg-bot" src="./res/img/elipse-bot.png" alt="">
            <img class="bg-top" src="./res/img/elipse-top.png" alt="">

            <!-- endof bg -->
    </div>
</body>
</html>