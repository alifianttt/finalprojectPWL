<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<body>
    <?php
            if(isset($_GET['status'])):
    ?>
    <h4>
        <?php
            if($_GET['status']=="succes"){
                echo "Succes Login";
            } else {
                echo "Failed !!";
            }
        ?>
    </h4>
        <?php endif;?>
    <form action="" method="POST">
        <div class="form-group">
            <label for="diagnose1">Apakah Biji Kuning?</label>
            <label ><input type="radio" name="diagnose1" value="ya">Ya</label>
            <label ><input type="radio" name="diagnose1" value="tidak">Tidak</label>
        </div>
        <div class="form-group">
            <label for="diagnose2">Apakah Biji Hitam?</label>
            <label ><input type="radio" name="diagnose2" value="ya">Ya</label>
            <label ><input type="radio" name="diagnose2" value="tidak">Tidak</label>
        </div>
        <div class="form-group">
            <label for="diagnose3">Apakah Biji Kuning?</label>
            <label ><input type="radio" name="diagnose3" value="ya">Ya</label>
            <label ><input type="radio" name="diagnose3" value="tidak">Tidak</label>
        </div>
        <input type="submit" name="start" value="Start">
    </form>
</body>
<?php
    if(isset($_POST['start'])){
        $diag1 = $_POST['diagnose1'];
        $diag2 = $_POST['diagnose2'];
        $diag3 = $_POST['diagnose3'];

        if($diag1=="ya" && $diag2=="ya" && $diag3="ya"){
            header('Location: result.php?result=result1');
        } else if ($diag1=="ya" && $diag2=="tidak" && $diag3=="tidak") {
            header('Location: result.php?result=result2');
        } else if($diag1=="tidak" && $diag2=="ya" && $diag3=="tidak"){
            header('Location: result.php?result=result3');
        } else if ($diag1=="tidak" && $diag2=="tidak" && $diag3=="tidak") {
            header('Location: result.php?result=result4');
        } 
    }
?>
</html>