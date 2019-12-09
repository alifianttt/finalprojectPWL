<?php
include "basecss.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid" >
        <div class="row">
        <div class="col-4 home-side">
            <h3 class="text-center">Perfect Seed</h3>
        </div>
        <div class="col-8 form-reg">
        <h4>Register Form</h4>
        <form action="proses-register.php" method="POST">
            <div class="form-group">
                <input type="text" name="nama" placeholder="Nama Anda">
            </div>
            <div class="form-group">
                <input type="text" name="user_name" placeholder="User name">
            </div>
            <div class="form-group">
                <input type="text" name="alamat" placeholder="Alamat">
            </div>
            <div class="form-group">
                <input type="password" name="pass" placeholder="Password">
            </div>
            <input type="submit" name="daftar" value="Daftar" class="btn btn-primary">
        </form>
        </div>
        </div>
    </div>    
</body>
</html>