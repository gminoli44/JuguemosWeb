<?php

require("../../conexion.php");
$id=$_REQUEST['id'];


$query = "DELETE FROM nuestras_sedes WHERE id ='$id'";
$resultado = $link->query($query);

if($resultado){

	
	header("location: ../nuestras_sedes.php");

}
else
{ 
echo "no".mysqli_error($link);
}

?>