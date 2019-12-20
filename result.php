<?php
    include "config.php";
    include "basecss.php";
    session_start();
    if(!isset($_SESSION['uname'])){
        header('Location: diagnose.php');
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
            if(isset($_GET['result'])):
        ?>
        <h5>
            <?php
                if($_GET['result'] == 'result1'){
                    echo "Benih Anda 70% layak";
                } else if ($_GET['result'] == 'result2') {
                    echo "Benih Anda 60% layak";
                } else if ($_GET['result'] == 'result3') {
                    echo "Benih Anda 50% layak";
                } else{
                    echo "Sebiknya Benih anda di ganti";
                }
            ?>
        </h5>
            <?php endif; ?>
    </div>
</body>

</html>