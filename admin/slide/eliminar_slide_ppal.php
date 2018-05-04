<?php

require_once('../../conexion.php');

$id = $_REQUEST['id'];

if (isset($_REQUEST['form']))
{
	if($_REQUEST['form']=="estado")
	{
		$estado = $_POST['estado'];
		$query = "UPDATE slide SET estado='$estado' WHERE id ='$id'";
		$resultado = $link->query($query);

		if($resultado){
			header("location: ../slide_ppal.php");
			echo "modificacion exitosa";
		}
		else
		{ 
		echo "no";
		}
	}
}
else{


$query = "DELETE FROM slide WHERE id ='$id'";
$resultado = $link->query($query);

if($resultado){
	header("location: ../slide_ppal.php");

}
else
{ 
echo "no";
}
}
?>