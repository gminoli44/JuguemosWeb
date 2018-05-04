<?php
require("../conexion.php");

$name = $_POST["name"];
$lat = $_POST["lat"];
$lng = $_POST["lng"];

// Select all the rows in the markers table
$query = "INSERT INTO markers VALUES ('null', '$name','$lat','$lng')";
$result = mysqli_query($link, $query);
if (!$result) {
	echo "Error";
 die('Invalid query: ' . mysqli_error($link));
}else{
	echo "Ubicación Agregada con éxito";
	
}


?>