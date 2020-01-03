<?php
require "dbconfig/config.php";
require_once('jpgraph/src/jpgraph.php');
require_once('jpgraph/src/jpgraph_bar.php');
require_once('jpgraph/src/jpgraph_line.php');
$data = array();
$liststat = "SELECT COUNT(diagnose_table.hasil) as diagnose, user_table.alamat as addr FROM user_table join diagnose_table on user_table.id_user = diagnose_table.id_user GROUP BY alamat ";
$sql3 = mysqli_query($db, $liststat);

while($res = mysqli_fetch_array($sql3)){
	$data['x'][]=$res['addr'];
	$data['y'][]=$res['diagnose'];
}
    $addr = mysqli_fetch_array($sql3);
	$grap = new Graph(250,250);
    $grap->SetScale('textlin');
    $grap->xaxis->SetTickLabels($addr['addr']);

    $lineplot = new LinePlot($data['y']);
    $lineplot -> SetColor('Blue');
    $bplot = new BarPlot($data['y']);
    $bplot -> SetShadow('black',3,3,true);
    $bplot -> Set3D(6,5,true);
    $grap->Add($lineplot);
    $grap->Add($bplot);
    
    $grap->Stroke();
?>