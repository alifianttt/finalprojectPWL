<?php
require "../dbconfig/config.php";
    function editdata($id){
        global $db;
        if(isset($_POST['edit'])){
            $name = $_POST['nama'];
            $usr_name = $_POST['user_name'];
            $addr = $_POST['alamat'];
            $update = "UPDATE user_table SET nama='$name', usr_name='$usr_name', alamat='$addr' WHERE id_user ='$id'";
            $sql = mysqli_query($db, $update);
        
           echo "<p class='alert alert-success' role='alert'>
           Succes Edit .</p>";
        }
    
    }
    
    
    
?>