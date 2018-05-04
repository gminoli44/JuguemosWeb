<!DOCTYPE html>
<html>
<?php require("../conexion.php"); 
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

    <title>Mapa Admin</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

  <?php include("includes/menu.php"); 

  ?>



           
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">

                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Mapa Admin - Agrega ubicaciones de Juguemos REDCA</h5>
                        </div>
                        <div class="ibox-content">
                        
                        <h3>My Google Maps Demo</h3>
    <div style="width: 100%; height: 300px; margin: 0 auto;" id="map"></div>
    <div>
        <br>
    <?php 

    if(isset($_REQUEST['name']))
  {
    echo "Esta modificando la ubicación de".$_REQUEST['name']."<br><br>";
  }

    ?>  
    <label for="name">Nombre del Punto</label><input type="text" id="name">
    <button onclick="addMarker();">Agregar Punto</button></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
        var lat;
        var lng;
        var marker;
      function initMap() {
        // Posicion donde aparece el mapa  
        var popayan = {lat: 2.448132, lng:-76.6169869};
        //Crea un nuevo mapa
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: popayan
        });
          
        /*var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });*/
          
        marker = new google.maps.Marker({
          position: {lat: 2.448132, lng:-76.6169869},
          draggable: true,
          map: map,         //icon:"http://localhost/juguemos/images/location-icon-png-4250.png"
        });
        }
        function addMarker(){  
            var lat = marker.getPosition().lat();
            var lng = marker.getPosition().lng();
            var dataString = 'name='+$('#name').val()+'&lat='+lat+'&lng='+lng;
            $.ajax({
                type: "POST",
                url:"guardarmarker.php",
                data: dataString,
                success: function(response){
                  //  $("#formidadmin")[0].reset();
                    alert(response);
                    window.location.replace("vermapa.php");
                }
            });
        }
        
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeTdhn103KKecYVGF6SxdXXO-cSQOymuw&callback=initMap">
    </script>          
                                    
                            <div id="ok"></div>
                        </div>
                        </div>
                    </div>
                </div>
    <!-- VER UBICACIONES -->


         <!-- VER UBICACIONES FIN -->               

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
