<?php

require_once('../../conexion.php');

$id = $_REQUEST['id'];
echo $id;


$query = "DELETE FROM post WHERE id_post ='$id'";
$resultado = $link->query($query);

if($resultado){
	header("location: ../../admin/blog_view_post.php");

}
else
{ 
echo "no";
}
?>