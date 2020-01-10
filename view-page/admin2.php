<?php
require "../basecss.php";
require "../dbconfig/config.php";
require "../logic/function.php";
global $db;
session_start();
$datastatistik = array();
if(!isset($_SESSION['id'])){
    header('Location: ../view-page/login.php');
}
    //select admin
    $id = $_SESSION['id'];
    $select = "SELECT * from admin_table where id_admin='$id'"; 
    $admin = mysqli_query($db, $select);
    $res = mysqli_fetch_array($admin);  
    //join table
    $list = "SELECT user_table.nama, user_table.alamat as address, diagnose_table.hasil as diagnose FROM user_table join diagnose_table on user_table.id_user = diagnose_table.id_user";    
    $sql2 = mysqli_query($db, $list);
    //getstatistik
    $no=0;
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
        <div class="col-2" style="background:green;height:100vh;display:flex;align-items:center;justify-content:center; font-size: 20px;">
            <div class="nav flex-column nav-pills bg-nav" id="v-pills-tab" role="tablist" aria-orientation="vertical" >
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true" style="color:white; background:transparent">Home</a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false" style="color:white; background:transparent">Profile</a>
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false" style="color:white; background:transparent">Messages</a>
                <a class="nav-link js-scroll-trigger" href="../view-page/login.php?logout='1'" style="color:white">Logout</a>
            </div>
        </div>
        <div class="col-9">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <div class="container">
                        <h1>Selamat Datang</h1>
                        <h2 class="mb-0"><?php echo $res['nama'];?></h2>
                        <br>
                            <h4>
                                
                            </h4>
                        <p class="lead mb-5">
                            Selamat datang di web aplikasi simulasi sistem pakar untuk menentukan benih yang akan anda tanam 
                        </p>
                            <p><a href="../view-page/edit.php?id=<?php echo $id;?>" class="btn btn-success">Edit</a> </p>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="container">
                        <h2>Diagnosa</h2>
                        <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">id</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Hasil</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php  
                        while($row = mysqli_fetch_array($sql2)) {         
                            echo "<tr>";
                            echo "<td>".++$no."</td>";
                            echo "<td>".$row['nama']."</td>";
                            echo "<td>".$row['address']."</td>";
                            echo "<td>".$row['diagnose']."</td>";    
                        }
                        ?>
                        </tbody>
                    </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                    <div class="container">
                        <h2>History</h2>
                            <table class="table table-striped">
                            <thead>
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Hasil</th>
                                <th scope="col">Waktu</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php  
                                history($id);
                            ?>
                            </tbody>
                            </table>
                            <img src="../data.php" alt="">
                    </div>
                </div>
                
            </div>
        </div>
        </div>
    </div>
</body>
</html>