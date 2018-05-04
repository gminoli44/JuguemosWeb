<?php

require_once('../../conexion.php');

$id = $_REQUEST['id'];


	
		$estado = $_POST['estado'];
		$query = "UPDATE slide_aliados SET estado_convenio='$estado' WHERE id ='$id'";
		$resultado = $link->query($query);

		if($resultado){
			header("location: ../convenios.php");
			echo "modificacion exitosa";
		}
		else
		{ 
		echo "no";
		}
	

?>