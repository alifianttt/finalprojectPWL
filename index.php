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
        <p>
        <?php 
            if($_GET['status'] == 'sukses'){
                echo "Succes Add new !!";
            } else {
                echo "Failed added";
            }
        ?>
        </p> <?php endif; ?>
    <h4>Welcome To Seed's Exper System </h4>
    <p>Do you Have'nt Accountt? <a href="./register.php">Sign Up</a></p>
    <form action="login_cek.php" method="POST">
        <div class="form-group row">
            <label for="username" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
                <input type="username" class="form-control" id="inputEmail3" placeholder="username" name="username">
            </div>
        </div>
        <div class="form-group row">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
            </div>
        </div>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>

</html>