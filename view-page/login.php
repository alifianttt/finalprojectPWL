<?php
    require "../basecss.php";
    require "../dbconfig/config.php";
    require "../api.php";
    require "../logic/proses-login.php";
    session_start();
    login();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Selamat datang di PerfectSeed</title>
</head>

<body>
    <div class="container-fluid">
            <?php
                if(isset($_GET['status'])):
            ?>
            <p>

            <?php 
                if($_GET['status'] == 'sukses'){
                    echo "<p class='alert alert-success' role='alert'>
                Success Added!.</p>";
                } else {
                    echo "<p class='alert alert-danger' role='alert'>
                Failed Added !.</p>";
                }
            ?>
            </p> 
            
            <?php endif; ?>

        <h4>Welcome To Seed's Exper System </h4>

        <p>Do you Have'nt Accountt? <a href="./register2.php">Sign Up</a></p>

        <form action="" method="POST">
            <div class="form-group row">
                <label for="username" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                    <input type="username" class="form-control"  placeholder="username" name="username">
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                </div>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="user-type" id="exampleRadios2" value="Admin">
                <label class="form-check-label" for="user-type">
                    Admin
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="user-type" id="exampleRadios2" value="User">
                <label class="form-check-label" for="user-type">
                    User
                </label>
            </div>
            <br>
            <input type="submit" class="btn btn-success" value="Login" name="submit">
        </form> <br>
        <p>Cuaca Saat Ini <?php echo $weather;?></p>
        <img src="<?php echo $image ;?>" alt="">
        <p>Suhu Saat ini <?php echo $temp;?> °C</p>
    </div>
</body>

</html>