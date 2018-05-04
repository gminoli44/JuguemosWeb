<!-- AGREGAR POST INICIO -->
<?php 

require_once('../../conexion.php');


$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$descripcion = $_POST['descripcion'];
$categoria = $_POST['categoria'];
$contenido = $_POST['contenido'];

$nombre_imagen = $_FILES["imagen"]["name"];
$nombre_temporal = $_FILES["imagen"]["tmp_name"];
$tipo_archivo = $_FILES["imagen"]["type"];

$destino = "imagenes/".$nombre_imagen;

if($tipo_archivo == "image/jpeg" || $tipo_archivo == "image/jpg" || $tipo_archivo == "image/png" || $tipo_archivo == "image/gif"){
	move_uploaded_file($nombre_temporal, $destino);
	$query = "INSERT INTO post(`autor_post`,`fecha_post`,`categoria_post`,`titulo_post`,`imagen_post`,`descripcion_post`,`contenido_completo_post`) VALUES('$autor', NOW(), '$categoria', '$titulo', '$nombre_imagen', '$descripcion', '$contenido')";
	$resultado = $link->query($query);
	if($resultado){
	header("location: index.php?created");
	}
	else
	{ 
	echo "no" .mysqli_error();
	}
	}

else{
	echo "el archivo no es una imagen <br/>";
	exit();
	echo "<a href='agregar_post.php'>Volver atras</a>";
}

?>

<!-- AGREGAR POST FIN -->

<!-- *********************************************************** -->

<!-- MODIFICAR POST INICIO -->
<?php

require_once('../../conexion.php');

$id = $_REQUEST['id'];
$autor = $_POST['autor'];
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$categoria = $_POST['categoria'];
$contenido = $_POST['contenido'];

	

	$query = "UPDATE post SET autor_post='$autor', fecha_post=NOW(), categoria_post='$categoria', titulo_post='$titulo', descripcion_post='$descripcion', contenido_completo_post='$contenido' WHERE id_post ='$id'";
	$resultado = $link->query($query);
	if($resultado){
	header("location: ../adminlogin/ver_post_blog.php");
	}
	
	

else{
	echo "el archivo no es una imagen <br/>";
	exit();
	echo "<a href='agregar_post.php'>Volver atras</a>";
}

?>
<!-- MODIFICAR POST FIN -->

<!-- *********************************************************** -->

<!-- ELIMINAR POST INICIO -->
<?php

require_once('../conexion.php');

$id = $_REQUEST['id'];
echo $id;


$query = "DELETE FROM post WHERE id_post ='$id'";
$resultado = $link->query($query);

if($resultado){
	header("location: ");

}
else
{ 
echo "no";
}
?>
<!-- ELIMINAR POST FIN -->



