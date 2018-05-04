<?php

require_once('../../conexion.php');






$titulo = $_POST['nombre'];

$nombre_imagen = $_FILES["imagen"]["name"];
$nombre_temporal = $_FILES["imagen"]["tmp_name"];
$tipo_archivo = $_FILES["imagen"]["type"];
$url = $_POST['url'];

$destino = "imagenes/".$nombre_imagen;

if($tipo_archivo == "image/jpeg" || $tipo_archivo == "image/jpg" || $tipo_archivo == "image/png" || $tipo_archivo == "image/gif"){
	move_uploaded_file($nombre_temporal, $destino);
	$query = "INSERT INTO slide(`nombre`,`Imagen`,`url`,`estado`) VALUES('$titulo', '$nombre_imagen', '$url', TRUE)";
	$resultado = $link->query($query);
	if($resultado){
	header("location: ../slide_ppal.php");
	}
	else
	{ 
	echo "no" .mysqli_error();
	}
	}

else{
	echo "el archivo no es una imagen <br/>";
	exit();
	echo "<a href='../slide_new.php'>Volver atras</a>";
}




?>