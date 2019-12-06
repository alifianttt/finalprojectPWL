<?php
include "config.php";
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
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $alamat = $_POST['alamat'];
    $nama = $_POST['name'];
    mysqli_query($connect,"INSERT into tb_user (nama,alamat,password,user_name) values($nama, $alamat, $pass, $username)");
    echo "selamat anda sudah terdaftar";
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
            <input type="password" name="password" placeholder="password">
        </div>
        <div class="form-group">
            <input type="text-area" name="alamat" placeholder="address">
        </div>
        <input type="submit" name="daftar" value="Daftar">
    </form>

</body>
</html>