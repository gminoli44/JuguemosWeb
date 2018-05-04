<?php

require_once('../../conexion.php');

$id = $_REQUEST['id'];
$nombre = $_POST['nombre'];
$url = $_POST['url'];

	

	$query = "UPDATE slide SET nombre='$nombre', url='$url' WHERE id ='$id'";
	$resultado = $link->query($query);
	if($resultado){
	header("location: ../../admin/slide_ppal.php");
	}

else{
	echo "No";
	exit();
	echo "<a href='../slide_ppal.php'>Volver atras</a>";
}




?>