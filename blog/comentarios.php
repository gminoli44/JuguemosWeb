<?php

require_once('../conexion.php');


$name = $_POST['name'];
$comment = $_POST['comment'];
$id = $_POST['id_post'];
$email = $_POST['email'];

$sql = "INSERT INTO comentarios_post (post_id, usuario_comentario, email_usuario_comentario, comentario, fecha) VALUES ('$id','$name', '$email', '$comment', now())";
if(mysqli_query($link, $sql)){
	?>
	<div class="alert alert-success">
    	Lotería agredada con éxito
	</div>
	<?php
    
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


?>



?>


