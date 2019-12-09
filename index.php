<?php
    include "basecss.php";
    include "config.php";
    include "api.php";
    session_start();
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Selamat datang di PerfectSeed</title>
</head>

<?php
    
    if(isset($_POST['submit'])){
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $sql = "SELECT count(*) as countusr from user_table where usr_name='$user' and pass='$pass'";
        $query = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($query);
        $count = $row['countusr'];
        if($count > 0){
            $_SESSION['uname'] = $user;
            header('Location: diagnose.php?status=success');
        } else {
            echo "<p class='alert alert-danger' role='alert'>
            Invalid.</p>";
        }
    } 
?>

<body>
    <div class="container">
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

        <p>Do you Have'nt Accountt? <a href="./register.php">Sign Up</a></p>

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

            <input type="submit" value="Submit" name="submit">
        </form>

    </div>
</body>

</html>