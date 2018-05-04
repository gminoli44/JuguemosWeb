<!DOCTYPE html>
<html>
<?php require("../conexion.php"); 
session_start();
if(!isset($_SESSION["USERNAME"])){
    header("location: login.php");
}else if($_SESSION["ID"]==2){
    header("location: logout.php");
}
$id=$_REQUEST['id'];
?>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Static Tables</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

   <?php include("includes/menu.php"); ?>

            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Slide Principal</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Admin</a>
                        </li>
                        <li class="active">
                            <strong>Slide Principal</strong>
                        </li>
                    </ol>
                </div>
            </div>

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Editar datos Slide aliado</h5>
                        </div>
                        <div class="ibox-content">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>URL </th>
                                        <th>Texto Convenios </th>
                                    </tr>
                                </thead>
                    
                                <tbody>
                                <tr>
                                <?php
                                $re=mysqli_query($link,"select * from slide_aliados where id = '$id' ")or die();
                                while ($f=mysqli_fetch_array($re)) {
                                    $imagen=$f['Imagen'];
                                ?>
                                <form action="slide/slide_editar_aliados.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
                                    
                                    <td><input type="text" name="nombre" value="<?php echo $f['Nombre']; ?>"></td>
                                    <td><input type="text" name="url" value="<?php echo $f['url']; ?>"></td>
                                    <td><textarea rows="10" cols="50" name="url" ><?php echo $f['convenio']; ?></textarea></td>
                                    <td><input type="submit" class="btn btn-primary" value="Aceptar"></td>
                                </form> 
                                <?php } ?>
                                </tr>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Editar Imagen</h5>
                        </div>
                        <div class="ibox-content">
                            <form action="slide/modificar_imagen_slide_aliados.php?id=<?php echo $id?>" method="POST" enctype="multipart/form-data">
                            <img width="20%" src="<?php echo "slide/imagenes/".$imagen.""?>" width='370'><br><br><br>
                            <input type="file" name="imagen" id="imagen"><br>
                            <br><input type="submit" class="btn btn-success" value="Modificar Imagen">
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            
            <div>
                <strong>Copyright Juguemos</strong> 2017
            </div>
        </div>

        </div>
        </div>



    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>

    <!-- Peity -->
    <script src="js/demo/peity-demo.js"></script>

    <script>
        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>

</body>

</html>
