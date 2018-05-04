<?php

require_once('../../conexion.php');

$id = $_REQUEST['id'];

if (isset($_REQUEST['form']))
{
	if($_REQUEST['form']=="estado")
	{
		$estado = $_POST['estado'];
		$query = "UPDATE slide_aliados SET estado='$estado' WHERE id ='$id'";
		$resultado = $link->query($query);

		if($resultado){
			header("location: ../slide.php");
			echo "modificacion exitosa";
		}
		else
		{ 
		echo "no";
		}
	}
}
else{


$query = "DELETE FROM slide_aliados WHERE id ='$id'";
$resultado = $link->query($query);

if($resultado){
	header("location: ../slide.php");

}
else
{ 
echo "no";
}
}
?>