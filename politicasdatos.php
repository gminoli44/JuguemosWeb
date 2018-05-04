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

  <style type="text/css">

.widget{ 
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

@media only screen and (max-width: 1000)
{
  .rowca{
    margin-right: -80px; 
    margin-left: -80px;
  }
}

</style>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Juguemos redca popayán" />
<meta name="keywords" content="juguemos, apuestas, popayan, chance, redca" />
<meta name="author" content="Juguemos Redca" />

<!-- Page Title -->
<title>Juguemos REDCA - Politicas de Tratamiento de Datos</title>

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
  
  
  <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: About -->
    <br>
      <div class="container">
        <div class="section-content">
          <div class="rowca">
         <div class="col-md-3" style="float:left">        
            <br>
            <br>
             <div class="widget">
                <div class="fb-page" height="610px" width="300px" data-href="https://www.facebook.com/Juguemosredca/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Juguemosredca/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Juguemosredca/">Juguemos Redca</a></blockquote></div>
              </div>
         </div>

            <div class="col-md-6">
              <h3 class="text-theme-colored3 text-uppercase mt-50 mt-sm-0 mb-20">Política de Tratamiento de Datos Personales</h3>
              <p class="lead" align="justify">En cumplimiento de los deberes establecidos para el Tratamiento de Datos Personales de titularidad de terceros por la Ley 1581 del 17 de octubre de 2012, “por la cual se dictan disposiciones generales para la protección de datos personales”; la Ley 1266 del 31 de diciembre 2008, “por la cual se dictan las disposiciones generales del hábeas data y se regula el manejo de la información contenida en bases de datos personales, en especial la financiera, crediticia, comercial, de servicios y la proveniente de terceros países y se dictan otras disposiciones”; el Decreto 1377 del 27 de junio 2013, “por el cual se reglamenta parcialmente la Ley 1581 de 2012”; el Decreto 1074 del 26 de mayo de 2015, “por medio del cual se expide el Decreto Único Reglamentario del Sector Comercio, Industria y Turismo”; y la Circular Externa 002 del 3 de noviembre de 2015 de la Superintendencia de Industria y Comercio, así como por las demás normas que las adicionen, modifiquen o reglamenten, RED DE SERVICIOS DEL CAUCA S.A. - REDCA. (en adelante «LA EMPRESA»), sociedad comercial legalmente constituida, identificada con el NIT 800.100.375-8, con domicilio principal en la carrera 9 No. 22N-36 barrio comercial Ciudad Jardín de la ciudad de Popayán, departamento del Cauca, PBX 8339601 y correo electrónico recepcion@juguemos.com.co, pone en conocimiento del público nuestra Política de Tratamiento de Datos Personales (en adelante «PTDP»).</p>
              <a href="http://juguemos.com.co/politicas.pdf" target="_blank" class="btn btn-theme-colored2 btn-new mt-10 mb-sm-30">Ver mas</a>
            </div>  
            <br><br>
            <?php include("right_col.php"); ?>
          </div>
        </div>
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