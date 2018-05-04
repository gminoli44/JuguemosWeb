<?php

require_once('../../conexion.php');


$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$descripcion = $_POST['descripcion'];
$categoria = $_POST['categoria'];
$contenido = $_POST['contenido'];

$nombre_imagen = $_FILES["imagen"]["name"];
$nombre_temporal = $_FILES["imagen"]["tmp_name"];
$tipo_archivo = $_FILES["imagen"]["type"];

$destino = "imagenes/".$nombre_imagen;

if($tipo_archivo == "image/jpeg" || $tipo_archivo == "image/jpg" || $tipo_archivo == "image/png" || $tipo_archivo == "image/gif"){
	move_uploaded_file($nombre_temporal, $destino);
	$query = "INSERT INTO post(`autor_post`,`fecha_post`,`categoria_post`,`titulo_post`,`imagen_post`,`descripcion_post`,`contenido_completo_post`) VALUES('$autor', NOW(), '$categoria', '$titulo', '$nombre_imagen', '$descripcion', '$contenido')";
	$resultado = $link->query($query);
	if($resultado){
	header("location: ../../admin/blog_view_post.php");
	}
	else
	{ 
	echo "no" .mysqli_error();
	}
	}

else{
	echo "el archivo no es una imagen <br/>";
	echo "<a href='../../admin/blog_new_post.php'>Volver atras</a>";
	exit();
	
}




?>