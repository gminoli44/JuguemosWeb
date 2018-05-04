<?php

require_once('../../conexion.php');






$titulo = $_POST['nombre'];

$nombre_imagen = $_FILES["imagen"]["name"];
$nombre_temporal = $_FILES["imagen"]["tmp_name"];
$tipo_archivo = $_FILES["imagen"]["type"];
$url = $_POST['url'];
if($_POST['convenio']!=null){
$convenio = $_POST['convenio'];
}else{
	$convenio="";
}

$destino = "imagenes/".$nombre_imagen;

if($tipo_archivo == "image/jpeg" || $tipo_archivo == "image/jpg" || $tipo_archivo == "image/png" || $tipo_archivo == "image/gif"){
	move_uploaded_file($nombre_temporal, $destino);
	$query = "INSERT INTO slide_aliados(`Nombre`,`estado`,`Imagen`,`url`,`convenio`,`estado_convenio`) VALUES('$titulo', TRUE,'$nombre_imagen','$url','$convenio',TRUE)";
	$resultado = $link->query($query);
	if($resultado){
	header("location: ../slide.php");
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