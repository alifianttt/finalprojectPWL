<?php
require "../dbconfig/config.php";

function deletedata($id1){
    global $db;
    $del= "DELETE FROM list_kelayakan where id_kelayakan='$id1'";
    $sql = mysqli_query($db, $del);
    header('Location: ../view-page/admin.php');
}

$id = $_GET['del'];
deletedata($id);
?>