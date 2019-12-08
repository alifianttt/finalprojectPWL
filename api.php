<?php
include "basecss.php";
$json = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q=Palembang&appid=5ca074667677f6174b23baf81b841128');

$data = json_decode($json,true);
$weather = $data['weather'][0]['description'];
$icon = $data['weather'][0]['icon'];
$temp = $data['main']['temp'];
$image = "http://openweathermap.org/img/w/".$icon.".png";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <p>Cuaca Saat Ini <?php echo $weather;?></p>
        <img src="<?php echo $image;?>" alt="">
        <p>Suhu Saat ini <?php echo $temp;?></p>
</body>
</html>