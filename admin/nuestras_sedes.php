<!DOCTYPE html>
<html>
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

    <title>INSPINIA | Basic Form</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

  <?php include("includes/menu.php"); ?>

        
           
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                  <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Agregar Sede</h5>
                        </div>
                        <div class="ibox-content">
                            <form method="post" action="sedes/agregar_sede.php" class="form-horizontal">
                                <div class="form-group"><label class="col-sm-2 control-label">Nombre</label>
                                    <div class="col-sm-10"><input name="nombre" type="text" class="form-control"> 
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-primary" type="submit">Guardar</button>
                                    </div>
                                </div>
                                
                            </form>
                            <div id="ok"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="ibox float-e-margins">

                        <div class="ibox-title">
                            <h5>Ver Loterías</h5>
                        </div>

                        <div class="ibox-content">
                            <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Lotería </th>
                                    <th>Eliminar</th>
                                    </tr>
                            </thead>
                            <?php
                            require("../conexion.php");
                            $re=mysqli_query($link,"select * from nuestras_sedes")or die();
                            while ($f=mysqli_fetch_array($re)) {
                            ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $f['sedes'];?></td>
                                    
                                    <td><a href="sedes/eliminar_sede.php?id=<?php echo $f['id']; ?>">Eliminar</a></td>
                                </tr>
                            </tbody>
                            <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="pull-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> Juguemos &copy; 2017
            </div>
        </div>

        </div>
    


    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- iCheck -->

    <script src="js/plugins/iCheck/icheck.min.js"></script>
        
        <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function() {
    $("#ok").hide();

    $("#adminlogin").validate({
        rules: {
            nombre: { required: true, minlength: 3}
        },
        messages: {
            nombre: "Debe introducir un nombre valido.",
        },
        submitHandler: function(form){
            var dataString = 'nombre='+$('#nombre').val();;
            $.ajax({
                type: "POST",
                url:"sedes/agregar_sede.php",
                data: $("#adminlogin").serialize(),
                success: function(response){
                   // $('#ok').show().fadeIn(2000);
                    $("#ok").html(response);
                    $("#ok").show().delay(4000).fadeOut();
                    

                   // $('#loginemp').slideToggle('slow');
                  //  $('#loginemp').show().fadeIn(1000);
                }
            });
        }
    });
});
    </script>

    <script>
        $(document).ready(function() {
    $("#okl").hide();

    $("#resultados").validate({
        rules: {
            resultado: { required: true, minlength: 3}
        },
        messages: {
            resultado: "Debe introducir un resultado valido.",
        },
        submitHandler: function(form){
            var dataString = 'loteria='+$('#loteria').val()+'&resultado='+$('#resultado').val()+'fecha='+$('#fecha').val();
            $.ajax({
                type: "POST",
                url:"loterias/create2.php",
                data: $("#resultados").serialize(),
                success: function(response){
                   // $('#ok').show().fadeIn(2000);
                    $("#okk").html(response);
                    $("#okk").show().delay(4000).fadeOut();
                    

                   // $('#loginemp').slideToggle('slow');
                  //  $('#loginemp').show().fadeIn(1000);
                }
            });
        }
    });
});
    </script>
</body>


</html>
