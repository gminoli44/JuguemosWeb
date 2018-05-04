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

  <?php include("includes/menu.php"); ?>

           
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">

                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Mapa Admin - Ver ubicaciones de Juguemos REDCA</h5>
                            <br><br><small>Click en cada ubicación para ver el nombre</small>
                            <button style="float: right;"><a href="mapa.php">Nueva Ubicación</a></button>
                        </div>
                        <div class="ibox-content">

                        <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style> 
  </head>

  <body>
    <div style="width: 100%; height: 300px; margin: 0 auto;"  id="map"></div>

    <script>
        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(2.448132, -76.6169869),
          zoom: 12
        });
        var infoWindow = new google.maps.InfoWindow;

          // Change this depending on the name of your PHP or XML file
          downloadUrl('http://localhost/juguemos/markersXML.php', function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
              var name = markerElem.getAttribute('name');
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));

              var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              strong.textContent = name
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              infowincontent.appendChild(text);
              var marker = new google.maps.Marker({
                map: map,
                position: point,
              });
              marker.addListener('click', function() {
                map.setCenter(marker.getPosition());
                map.setZoom(14);
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
            });
          });
        }



      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeTdhn103KKecYVGF6SxdXXO-cSQOymuw&callback=initMap">
    </script>
                        
                        </div>
                        </div>
                    </div>
                </div>
    <!-- VER UBICACIONES -->
    <div class="ibox-content">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Nombre</th>
                                </tr>
                                </thead>
                    <?php
                    $re=mysqli_query($link,"select * from markers")or die();
                    while ($f=mysqli_fetch_array($re)) {
                    ?>
                    <tbody>
                        <tr>
                            <td><?php echo $f['name'];?></td> 
                            <td><a href="mapa/eliminar_ubicacion.php?id=<?php echo $f['id'];?>" onclick="return confirm('Esta seguro que desea eliminar esta ubicación?');">Eliminar</a></td>          
                        </tr>
                    </tbody>
                    <?php } ?>
                    </table>
                    
                </div>
            </div>

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
