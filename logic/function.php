<?php 
include "dbconfig/config.php";
function add($hasil, $id, $time){
    global $db;
    $sql = "INSERT INTO diagnose_table (hasil, id_user, waktu_diagnosa ) VALUE ('$hasil', '$id', '$time')";
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
    function listkode(){
        global $db;
        $no = 0;
        $select = "SELECT * FROM list_kelayakan ";
        $sql = mysqli_query($db, $select);
        while($row = mysqli_fetch_array($sql)) {         
            echo "<tr>";
            echo "<td>".++$no."</td>";
            echo "<td>".$row['Kode']."</td>";
            echo "<td>".$row['hasil']."</td>";
            echo "<td><a href=\""."delete.php?del=".$row['id_kelayakan']."\" class=\"btn btn-danger\" onclick=\"javascript: return confirm('Anda yakin hapus?')\">Delete</a></td>";    
        }
    }

    function history(){
        global $db;
        $no = 0;
        $select = "SELECT * FROM diagnose_table";
        $sql = mysqli_query($db, $select);
        while($row = mysqli_fetch_array($sql)) {         
            echo "<tr>";
            echo "<td>"."Diagnosa Ke ".++$no."</td>";
            echo "<td>".$row['hasil']."</td>";
            echo "<td>".$row['waktu_diagnosa']."</td>";
        } 
    }
    function selectuser($id){
        global $db;
        $select = "SELECT * FROM user_table where id_user='$id'";
        $sql = mysqli_query($db, $select);
        $row = mysqli_fetch_array($sql);
        echo $row['nama'];
    }
?>