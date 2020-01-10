<?php
require "../basecss.php";
require "../dbconfig/config.php";
require "../logic/function.php";
global $db;
session_start();
if(!isset($_SESSION['id'])){
    header('Location: ../view-page/login.php');
}
    $id = $_SESSION['id'];
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
<script>

</script>
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
                        <h2 class="mb-0"><?php selectnama($id)?></h2>
                        <br>
                            <h4>
                                <?php selectalamat($id)?>
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
                        <form action="../logic/function.php" method="POST">
                        <div class="form-group">
                            <label for="diagnose1">Apakah Biji didapat dari Koperasi?</label>
                            <label ><input type="radio" name="diagnose1" value="ya">Ya</label>
                            <label ><input type="radio" name="diagnose1" value="tidak">Tidak</label>
                        </div>
                        <div class="form-group">
                            <label for="diagnose2">Apakah Biji sudah di rendam?</label>
                            <label ><input type="radio" name="diagnose2" value="ya">Ya</label>
                            <label ><input type="radio" name="diagnose2" value="tidak">Tidak</label>
                        </div>
                        <div class="form-group">
                            <label for="diagnose3">Apakah Biji sudah bersih?</label>
                            <label ><input type="radio" name="diagnose3" value="ya">Ya</label>
                            <label ><input type="radio" name="diagnose3" value="tidak">Tidak</label>
                        </div>
                        <div class="form-group">
                            <label for="diagnose3">Menggunakan Tanah Berhumus?</label>
                            <label ><input type="radio" name="diagnose4" value="ya">Ya</label>
                            <label ><input type="radio" name="diagnose4" value="tidak">Tidak</label>
                        </div>
                        <div class="form-group">
                            <label for="diagnose3">Menggunakan Tanah Kering?</label>
                            <label ><input type="radio" name="diagnose5" value="ya">Ya</label>
                            <label ><input type="radio" name="diagnose5" value="tidak">Tidak</label>
                        </div>
                        
                        <input type="submit" name="starts" value="Start" class="btn btn-success" data-toggle="modal" data-target="#myModal">
                        </form>
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
                    </div>
                </div>
                
            </div>
        </div>
        </div>
    </div>
</body>
</html>