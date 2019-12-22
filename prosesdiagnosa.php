<?php 
include "config.php";
function add($hasil, $id){
    global $db;
    $sql = "INSERT INTO diagnose_table (hasil, id_user) VALUE ('$hasil', '$id')";
    $query = mysqli_query($db, $sql);
}    
    if(isset($_POST['starts'])){
        $diag1=$_POST['diagnose1'];
        $diag2=$_POST['diagnose2'];
        $diag3=$_POST['diagnose3'];
        if($diag1=='ya' && $diag2=='ya' && $diag3=='ya'){
            header('Location: result.php?res=layak');
        } else if ($diag1=='ya' && $diag2=='tidak' && $diag3=='ya'){
            header('Location: result.php?res=sedang1');
        } else if ($diag1=='tidak' && $diag2=='tidak' && $diag3=='ya'){
            header('Location: result.php?res=sedang2');
        } else if ($diag1=='ya' && $diag2=='ya' && $diag3=='tidak'){
            header('Location: result.php?res=sedang3');
        } else {
            header('Location: result.php?res=tidak');
        }
    }
    
?>