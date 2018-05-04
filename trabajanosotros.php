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

<!-- Page Title -->
<title>Juguemos REDCA - Trabaja con nosotros</title>

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

    <!-- Section: inner-header -->
    

    <!-- Section: About -->
    <section id="about">
      <div class="container">
        <div class="section-content">
          <div class="row">
           <form id="contacto">
            <div class="col-sm-12 col-md-6">
              <h3 class="text-theme-colored3 text-uppercase mt-50 mt-sm-0 mb-20">Trabaja con nosotros</h3>
             
              <div class="form-group">
                <label for="exampleInputEmail1">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escribe tu nombre">
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">Email</label>
                <input type="Email" class="form-control" name="email" id="email" placeholder="Escribe tu Email">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Asunto</label>
                <input type="text" class="form-control" id="asunto" name="asunto" aria-describedby="emailHelp" placeholder="Escribe el asunto de tu mensaje">
              </div>
            </div>
            <div class="col-sm-12 col-md-6">
            <br><br><br><br><br>         
            <div class="form-group">
              <label for="exampleTextarea">Mensaje</label>
              <textarea class="form-control" id="exampleTextarea" name="mensaje" id="mensaje" rows="10"></textarea>
            </div>
            </div>
          </div>
          <button id="button" type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
        <div id="ok"></div>
      </div>
       
    </section>

    
    
    <!-- Section: Case Study -->
    
    <!-- Divider: Clients -->
    

    <!-- Section: -->
    
    <!-- Section: -->
    

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

<script>
    $(document).ready(function() {
    $("#ok").hide();

    $("#contacto").validate({
        rules: {
            email: { required: true, minlength: 5, email:true},
            nombre: { required: true, minlength: 3},
            asunto: { required: true, minlength: 3}
        },
        messages: {
            nombre: "Debe introducir su nombre de usuario.",
            email : "Debe introducir un email válido.",
            asunto : "Debe introducir un asunto.",
            
        },
        submitHandler: function(form){
            
            var dataString = 'nombre='+$('#nombre').val()+'&asunto='+$('#asunto').val()+'&email='+$('#email').val()+'&mensaje='+$('#mensaje').val();
            $.ajax({
                type: "POST",
                url:"email/trabaja_nos.php",
                data: $("#contacto").serialize(),
                success: function(response){
                    $("#ok").html(response);
                    $("#ok").show();
                    $("#contacto")[0].reset();
                    $("#contacto").hide(1000);
                    $("#button").hide();
                }
            });
        }
    });
});
</script>

</body>

<!-- Mirrored from thememascot.net/demo/personal/f/seoservice/j/demo/page-about1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Sep 2017 01:44:09 GMT -->
</html>