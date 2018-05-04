<?php

require("../../conexion.php");
$id=$_REQUEST['id'];


$query = "DELETE FROM loterias WHERE id ='$id'";
$resultado = $link->query($query);

if($resultado){

	
	header("location: ../agregar_resultados.php");

}
else
{ 
echo "no".mysqli_error($link);
}

?>