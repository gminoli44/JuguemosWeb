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
<title>Juguemos S.A. - Quienes Somos</title>

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
  </div>
  
  <!-- Header -->
  <header id="header" class="header">
      <center><img src="images/logo.png" width="100%" style="-webkit-box-shadow: 0px 4px 5px 0px rgba(87,87,87,0.5);
-moz-box-shadow: 0px 4px 5px 0px rgba(87,87,87,0.5);
box-shadow: 0px 4px 5px 0px rgba(87,87,87,0.5);"></center>
  </header>
  
  
  <!-- Start main-content -->
   <br>
     <div class="container">
        <div class="rowca">
         <div class="col-md-3" style="float:left" id="face">        
           
         </div>
            <div class="blog-posts single-post">
             <center><img src="img/SOAT.png" width="70%"></center>
             <br>
              <p class="lead" align="justify">El nuevo servicio de Juguemos permite que el cliente puede adquirir su SOAT en los canales de juguemos de contado o a crédito, debe acercarse a cualquier oficina con los documentos del automotor y cédula de ciudadanía.<br><br>
              Solicita una cotización de tu SOAT con el siguiente formulario, a vuelta de correo resiviras la información necesaria.</p>

              <!-- FORMULARIO START -->
              <form id="contacto">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Marca del Vehiculo</label>
                    <input type="text" id="marca" class="form-control" name="marca" placeholder="Escribe la marca del vehiculo">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputState">Tipo</label>
                    <select name="tipo" id="tipo" class="form-control">
                      <option value="automovil" selected>Automovil</option>
                      <option value="motocicleta">Motocicleta</option>
                    </select>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Modelo</label>
                    <input name="modelo" id="modelo" type="text" class="form-control" placeholder="Escribe el modelo del vehiculo">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Placa</label>
                    <input name="placa" id="placa" type="text" class="form-control" placeholder="Escribe la placa del vehiculo">
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-group col-md-12">
                  <label for="inputAddress">Nombre</label>
                  <input name="nombre" id="nombre" type="text" class="form-control" id="inputAddress" placeholder="Nombre de contacto">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input name="email" id="email" type="email" class="form-control" placeholder="Escribe un email de contacto">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Telefono</label>
                    <input name="telefono" id="telefono" type="text" class="form-control" placeholder="Escribe un telefono de contacto">
                  </div>
                </div>
               
                <button id="button" type="submit" class="btn btn-primary">Solicitar cotización</button>
              </form>
              <div id="ok"></div>
              <!-- FORMULARIO END -->
            </div>
          
          <br><br>
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
<script>
    $(document).ready(function() {
    $("#ok").hide();

    $("#contacto").validate({
        rules: {
            email: { required: true, minlength: 5, email:true},
            nombre: { required: true, minlength: 3},
            placa: { required: true, minlength: 3,},
            modelo: { required: true, minlength: 3, number: true},
            marca: { required: true, minlength: 3}
        },
        messages: {
            nombre: "Debe introducir su Nombre.",
            email : "Debe introducir un email válido.",
            placa : "Debe introducir un numero de placa.",
            modelo : "Debe introducir solo numeros.",
            marca : "Debe introducir una marca de vehiculo.",
            
        },
        submitHandler: function(form){
            
            
            $.ajax({
                type: "POST",
                url:"email/soat.php",
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