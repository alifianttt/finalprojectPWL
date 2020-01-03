<?php
require "../dbconfig/config.php";

function deletehistory($id1){
    global $db;
    $del= "DELETE FROM diagnose_table where id_diagnosa='$id1'";
    $sql = mysqli_query($db, $del);
    header('Location: ../view-page/Profile.php');
}
$id_diag = $_GET['del'];
deletehistory($id_diag);
?>