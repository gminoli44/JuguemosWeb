<!DOCTYPE html>
<html dir="ltr" lang="en">
<?php include("conexion.php"); ?>

<!-- Mirrored from thememascot.net/demo/personal/f/seoservice/j/demo/index-mp-layout1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Sep 2017 01:43:02 GMT -->

<?php
 function fechaCastellano ($fecha) {
  $fecha = substr($fecha, 0, 10);
  $numeroDia = date('d', strtotime($fecha));
  $dia = date('l', strtotime($fecha));
  $mes = date('F', strtotime($fecha));
  $anio = date('Y', strtotime($fecha));
  $dias_ES = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
  $dias_EN = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
  $nombredia = str_replace($dias_EN, $dias_ES, $dia);
  $meses_ES = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
  $meses_EN = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
  $nombreMes = str_replace($meses_EN, $meses_ES, $mes);
  return $nombredia." ".$numeroDia." de ".$nombreMes." de ".$anio;
}
?>

<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Juguemos redca popayán" />
<meta name="keywords" content="juguemos, apuestas, popayan, chance, redca" />
<meta name="author" content="Juguemos Redca" />

<meta property="og:title" content="Juguemos" />
<meta property="og:type" content="Juguemos redca popayán" />
<meta property="og:url" content=" http://www.juguemos.com.co/resultados_p.php" />
<meta property="og:image" content=" http://example.com/image.jpg" />
<meta property="og:description" content="Juguemos redca popayan sitio oficial" />
<meta property="og:site_name" content="Juguemos" />

<!-- Page Title -->
<title>Juguemos REDCA</title>

<!-- Favicon and Touch Icons -->
<link href="images/favicon.png" rel="shortcut icon" type="image/ico">


<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-blue.css" rel="stylesheet" type="text/css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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

<style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 20%;
      }
    </style>
    <style>
            .aslide {
                display: none;
            }
            .aslide img {
                max-width: 100%;                
            }
            .aslider {
                width: 90%;
                height: 550px;
            }
            .aslide .text {
                margin: 0 auto;
                color: #f8f8f8;
                text-shadow: 0 0 2px #000;
                font-weight: bold;
                font-size: 36px;
                width: 100%;
                text-align: center;
                position: absolute;
                bottom: 30px;
                font-family: sans-serif;
            }
            .capa-imagen {
             background-image: url("ruta_de_la_imagen");
                 width:100%;
                 height:100%;
            }    
        </style>
        
<link href='http://fonts.googleapis.com/css?family=Gravitas+One&text=0123456789' rel='stylesheet' type='text/css'>
    
</head>
<body style="height:140px; background: url(img/banner_pesos3.png); background-size:300px">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <div class="preloader-dot-loading">
        <div class="dfg"><i></i><i></i><i></i><i></i></div>
      </div>
    </div>
   
  </div>
  
 <!-- Header -->
  <header id="header" class="header">
      <center><img src="images/logo.png" width="100%" style="-webkit-box-shadow: 0px 4px 5px 0px rgba(87,87,87,0.5);
-moz-box-shadow: 0px 4px 5px 0px rgba(87,87,87,0.5);
box-shadow: 0px 4px 5px 0px rgba(87,87,87,0.5);"></center>
  </header>
  
  <!-- Start main-content -->
  <div class="main-content">
    


    <!-- Section: -->
 

    <div class="clear">

    <!-- Section: -->

    <section class="container">
    <div class="row">
      <div>
         <center><h3 class="uk-panel-title" style="color: white;"><b>Tu apuesta</b></h3></center>
	<script type="text/javascript">
  		function mostrar() {
          	var v = document.getElementById('valor_apostado').value;
          	if (v==""){
              v=0
            }
            var planpremios = document.getElementById("plan").value;
          	var msj;
          	var mult;
    		switch(planpremios) {
    			case "1": msj = "Directo 4 cifras";
                		  mult = 4500;
        				break;
    			case "2": msj = "Directo 3 cifras";        				
                		mult = 400;
        				break;
                case "3": msj = "Combinado 4 cifras";        				
                		mult = 208;
        				break;
                case "4": msj = "Combinado 3 cifras";        				
                		mult = 83;
        				break;
                case "5": msj = "Pata 2 cifras";        				
                		mult = 50;
        				break;
                case "6": msj = "Uña 1 cifra";        				
                		mult = 5;
        				break;
    			default: msj="";
                		mult = 0;
                		 break;
			}
          var total = (v/1.19)*mult;
          total = +total.toFixed(2);
          document.getElementById("valor").innerHTML = "$" + Math.round(total);
          document.getElementById("descrip").innerHTML = "" + msj;
		}
	</script>
        
            <form name="simulador" method="POST" class="form-group row">        	
			
               <div class="col-xs-10 col-xs-offset-1">
                <h4><label style="color: white;">Valor Apostado</label></h4>
               <input id="valor_apostado" type="number" onkeydown="mostrar()" onkeyup="mostrar()" min="0" placeholder="0" required="" class="form-control">
              </div>
              <br><br>
             <div class="col-xs-10 col-xs-offset-1">
                <h4><label  style="color: white;">Tipo Premio</label></h4>
  			<select onchange="mostrar()" id="plan" required="" class="form-control" >
  				<option selected="" value="0">Seleccione el tipo de premio</option>
              	<option value="1">Cuatro cifras en su orden</option>
  				<option value="2">Últimas tres cifras en su orden</option>
  				<option value="3">Cuatro cifras en cualquier orden</option>
              	<option value="4">Tres cifras en cualquier orden</option>
  				<option value="5">Últimas dos cifras en su orden</option>
              	<option value="6">Última cifra en su orden</option>
			</select>
                </div>
                <br><br>
                <div class="col-xs-10 col-xs-offset-1">
			<center><h3><label style="color: white;">Premio:</label></h3><label id="valor" style="color: white; font-size:3em;"></label></center>
                </div>
		</form>      
       
    </div>
       
        </div>
    </section>

    <!-- Section: blog -->
    

    </div>
    </div>
    </div>
<!-- external javascripts -->
<script src="js/jquery-2.2.4.min.js"></script>

<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>
<script src="js/extra.js"></script>
<script src="js/custom.js"></script>
<!-- JS | Chart-->
<script src="js/chart.js"></script>
 <script> 
    $(function(){
      $("#includedContent").load("menu.php"); 
    });
        </script>
    <script src="aslider.js"></script>        
        
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
    
       
    <script src="jslots/jquery.easing.1.3.js" type="text/javascript" charset="utf-8"></script>
    <script src="jslots/jquery.jSlots.min.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" charset="utf-8">
        
        
        // fancy example
        $('.fancy .slot').jSlots({
            number : 4,
            winnerNumber : 10,
            spinner : '#playFancy',
            easing : 'easeOutSine',
            time : 6000,
            loops : 6,
            onStart : function() {
            }
        });
        
        
    </script>
    
    </body>

<!-- Mirrored from thememascot.net/demo/personal/f/seoservice/j/demo/index-mp-layout1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Sep 2017 01:43:34 GMT -->
</html>