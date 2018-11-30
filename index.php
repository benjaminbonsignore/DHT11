<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
	<h1>Température</h1>

	<?php
	$json = file_get_contents('data.txt');
	$json_data = json_decode($json,true);
	
	echo $json;
	?>

	<br><br>

	<?php
	echo "Il fait ".$json_data['temperature']."°C avec ".$json_data['humidite']."% d'humidité.";
	?>	

	<br><br>

	<?php
	echo "Le ".date("d/m/Y")." à ".date("H:i:s");
	?>

	<br><br>

	<img src="img/thermometer.jpg">
</body>


