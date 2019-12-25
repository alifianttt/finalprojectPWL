<?php
include "dbconfig/config.php";

$data = array();
$liststat = "SELECT COUNT(user_table.alamat) as address, diagnose_table.hasil as diagnose FROM user_table join diagnose_table on user_table.id_user = diagnose_table.id_user GROUP BY alamat ORDER by alamat";
$sql3 = mysqli_query($db, $liststat);

foreach ($sql3 as $row) {
	$data[] = $row;
}

echo json_encode($data);
?>