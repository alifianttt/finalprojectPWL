<?php
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

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Profile</title>


    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
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
                    <a class="nav-link js-scroll-trigger" href="#about">Profile User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#experience">Diagnose</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#education">History</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid p-0">

        <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
            <div class="w-100">
                <h1 class="mb-0"><?php selectnama($id)?>
                </h1>
                <div class="subheading mb-5">
                        <?php selectalamat($id)?>
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
                <h2 class="mb-5">Diagnosa</h2>
                <form action="../logic/function.php" method="POST">
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="resume-content">
                        <h3 class="mb-0">Diagnosa Biji</h3>
                        <div class="form-group">
                            <label for="diagnose1">Apakah Biji berlubang?</label>
                            <label ><input type="radio" name="diagnose1" value="ya">Ya</label>
                            <label ><input type="radio" name="diagnose1" value="tidak">Tidak</label>
                        </div>
                        <div class="form-group">
                            <label for="diagnose2">Apakah Biji Normal?</label>
                            <label ><input type="radio" name="diagnose2" value="ya">Ya</label>
                            <label ><input type="radio" name="diagnose2" value="tidak">Tidak</label>
                        </div>
                        <div class="form-group">
                            <label for="diagnose3">Apakah Biji pucat?</label>
                            <label ><input type="radio" name="diagnose3" value="ya">Ya</label>
                            <label ><input type="radio" name="diagnose3" value="tidak">Tidak</label>
                        </div>
                        
                        <input type="submit" name="starts" value="Start" class="btn btn-success" data-toggle="modal" data-target="#myModal">
                        <!--<button class="btn btn-success" data-target="#myModal">Star</button>-->
                    </div>
                </div>
                </form>
            </div>
            
            </div>
  
            
        </section>
        
        <hr class="m-0">

        <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="education">
            <div class="w-100">
                <h2 class="mb-5">History</h2>

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
        </section>
    </div>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../js/resume.min.js"></script>
</body>

</html>