<?php
    include "config.php";
    include "basecss.php";
    session_start();
    if(!isset($_SESSION['id'])){
        header('Location: Profile.php');
    }
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
    <div class="container">
        <h1>Hasil Diagnosa</h1>
        
    </div>
</body>
</html>