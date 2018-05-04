<?php

require_once('../../conexion.php');

$id_comentario = $_POST['id_comentario'];
$id_post = $_POST['id_post'];



$query = "DELETE FROM comentarios_post WHERE id_comentario ='$id_comentario'";
$resultado = $link->query($query);

if($resultado){
	?>
	<table class="table table-striped"><thead><tr><th>Comentario</th><th>Email</th><th>Opción 1</th></tr></thead><?php $re=mysqli_query($link,"select * from comentarios_post where post_id = $id_post order by id_comentario desc")or die(); while ($f=mysqli_fetch_array($re)) { ?> <tbody> <tr> <td><?php echo $f['comentario'];?></td> <td><?php echo $f['email_usuario_comentario'];?></td> <td> <a id="eliminar" id_post="<?php echo $f['post_id'];  ?>" id_comentario="<?php echo $f['id_comentario']; ?>"  onclick="myFunction()");">Eliminar</a> </td> </tr> </tbody> <?php } ?> </table>

	<?php
	//header("location: ../../admin/comentarios.php?id=$id_post");
}
else
{ 
echo "no";
}
?>