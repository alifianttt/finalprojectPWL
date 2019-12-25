<?php
    require "../dbconfig/config.php";
    require "../logic/function.php";
    require "../basecss.php";
    session_start();
    if(!isset($_SESSION['id'])){
        header('Location: ../view-page/Profile.php');
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
            
            date_default_timezone_set('Asia/Jakarta');
            $now = (new DateTime())->format("Y-m-d H:i:s");
            if($_GET['res']=='layak'){
                $hasil = "Biji anda sangat layak";
                add($hasil, $id, $now);
                echo "<h4>Berhasil</h4>";
                echo "<h4>".$hasil."</h4>";
            } else if ($_GET['res']=='sedang1'){
                $hasil = "Biji anda 80% layak";
                add($hasil, $id, $now);
                echo "<h4>Berhasil</h4>";
                echo "<h5>".$hasil."</h5>";
            } else if($_GET['res']=='sedang2'){
                $hasil = "Biji anda 60% layak";
                add($hasil, $id, $now);
                echo "<h4>Berhasil</h4>";
                echo "<h5>".$hasil."</h5>";
            } else if($_GET['res']=='sedang3'){
                $hasil = "Sebaiknya bijinya diganti";
                add($hasil, $id, $now);
                echo "<h4>Berhasil</h4>";
                echo "<h5>".$hasil."</h5>";
            }
        ?>
        
    </div>
</body>
</html>