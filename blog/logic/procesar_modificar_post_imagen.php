<?php

require_once('../../conexion.php');

$id = $_REQUEST['id'];
$nombre_imagen = $_FILES["imagen"]["name"];
$nombre_temporal = $_FILES["imagen"]["tmp_name"];
$tipo_archivo = $_FILES["imagen"]["type"];

$destino = "imagenes/".$nombre_imagen;

if($tipo_archivo == "image/jpeg" || $tipo_archivo == "image/jpg" || $tipo_archivo == "image/png" || $tipo_archivo == "image/gif"){
	move_uploaded_file($nombre_temporal, $destino);
	

	$query = "UPDATE post SET imagen_post='$nombre_imagen' WHERE id_post ='$id'";
	$resultado = $link->query($query);
	if($resultado){
	header("location: ../adminlogin/ver_post_blog.php");
	}
	else
	{ 
	echo "no";
	}
	}

else{
	echo "el archivo no es una imagen <br/>";
	exit();
	echo "<a href='agregar_post.php'>Volver atras</a>";
}




?>