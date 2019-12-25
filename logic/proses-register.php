<?php
require "../dbconfig/config.php";
if(isset($_POST['daftar'])){
    if($_POST['user-type']=="Admin"){
   
        $nama = $_POST['nama'];
        $uname = $_POST['user_name'];
        $address = $_POST['alamat'];
        $pass = $_POST['pass'];
        $passw = md5($pass);

        $sql = "INSERT INTO admin_table (nama, usr_name, alamat, pass) VALUE ('$nama', '$uname', '$address', '$passw')";
        $query = mysqli_query($db, $sql);

        if($query){
            header('Location: ../view-page/login.php?status=sukses');
        } else {
            header('Location: ../view-page/login.php?staus=gagal');
        }
         
    } else {
        $nama = $_POST['nama'];
        $uname = $_POST['user_name'];
        $address = $_POST['alamat'];
        $pass = $_POST['pass'];
        $passw = md5($pass);

        $sql = "INSERT INTO user_table (nama, usr_name, alamat, pass) VALUE ('$nama', '$uname', '$address', '$passw')";
        $query = mysqli_query($db, $sql);

        if($query){
            header('Location: ../view-page/login.php?status=sukses');
        } else {
            header('Location: ../view-page/login.php?staus=gagal');
        }
    }
}
?>