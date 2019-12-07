<?php
include "config.php";
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
<?php

if(isset($_POST['daftar'])){
    $nama = $_POST['name'];
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $alamat = $_POST['alamat'];
    $sql = "INSERT INTO tb_user `(nama, user_name, password, alamat)` VALUE ('$nama', '$username', '$pass', '$alamat')";
    $query = mysqli_connect($connect,$sql);
    if($query){
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }
}
?>
<body>
    <h4>Register Form</h4>
    <form action="register.php" method="POST">
        <div class="form-group">
            <input type="text" name="name" placeholder="name">
        </div>
        <div class="form-group">
            <input type="text" name="username" placeholder="username">
        </div>
        <div class="form-group">
            <input type="text" name="password" placeholder="password">
        </div>
        <div class="form-group">
            <input type="text" name="alamat" placeholder="address">
        </div>
        <input type="submit" name="daftar" value="Daftar">
    </form>

</body>
</html>