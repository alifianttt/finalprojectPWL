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
        if($_POST['user-type']=="Admin"){
            $user = $_POST['username'];
            $pass = $_POST['password'];
            $passw = md5($pass);
            $sql = "SELECT count(*) as countusr from admin_table where usr_name='$user' and pass='$passw'";
            $query = mysqli_query($db, $sql);
            $row = mysqli_fetch_array($query);
            $count = $row['countusr'];
            if($count > 0){
                $_SESSION['uname'] = $user;
                header('Location: admin.php?status=success');
            } else {
                echo "<p class='alert alert-danger' role='alert'>
                Invalid .</p>";
            }
        } else {
            $user = $_POST['username'];
            $pass = $_POST['password'];
            $passw = md5($pass);
            $sql = "SELECT count(*) as countusr, id_user from user_table where usr_name='$user' and pass='$passw'";
            $query = mysqli_query($db, $sql);
            $row = mysqli_fetch_array($query);
            $count = $row['countusr'];
            $id = $row['id_user'];
            if($count > 0){
                $_SESSION['id'] = $id;
                header('Location: Profile.php');
            } else {
                echo "<p class='alert alert-danger' role='alert'>
                Invalid .</p>";
            }
        }
    } 
?>

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
            <input type="submit" class="btn btn-success" value="Submit" name="submit">
        </form>
        <p>Cuaca Saat Ini <?php echo $weather;?></p>
        <img src="<?php echo $image ;?>" alt="">
        <p>Suhu Saat ini <?php echo $temp;?> °C</p>
    </div>
</body>

</html>