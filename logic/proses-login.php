<?php
    require "../dbconfig/config.php";
    function login(){
        global $db;
    if(isset($_POST['submit'])){
        if($_POST['user-type']=="Admin"){
            $user = $_POST['username'];
            $pass = $_POST['password'];
            $passw = md5($pass);
            $sql = "SELECT count(*) as countusr , id_admin  from admin_table where usr_name='$user' and pass='$passw'";
            $query = mysqli_query($db, $sql);
            $row = mysqli_fetch_array($query);
            $count = $row['countusr'];
            $id = $row['id_admin']; 
            if($count > 0){
                $_SESSION['id'] = $id;
                header('Location: ../view-page/admin.php');
            } else {
                echo "<p class='alert alert-danger' role='alert'>
                Invalid .</p>";
            }
        } else {
            $user = $_POST['username'];
            $pass = $_POST['password'];
            $passw = md5($pass);
            $sql = "SELECT count(*) as countusr, id_user from user_table where usr_name='$user' and pass='$passw'";
            $query = mysqli_query($db, $sql);
            $row = mysqli_fetch_array($query);
            $count = $row['countusr'];
            $id = $row['id_user'];
            if($count > 0){
                $_SESSION['id'] = $id;
                header('Location: ../view-page/Profile.php');
            } else {
                echo "<p class='alert alert-danger' role='alert'>
                Invalid .</p>";
            }
        }
    } 

    if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['id']);
		header("location: login.php");
	}
}
?>