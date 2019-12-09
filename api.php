<?php
$loc = "bantul";
$endpoint = "http://api.openweathermap.org/data/2.5/weather?q=".$loc."&appid=5ca074667677f6174b23baf81b841128";
$json = file_get_contents($endpoint);

$data = json_decode($json,true);
$weather = $data['weather'][0]['description'];
$icon = $data['weather'][0]['icon'];
$temp = $data['main']['temp'];
$image = "http://openweathermap.org/img/w/".$icon.".png";

?>