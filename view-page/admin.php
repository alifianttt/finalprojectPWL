<?php
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

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Profile</title>
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet">


    <link href="../css/resume.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span class="d-block d-lg-none">Ananda Emka Oktora</span>
            <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="../img/my foto.jpg" alt="">
      </span>
        </a>
        <a class="nav-link js-scroll-trigger" href="../view-page/login.php?logout='1'" style="color:white">Logout</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#experience">Diagnosa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#education">List Diagnosa</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid p-0">

        <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
            <div class="w-100">
                <h1 class="mb-0"><?php echo $res['nama'];?>
                </h1>
                <div class="subheading mb-5">
                    Jalan Cempaka 1 no 15 Pohruboh sleman yogyakarta
                </div>
                <p class="lead mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                    book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and
                    more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <p><a href="../view-page/edit.php?id=<?php echo $id;?>" class="btn btn-success">Edit</a> </p>
                <div class="social-icons">
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    
                </div>
            </div>
        </section>

        <hr class="m-0">

        <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
            <div class="w-100">
                <h2 class="mb-5">Daftar User dan Statistik</h2>
                
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                   
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
                <img src="../data.php" alt="">
            </div>
            
        </section>
        
        <hr class="m-0">

        <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="education">
            <div class="w-100">
                <h2 class="mb-5">List Diagnosa</h2>
                
                <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kode</th>
                            <th scope="col">Hasil</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php  
                            listkode();
                        ?>
                        </tbody>
                        
                    </table>

            </div>
        </section>
    </div>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../js/resume.min.js"></script>
</body>

</html>