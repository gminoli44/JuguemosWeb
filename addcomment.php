<?php
require('conexion.php');

$name = strip_tags(utf8_decode($_POST['name']));
$comment = strip_tags(utf8_decode($_POST['comment']));

$sql = "INSERT INTO comments (name, text) VALUES ('$name', '$comment')";
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