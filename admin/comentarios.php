<!DOCTYPE html>
<html>
<?php require("../conexion.php"); ?>
<?php 
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

    <title>Comentarios</title>

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
                    <h2>Comentarios</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Admin</a>
                        </li>
                        <li class="active">
                            <strong>Comentarios publicados</strong>
                        </li>
                    </ol>
                </div>
            </div>

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                        <?php
                        $re=mysqli_query($link,"select * from post where id_post = $id ")or die();
                        while ($post=mysqli_fetch_array($re)) {
                        ?>
                            <h5>Comentarios publicados en: "<?php echo $post['titulo_post']; ?>"</h5>
                        <?php } ?>
                            
                        </div>
                        <div class="ibox-content">
                            <div id="tabla_comment" class="table-responsive">
                        
                        <div id="ok"></div>
                    </div>
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

    
<script>
$(document).ready(function(){

                    $("#tabla_comment").html('<table class="table table-striped"><thead><tr><th>Comentario</th><th>Email</th><th>Opción 1</th></tr></thead><?php $re=mysqli_query($link,"select * from comentarios_post where post_id = $id order by id_comentario desc")or die(); while ($f=mysqli_fetch_array($re)) { ?> <tbody> <tr> <td><?php echo $f['comentario'];?></td><td><?php echo $f['email_usuario_comentario'];?></td>  <td> <a id="eliminar" id_post="<?php echo $f['post_id'];  ?>" id_comentario="<?php echo $f['id_comentario']; ?>"  onclick="myFunction()");">Eliminar</a> </td> </tr> </tbody> <?php } ?> </table>');
                });
    function myFunction() {
    var x = document.getElementById("eliminar").getAttribute("id_post"); 
    var y = document.getElementById("eliminar").getAttribute("id_comentario"); 
    var datastring="id_post="+ x + "&id_comentario=" + y;
    
    $.ajax({
                
                type: "POST",
                url:"../blog/logic/eliminar_comentarios.php",
                data: datastring,
                success: function(response){
                    $("#tabla_comment").html(response);
                        }
                    });
}



</script>

</body>

</html>
