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
                    <h2>Post publicados</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Admin</a>
                        </li>
                        <li class="active">
                            <strong>Post publicados</strong>
                        </li>
                    </ol>
                </div>
            </div>

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Ver todos  los post</h5>
                            <a href="blog_new_post.php"><button style="float: right;">Nuevo Post</button></a>
                        </div>
                        <div class="ibox-content">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Imagen</th>
                                    <th>Titulo </th>
                                    <th>Opción 1</th>
                                    <th>Opción 2</th>
                                    <th>Opción 3</th>
                                </tr>
                                </thead>
                    <?php
                    $re=mysqli_query($link,"select * from post order by id_post desc")or die();
                    while ($f=mysqli_fetch_array($re)) {
                    ?>
                        <tbody>
                            <tr>
                                <td><img style="margin-right: -400px" width="90px%" height="80px" src="../blog/logic/imagenes/<?php echo $f['imagen_post']; ?>"></td>
                                <td><?php echo $f['titulo_post'];?></td> 
                                <td><a href="blog_update_post.php?id=<?php echo $f['id_post']; ?>">Modificar</a></td>
                                <td><a href="../blog/logic/eliminar_post.php?id=<?php echo $f['id_post'];?>" onclick="return confirm('Esta seguro que desea eliminar este post?');">Eliminar</a>
                                </td>
                                <td><a href="comentarios.php?id=<?php echo $f['id_post'];?>">Comentarios</a>
                                </td>
                            </tr>
                        </tbody>
                        <?php } ?>
                        </table>
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
    $(document).ready(function() {
    $("#ok").hide();

    $("#formidadmin").validate({
        rules: {
            username: { required: true, minlength: 6},
            password: { required: true, minlength: 3},
            email: { required:true, email: true},
            codigo: {required:true, minlength: 6}
            
        },
        messages: {
            username: "Debe introducir su nombre de usuario.",
            lastname: "Debe especificar una contraseña.",
            email : "Debe introducir un email válido.",
            email : "Debe introducir un email válido.",
            codigo : "Debe introducir un código válido.",
            
        },
        submitHandler: function(form){
            var dataString = 'username='+$('#username').val()+'&password='+$('#password').val()+'&email='+$('#email').val()+'&codigo='+$('#codigo').val()+'&form=admin';
            $.ajax({
                type: "POST",
                url:"datos.php",
                data: dataString,
                success: function(response){
                    $("#ok").html(response);
                    $('#ok').slideToggle('slow');
                    $('#formidadmin').slideToggle('slow');
                    $('#ok').show().fadeIn(1000).delay(3000).fadeOut(1000);
                    $('#formidadmin').show().delay(4000).fadeIn(1000);

                        }
                    });
                }
            });
        });
    </script>

</body>

</html>
