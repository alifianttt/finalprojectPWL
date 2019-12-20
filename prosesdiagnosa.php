<?php 
    if(isset($_POST['starts'])){
        $diag1=$_POST['diagnose1'];
        $diag2=$_POST['diagnose2'];
        $diag3=$_POST['diagnose3'];
        if($diag1=='ya' && $diag2=='ya' && $diag3=='ya'){
            header('Location: result.php');
        }
    }
?>