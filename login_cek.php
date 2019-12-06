<?php
    
    if(isset($_POST['submit'])){
        $user = $_POST['username'];
        $pass = $_POST['password'];
        if($user=='admin' && $pass=='admin'){
            header('Location: diagnose.php?status=succes');
        } else {
            header('Location: diagnose.php?status=failed');
        }
    } 
?>