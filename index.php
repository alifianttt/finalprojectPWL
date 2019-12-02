
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<?php
    
    if(isset($_POST['submit'])){
        $user = $_POST['username'];
        $pass = $_POST['password'];
        if($user=='admin' && $pass=='admin'){
            header('Location: diagnose.php?status=succes');
        } else {
            header('Location: diagnose.php?status=failed');
        }
    } 
?>
<body>
    <h4>Welcome To Seed's Exper System </h4>
    <p>Do you Have'nt Accountt? <a href="">Sign Up</a></p>
    <form action="" method="POST">
        <div class="form-group">
            <label for="username">User Name</label>
            <input type="text" placeholder="username" name="username"> 
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" placeholder="password" name="password">
        </div>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>

</html>