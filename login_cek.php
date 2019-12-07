<?php
    include "config.php";
    if(isset($_POST['submit'])){
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $sql = "SELECT count(*) as countusr where usr_name='$user' and pass='$pass'";
        $query = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($query);
        $count = $row['countusr'];
        if($count > 0){
            header('Location: diagnose.php?status=succes');
        } else {
            echo "<p class='alert alert-success' role='alert'>
            Invalid.</p>";
        }
    } 
?>