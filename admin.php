<?php
    include "basecss.php";
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
    <?php
            if(isset($_GET['status'])):
    ?>
    <h4>
        <?php
            if($_GET['status']=="success"){
                echo "<p class='alert alert-success' role='alert'>
            Success Login!.</p>";
            } 
        ?>
    </h4>
        <?php endif;?>
    <h4>Ini Admin Page</h4>
    <div class="container-fluid">
    <div class="row">
        <div class="col-3 px-1 bg-dark position-fixed" id="sticky-sidebar">
            ...
        </div>
        <div class="col offset-3" id="main">
            <h1>Main Area</h1>
            ...
        </div>
    </div>
</div>
</body>
</html>