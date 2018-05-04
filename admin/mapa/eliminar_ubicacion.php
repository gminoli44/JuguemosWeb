<?php 


require("../../conexion.php");

$id=$_REQUEST['id'];

$query = "DELETE FROM markers WHERE id ='$id'";
$resultado = $link->query($query);

if($resultado){
	header("location: ../vermapa.php");

}
else
{ 
echo "no";
}

?>