<?php
    require "conexion.php";
    require "config.php";

    $fecha=$_POST["fecha"];
    $check = new conexion(DB_HOST,DB_USER,DB_PASS,DB_NAME,DB_CHARSET);

    $result = $check->getTotalLotList($fecha);
    if($result){
        while($row=mysqli_fetch_array($result)){
            $data[]=$row;
        }
        if($data!=null){
        print(json_encode($data));
        }
    }

    $check -> cerrar();
?>