<?php

require("../../conexion.php");
$id=$_REQUEST['id'];
$id_lot=$_REQUEST['id_lot'];

$query = "DELETE FROM resultados_loterias WHERE id ='$id'";
$resultado = $link->query($query);

if($resultado){

	
	header("location: ../ver_resultados.php?id_lot=$id_lot");

}
else
{ 
echo "no".mysqli_error($link);
}

?>