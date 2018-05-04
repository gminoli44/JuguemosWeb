<!DOCTYPE html>
<html>
<?php require("../conexion.php"); 
session_start();
if(!isset($_SESSION["USERNAME"])){
    header("location: login.php");
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
                            <h5>Ver Resultados</h5>
                        </div>
                        <div class="ibox-content">
                        <h4>Elegir loteria</h4>
                        <!-- Elegir loterias START -->
                        <div class="col-sm-10">
                            <form method="post" id="getresult">
                                <select class="form-control m-b" name="loteria">
                                <?php
                                $re=mysqli_query($link,"select * from loterias")or die();
                                while ($loteria=mysqli_fetch_array($re)) {
                                ?>
                                <option value="<?php echo $loteria['id']; ?>"><?php echo $loteria['nombre']; ?>
                                </option>
                                <?php } ?>   
                                </select>                                    
                                </div>    
                            <input type="submit" name="" value="Consultar"><br><br>
                            <div class="hr-line-dashed"></div>
                            </form>  
                            <form method="post" id="getresultfecha">
                            <input type="date" style="width: 500px" class="form-control m-b" name="fecha">
                            <input type="submit" name="" value="Consultar"><br><br>
                            <div class="hr-line-dashed"></div>
                            </form>            
                                    
                            <div id="ok"></div>
                        </div>
                        </div>
                    </div>
                </div>
                  
            </div>
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

    $("#getresult").validate({
        
        messages: {
            loteria: "porfavor elegir una.",
        },
        submitHandler: function(form){
            var dataString = 'loteria='+$('#loteria').val();
            $.ajax({
                type: "POST",
                url:"loterias/consulta.php",
                data: $("#getresult").serialize(),
                success: function(response){
                   // $('#ok').show().fadeIn(2000);
                    $("#ok").html(response);
                    $("#ok").show();
                    

                   // $('#loginemp').slideToggle('slow');
                  //  $('#loginemp').show().fadeIn(1000);
                }
            });
        }
    });
});

    $(document).ready(function() {
    $("#ok").hide();

    $("#getresultfecha").validate({
        
        messages: {
            loteria: "porfavor elegir una.",
        },
        submitHandler: function(form){
            var dataString = 'fecha='+$('#fecha').val();
            $.ajax({
                type: "POST",
                url:"loterias/consulta2.php",
                data: $("#getresultfecha").serialize(),
                success: function(response){
                   // $('#ok').show().fadeIn(2000);
                    $("#ok").html(response);
                    $("#ok").show();
                    

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
