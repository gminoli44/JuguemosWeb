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
<title>Juguemos REDCA - Quienes Somos</title>

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
<body>
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
  </div>
  
  <!-- Header -->
  <header id="header" class="header">
      <center><img src="images/logo.png" width="100%" style="-webkit-box-shadow: 0px 4px 5px 0px rgba(87,87,87,0.5);
-moz-box-shadow: 0px 4px 5px 0px rgba(87,87,87,0.5);
box-shadow: 0px 4px 5px 0px rgba(87,87,87,0.5);"></center>
  </header>
  
  
  <!-- Start main-content -->
  
     <div class="container">
         <div class="row">
            <div class="blog-posts single-post">
              <br>
                <center> <p class="lead" style="color:#575757">Se realizan giros a nivel nacional, se tiene convenio de giros con Colombia Mayor, CDA, Supernotariado, Asmet Salud y Avon.</p></center>
                <center>
           
                </center>
          </div>
          
          
          <div class="container">
          <h3 class="uk-panel-title" style="color: #2f529c;"><b>Simulador de Giros</b></h3>
	<script type="text/javascript">
  		function mostrar() {
          	var v = document.getElementById('valor_enviado').value;
            var valor=0;
          	if (v==""){
              v=0
            }
            if(v>=1 && v<50001)
                {
                    valor=4700;
                }
            else if(v==0){
                 valor=0;
            } 
            else if(v>50001 && v<100001){
                 valor=6000;
            } 
            else if(v>100001 && v<150001){
                 valor=7500;
            } 
            else if(v>150001 && v<200001){
                 valor=8300;
            } 
            else if(v>200001 && v<250001){
                 valor=9800;
            } 
            else if(v>250001 && v<300001){
                 valor=10300;
            } 
            else if(v>300001 && v<350001){
                 valor=10800;
            }
            else if(v>350001 && v<400001){
                 valor=11300;
            }
            else{
                valor=v*(0.026)+900;
            }
          document.getElementById("valor").innerHTML = "$" + valor;
		}
	</script>
        
            <form name="simulador" method="POST" class="form-group row">        	
			
               <div class="col-xs-8">
                <h4><label style="color: #2f529c;">Valor a Enviar</label></h4>
               <input id="valor_enviado" type="number" onkeydown="mostrar()" onkeyup="mostrar()" min="0" placeholder="0" required="" class="form-control">
              </div>
                <div class="col-xs-8">
			<h4><label style="color: #2f529c;">Valor Giro:</label><br><label id="valor" style="color: #2f529c; font-size:2em;"></label></h4>
                </div>
		</form>           
       
              </div>
         
        </div>
      </div>
    </div>

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