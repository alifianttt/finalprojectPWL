<?php
    include "config.php";
    include "basecss.php";
    session_start();
    if(!isset($_SESSION['id'])){
        header('Location: Profile.php');
    }
    function add($hasil, $id){
        $db = mysqli_connect("localhost", "root", "", "botanical_db");
        $sql = "INSERT INTO diagnosa_table (hasil, id_user) VALUE ('$hasil', '$id')";
        $query = mysqli_query($db, $sql);
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
        <?php
            $id = $_SESSION['id'];
            if($_GET['res']=='layak'){
                $hasil = "Biji anda layak";
                add($hasil, $id);
                echo "<h4>Berhasil</h4>";
                echo "<h5>".$hasil."</h5>";
            } else if ($_GET['res']=='sedang1'){
                $hasil = "Biji anda layak tapi kalau ada uang lebih mending ganti";
                add($hasil, $id);
                echo "<h4>Berhasil</h4>";
                echo "<h5>".$hasil."</h5>";
            } 
        ?>
        
    </div>
</body>
</html>