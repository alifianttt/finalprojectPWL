<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "botanical_db";

    $db = mysqli_connect($host, $user, $pass, $dbname);

    if(!$db){
        die("Failed to connect database !!: ". mysqli_connect_error());
        
    }


?>