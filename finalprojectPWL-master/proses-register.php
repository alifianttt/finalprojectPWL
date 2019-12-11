<?php
include "config.php";
if(isset($_POST['daftar'])){
    $nama = $_POST['nama'];
    $uname = $_POST['user_name'];
    $address = $_POST['alamat'];
    $pass = $_POST['pass'];
    $passw = md5($pass);

    $sql = "INSERT INTO user_table (nama, usr_name, alamat, pass) VALUE ('$nama', '$uname', '$address', '$passw')";
    $query = mysqli_query($db, $sql);

    if($query){
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?staus=gagal');
    }
}
?>