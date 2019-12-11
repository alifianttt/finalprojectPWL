<?php
$loc = "Sleman";
$endpoint = "https://openweathermap.org/data/2.5/weather?q=".$loc.",id&appid=b6907d289e10d714a6e88b30761fae22";
$json = file_get_contents($endpoint);

$data = json_decode($json,true);
$weather = $data['weather'][0]['description'];
$icon = $data['weather'][0]['icon'];
$temp = $data['main']['temp'];
$image = "http://openweathermap.org/img/w/".$icon.".png";

?>