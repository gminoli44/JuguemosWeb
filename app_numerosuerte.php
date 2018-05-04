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

        
<link href='http://fonts.googleapis.com/css?family=Gravitas+One&text=0123456789' rel='stylesheet' type='text/css'>

<style type="text/css">


ul {
    padding: 0;
    margin: 0;
    list-style: none;
}

.jSlots-wrapper {
    overflow: hidden;
    height: 20px;
    display: inline-block; /* to size correctly, can use float too, or width*/
    
}

.slot {
    float: left;
}

/* ---------------------------------------------------------------------
   FANCY EXAMPLE
--------------------------------------------------------------------- */
.fancy .jSlots-wrapper {
    overflow: hidden;
    height: 100px;
    display: inline-block; /* to size correctly, can use float too, or width*/
   
}

.fancy .slot li {
    width: 70px;
    line-height: 100px;
    text-align: center;
    font-size: 55px;
    font-weight: bold;
    color: #fff;
    text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.8);
    font-family: 'Gravitas One', serif;
   
}

.fancy .slot:first-child li {
    border-left: none;
}

.fancy .slot li:nth-child(0),
.fancy .slot li:nth-child(1),
.fancy .slot li:nth-child(2),
.fancy .slot li:nth-child(3),
.fancy .slot li:nth-child(4),
.fancy .slot li:nth-child(5),
.fancy .slot li:nth-child(6),
.fancy .slot li:nth-child(7),
.fancy .slot li:nth-child(8),
.fancy .slot li:nth-child(9) {
    background-color: rgba(47, 82, 156, 0.06);
}
    

.fancy .slot li span {
    display: block;
}

/* ---------------------------------------------------------------------
   ANIMATIONS
--------------------------------------------------------------------- */

@-webkit-keyframes winner {
        0%, 50%, 100% {
            -webkit-transform: rotate(0deg);
            font-size:70px;
            color: #fff;
        }
        25% {
            -webkit-transform: rotate(20deg);
            font-size:90px;
            color: #FF16D8;
        }
        75% {
            -webkit-transform: rotate(-20deg);
            font-size:90px;
            color: #FF16D8;
        }
}
@-moz-keyframes winner {
        0%, 50%, 100% {
            -moz-transform: rotate(0deg);
            font-size:70px;
            color: #fff;
        }
        25% {
            -moz-transform: rotate(20deg);
            font-size:90px;
            color: #FF16D8;
        }
        75% {
            -moz-transform: rotate(-20deg);
            font-size:90px;
            color: #FF16D8;
        }
}
@-ms-keyframes winner {
        0%, 50%, 100% {
            -ms-transform: rotate(0deg);
            font-size:70px;
            color: #fff;
        }
        25% {
            -ms-transform: rotate(20deg);
            font-size:90px;
            color: #FF16D8;
        }
        75% {
            -ms-transform: rotate(-20deg);
            font-size:90px;
            color: #FF16D8;
        }
}


@-webkit-keyframes winnerBox {
        0%, 50%, 100% {
            box-shadow: inset 0 0  0px yellow;
            background-color: #FF0000;
        }
        25%, 75% {
            box-shadow: inset 0 0 30px yellow;
            background-color: aqua;
        }
}
@-moz-keyframes winnerBox {
        0%, 50%, 100% {
            box-shadow: inset 0 0  0px yellow;
            background-color: #FF0000;
        }
        25%, 75% {
            box-shadow: inset 0 0 30px yellow;
            background-color: aqua;
        }
}
@-ms-keyframes winnerBox {
        0%, 50%, 100% {
            box-shadow: inset 0 0  0px yellow;
            background-color: #FF0000;
        }
        25%, 75% {
            box-shadow: inset 0 0 30px yellow;
            background-color: aqua;
        }
}


.winner li {
    -webkit-animation: winnerBox 2s infinite linear;
       -moz-animation: winnerBox 2s infinite linear;
        -ms-animation: winnerBox 2s infinite linear;
}
.winner li span {
     -webkit-animation: winner 2s infinite linear;
        -moz-animation: winner 2s infinite linear;
         -ms-animation: winner 2s infinite linear;
}

</style>

    
</head>
<body  style="background: url(img/banner_pesos3.png); background-size:300px">
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

    <section>
    <div class="row">
       <br><br><br>
        <div class="col-xs-12 col-sm-12 col-md-6"><center><label style="color: white; margin-bottom:-30px; margin-top: -20px;"><h3><b>Tu número de la suerte</b></h3></label></center>
        <center><div class="fancy">
        <ul class="slot">
            <!-- In reverse order so the 7s show on load -->
            <li><span>0</span></li>
            <li><span>9</span></li>
            <li><span>8</span></li>
            <li><span>7</span></li>
            <li><span>6</span></li>
            <li><span>5</span></li>
            <li><span>4</span></li>
            <li><span>3</span></li>
            <li><span>2</span></li>
            <li><span>1</span></li>
        </ul>
        
        <center><input type="button" id="playFancy" value="Jugar" class="btn btn-default btn-lg" style=" margin-bottom: 50px; color:#2f529c;"></center>
            </div></center>
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