<?php // content="text/plain; charset=utf-8"
include "dbconfig/config.php";
require_once ('jpgraph/src/jpgraph.php');
require_once ('jpgraph/src/jpgraph_bar.php');
 
$datastatistik = array();
$hasil = array();
$liststat = "SELECT COUNT(user_table.alamat) as address, diagnose_table.hasil as diagnose FROM user_table join diagnose_table on user_table.id_user = diagnose_table.id_user GROUP BY alamat";
$sql3 = mysqli_query($db, $liststat);
while($stat = mysqli_fetch_array($sql3)){
    array_push($datastatistik, $stat['address']);
    array_push($hasil, $stat['diagnose']);
}
// Some data

foreach($datastatistik as $product){
    echo "<pre>";
    print_r($product);
    echo "</pre>";
}
$graph = new Graph(350,220,'auto');
$graph->SetScale("textlin");

//$theme_class="DefaultTheme";
//$graph->SetTheme(new $theme_class());

// set major and minor tick positions manually
$graph->yaxis->SetTickPositions(array(0,10,20,30,40,50), array(5,15,25,35,45));
$graph->SetBox(false);

//$graph->ygrid->SetColor('gray');
$graph->ygrid->SetFill(false);
$graph->xaxis->SetTickLabels($hasil);
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);

// Create the bar plots
$b1plot = new BarPlot($datastatistik);

// ...and add it to the graPH
$graph->Add($b1plot);


$b1plot->SetColor("white");
$b1plot->SetFillGradient("#4B0082","white",GRAD_LEFT_REFLECTION);
$b1plot->SetWidth(45);
$graph->title->Set("Bar Gradient(Left reflection)");

// Display the graph
$graph->Stroke();
?>