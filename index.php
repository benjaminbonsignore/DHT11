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

	<?php
	$baragraph_height = 161 + $json_data['temperature'] * 4;
	$baragraph_top = 315 + $json_data['humidite'] * 4;
	?>

	<div id="thermometer">
  		<div id="bargraph" style="height: <?php $baragraph_height ?>; top: <?php $baragraph_top ?>;"></div>
	</div>
</body>


