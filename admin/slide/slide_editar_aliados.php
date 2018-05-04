<?php

require_once('../../conexion.php');

$id = $_REQUEST['id'];
$nombre = $_POST['nombre'];
$url = $_POST['url'];

    

    $query = "UPDATE slide_aliados SET Nombre='$nombre', url='$url' WHERE id ='$id'";
    $resultado = $link->query($query);
    if($resultado){
    header("location: ../../admin/slide.php");
    }

else{
    echo "No";
    exit();
    echo "<a href='../slide.php'>Volver atras</a>";
}




?>