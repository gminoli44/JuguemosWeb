<?php

require_once('../../conexion.php');

$id = $_REQUEST['id'];
$autor = $_POST['autor'];
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$categoria = $_POST['categoria'];
$contenido = $_POST['contenido'];

	

	$query = "UPDATE post SET autor_post='$autor', fecha_post=NOW(), categoria_post='$categoria', titulo_post='$titulo', descripcion_post='$descripcion', contenido_completo_post='$contenido' WHERE id_post ='$id'";
	$resultado = $link->query($query);
	if($resultado){
	header("location: ../../admin/blog_view_post.php");
	}

else{
	echo "No";
	exit();
	echo "<a href='agregar_post.php'>Volver atras</a>";
}




?>