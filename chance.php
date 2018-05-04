<!DOCTYPE html>
<html dir="ltr" lang="en">

<?php include("conexion.php"); ?>


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

<!-- Page Title -->
<title>Juguemos REDCA - Chance</title>
<!-- Favicon and Touch Icons -->
<link href="images/favicon.png" rel="shortcut icon" type="image/png">


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
</head>
<body class="">
  <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.10&appId=669977056541304";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="wrapper">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <div class="preloader-dot-loading">
        <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
      </div>
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>
  
  <!-- Header -->
  <header id="header" class="header">

    <?php include("menu.php"); ?>
  </header>

  <style type="text/css">

.widget{ 
  visibility: hidden; 
  display:none; 
  }

.espacio{ 
  visibility: hidden; 
  display:none; 
  }

@media only screen and (min-width: 1030px)  
{  
  .widget { 
    visibility: visible; 
    display:inline 
  }
}


@media only screen and (max-width: 1030px)  
{  
  .espacio { 
    visibility: visible; 
    display:inline }
}


@media only screen and (max-width: 1000)
{
  .rowca{
    margin-right: -80px; 
    margin-left: -80px;
  }
}

</style>
  

      <div class="container" style="margin-right: auto; margin-left: auto">
        <div class="rowca">
         <div class="col-md-3" style="float:left">        
            <br>
            <br>
             <div class="widget">
                <div class="fb-page" height="610px" width="300px" data-href="https://www.facebook.com/Juguemosredca/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Juguemosredca/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Juguemosredca/">Juguemos Redca</a></blockquote></div>
              </div>
         </div>

          <div class="col-md-6 col-xs-12">
            <div class="blog-posts single-post">
                <br><p>  </p><center><img src="img/chance.png" width="65%"></center><br><br>
              <p class="lead">Se puede apostar chance en sus modalidades directo 3 y 4 cifras, combinado 3 y 4 cifras, pata y uña.</p>
              <table style="max-width: 90%" class="table table-striped">
                <thead>
              <tr>  
                <th style="background-color: #2f529c; color: white">Modalidad </th>
                <th style="background-color: #2f529c; color: white">Premio por Peso Apostado </th>
            </tr>
            </thead>
            <tbody>
              <tr>
                <td>4 Cifras en su Orden</td>
                        <td>$ 4500</td>
                    </tr>
                    <tr>
                        <td>Ultimas 3 Cifras en su Orden</td>
                        <td>$ 400</td> 
                    </tr>
            <tr>
                <td>4 Cifras en Cualquier Orden</td>
                <td>$ 208</td>
            </tr>
            <tr>
                <td>Ultimas 3 Cifras en Cualquier Orden</td>
                <td>$ 83</td>
            </tr>
              <tr>
                <td>Ultimas 2 Cifras en su Orden</td>
                <td>$ 50</td>       
              </tr>
              <tr>
                <td>Ultima Cifra en su Orden</td>
                <td>$ 5</td>        
              </tr>
            </tbody>
          </table>
          </div>
          <hr>
           <div class="">
          <h3 class="uk-panel-title" style="color: #2f529c;"><b>Simulador de chance</b></h3>
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
			
               <div class="col-xs-4">
                <label style="color: #2f529c;">Apuesta</label>
               <input id="valor_apostado" type="number" onkeydown="mostrar()" onkeyup="mostrar()" min="0" placeholder="0" required="" class="form-control">
              </div>
             <div class="col-xs-4">
                <label  style="color: #2f529c;">Tipo Premio</label>
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
      <div class="espacio"> <!-- Define espacios en responsive-->
        <br><br><br><br><br><br>
      </div>
                <div class="col-xs-4">

			<label style="color: #2f529c;">Premio:</label><br><label id="valor" style="color: #2f529c; font-size:2em;"></label>
                </div>
		</form>      
       
    </div>
          
          
          </div><br>
          <?php include("right_col.php"); ?>
        </div>
      </div>
      
  <!-- end main-content -->
  
  <!-- Footer -->
  <?php include("footer.php"); ?>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a> </div>
<!-- end wrapper --> 

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<!-- external javascripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>
<script src="js/extra.js"></script>
<script src="js/custom.js"></script>

</body>

<!-- Mirrored from thememascot.net/demo/personal/f/seoservice/j/demo/page-about1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Sep 2017 01:44:09 GMT -->
</html>