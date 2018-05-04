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

<style type="text/css">

.menu_medio{ 
  visibility: hidden; 
  display:none; 
  }



@media only screen and (min-width: 768px)  
{  
.menu_medio{ 
  visibility: visible; 
  display:inline 
}
}


</style>

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
    width: 100px;
    line-height: 100px;
    text-align: center;
    font-size: 70px;
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
    background-color: rgba(0, 0, 0, 0.00);
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
<body class="">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <div class="preloader-dot-loading">
        <div class="dfg"><i></i><i></i><i></i><i></i></div>
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
    <!-- Section: home -->
     

  <section>
   
    <!-- NAVBAR
    ================================================== -->
    <style>
        /* use navbar-wrapper to wrap navigation bar, the purpose is to overlay navigation bar above slider */
        .navbar-wrapper {
            position: absolute;
            top: 20px;
            left: 0;
            width: 100%;
            height: 51px;
        }
        .navbar-wrapper > .container {
            padding: 0;
        }

        @media all and (max-width: 768px ){
            .navbar-wrapper {
                position: relative;
                top: 0px;
            }
        }
    </style>


    <div style="min-height: 50px;">
        <!-- Jssor Slider Begin -->
        
        <style>
            /* jssor slider loading skin spin css */
            .jssorl-009-spin img {
                animation-name: jssorl-009-spin;
                animation-duration: 1.6s;
                animation-iteration-count: infinite;
                animation-timing-function: linear;
            }

            @keyframes jssorl-009-spin {
                from {
                    transform: rotate(0deg);
                }

                to {
                    transform: rotate(360deg);
                }
            }
        </style>
        <div id="slider1_container" style="visibility: hidden; position: relative; margin: 0 auto;
        top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="../svg/loading/static-svg/spin.svg" />
            </div>

            <!-- Slides Container -->
              <div u="slides" style="position: absolute; left: 0px; top: 0px; width: 1300px; height: 500px; overflow: hidden;">  
              <?php  
               $re=mysqli_query($link,"select * from slide WHERE estado = TRUE")or die();
                    while ($g=mysqli_fetch_array($re)) {
                    ?>
            
                <div>
                     <img data-u="image" src="admin/slide/imagenes/<?php echo $g['Imagen'];?>" width=100% url="<?php echo $g['url']; ?>"/>
                </div>
           
               <?php }?>
                </div>
                 
                
           
            <!--#region Bullet Navigator Skin Begin -->
            <!-- Help: https://www.jssor.com/development/slider-with-bullet-navigator.html -->
            <style>
                .jssorb031 {position:absolute;}
                .jssorb031 .i {position:absolute;cursor:pointer;}
                .jssorb031 .i .b {fill:#000;fill-opacity:0.5;stroke:#fff;stroke-width:1200;stroke-miterlimit:10;stroke-opacity:0.3;}
                .jssorb031 .i:hover .b {fill:#fff;fill-opacity:.7;stroke:#000;stroke-opacity:.5;}
                .jssorb031 .iav .b {fill:#fff;stroke:#000;fill-opacity:1;}
                .jssorb031 .i.idn {opacity:.3;}
            </style>
            <div data-u="navigator" class="jssorb031" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                <div data-u="prototype" class="i" style="width:16px;height:16px;">
                    <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                    </svg>
                </div>
            </div>
            <!--#endregion Bullet Navigator Skin End -->
        
            <!--#region Arrow Navigator Skin Begin -->
            <!-- Help: https://www.jssor.com/development/slider-with-arrow-navigator.html -->
            <style>
                .jssora051 {display:block;position:absolute;cursor:pointer;}
                .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
                .jssora051:hover {opacity:.8;}
                .jssora051.jssora051dn {opacity:.5;}
                .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
            </style>
            <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                </svg>
            </div>
            <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                </svg>
            </div>
            <!--#endregion Arrow Navigator Skin End -->
        </div>
        <!-- Jssor Slider End -->
    </div>
 
    
  </section>

    <!-- Section: About  -->

   <section  class="bg-theme-colored3">
      <div class="container pt-10 pb-10">
        <div class="row">
          <div class="col-md-12">
            <!-- Section: Clients -->
            <div class="owl-carousel-6col text-center">
            <?php
              $re=mysqli_query($link,"select nombre, resultado from resultados_loterias INNER JOIN loterias ON loterias.id=resultados_loterias.id_loteria where fecha=CURDATE()")or die();
              while ($loteria=mysqli_fetch_array($re)) {
            ?>
              <div class="item"><a><h4 style="color:white;"><?php echo $loteria['nombre']." ".$loteria['resultado'];?> </h4></a></div>
            <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: -->
    
    <!-- Section: -->
    <section class="menu_medio" id="service">
      <div class="container pb-70 pb-sm-90">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
              <h2 class="mt-0 line-height-1 text-center text-uppercase"><span class="text-theme-colored3">Servicios</span></h2>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row" style="margin: 0 auto; width: 75%;">
            <div class="col-sm-6 col-md-4 ">
             <a href="chance.php" style="text-decoration:none">
              <div class="icon-box-new media text-center sm-text-center" style="padding:0 0 0 0;">
                  <center><h3 class="heading chance">Chance</h3></center>
                </div>
              </a>
            </div>
            
            <div class="col-sm-6 col-md-4 ">
             <a href="giros.php" style="text-decoration:none">
              <div class="icon-box-new media text-center sm-text-center" style="padding:0 0 0 0;">
                  <center><h3 class="heading giros">Giros</h3></center>
                </div>
              </a>
            </div>
            
            <div class="col-sm-6 col-md-4 ">
             <a href="loteriafisica.php" style="text-decoration:none">
              <div class="icon-box-new media text-center sm-text-center" style="padding:0 0 0 0;">
                  <center><h3 class="heading loteria">Loteria</h3></center>
                </div>
              </a>
            </div>
            
            <div class="col-sm-6 col-md-4 ">
             <a href="pagosrecaudos.php" style="text-decoration:none">
              <div class="icon-box-new media text-center sm-text-center" style="padding:0 0 0 0;">
                  <center><h3 class="heading recaudos">Recaudos</h3></center>
                </div>
              </a>
            </div>
            
             <div class="col-sm-6 col-md-4 ">
             <a href="recargas.php" style="text-decoration:none">
              <div class="icon-box-new media text-center sm-text-center" style="padding:0 0 0 0;">
                  <center><h3 class="heading recargas">Recargas</h3></center>
                </div>
              </a>
            </div>
            
             <div class="col-sm-6 col-md-4 ">
             <a href="soat.php" style="text-decoration:none">
              <div class="icon-box-new media text-center sm-text-center" style="padding:0 0 0 0;">
                  <center><h3 class="heading soat">SOAT</h3></center>
                </div>
              </a>
            </div>
            
          
          </div>
        </div>
      </div>
    </section>

    <!-- Section: -->
 

    <div class="clear">
    <!-- Section: Divider -->

    
    
    <section  style="height:180px; background: url(img/banner_pesos3.png); background-size:300px" >
    <div class="row apuesta">


      <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
         <h3 class="uk-panel-title" style="color: white;"><b>Tu apuesta</b></h3>
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
                <label style="color: white;">Valor Apostado</label>
               <input id="valor_apostado" type="number" onkeydown="mostrar()" onkeyup="mostrar()" min="0" placeholder="0" required="" class="form-control">
              </div>
             <div class="col-xs-4">
                <label  style="color: white;">Tipo Premio</label>
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
                <div class="col-xs-4">
			<label style="color: white;">Premio:</label><br><label id="valor" style="color: white; font-size:2em;"></label>
                </div>
		</form>      
       
    </div>
           <br>


        <div class="col-xs-12 col-sm-12 col-md-6 "><label style="color:white; margin-bottom:-30px; margin-top: -30px; font-size: 200%;"><b>Tu número de la suerte</b></label>

        <div class="fancy">
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
        
        <input type="button" id="playFancy" value="Jugar" class="btn btn-default btn-lg" style=" margin-bottom: 50px; color:#2f529c;">
            </div>
          </div>
        </div>
    </section>
    
    
    
    <!-- Section: Case Study -->
    <section>
      <div class="container pb-0">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="mt-0 line-height-1">Nuestros <span class="text-theme-colored3">Aliados</span></h2>
              <p></p>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid pt-0 pb-90">
        <div class="row">
          <div class="col-md-12">
            <div class="owl-carousel-5col" data-dots="true">
            <?php 
                    
                    $re=mysqli_query($link,"select * from slide_aliados WHERE estado = TRUE")or die();
                    while ($f=mysqli_fetch_array($re)) {
                    ?>
              <div class="item">
                <div class="campaign">
                    <div class="thumb">
                    <img src="admin/slide/imagenes/<?php echo $f['Imagen']; ?>" alt="" class="img-fullwidth">
                    <div class="campaign-overlay-seo">
                      <div class="campaign-details-seo">
                        <a href="<?php echo $f['url']; ?>"><h4><?php echo $f['Nombre']; ?></h4></a>
                        <div class="mt-10 mb-20 mb-sm-5">
                          <!--<ul class="list-inline text-theme-colored2 clearfix mt-10">
                            <li class="pull-left flip pr-0">Rank: <span class="font-weight-700">3</span></li>
                            <li class="pull-right flip pr-0">Time: <span class="font-weight-700">2 Months</span></li>
                          </ul>-->
                        </div>
                      </div>
                    </div>

                  </div>
                   
                </div>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: -->




    <!-- Section: blog -->
    

    <!-- Divider: RESULTADOS -->
    <!--<section class="clients bg-theme-colored3">
      <div class="container pt-10 pb-10">
        <div class="row">
          <div class="col-md-12">
            
            <div class="owl-carousel-6col text-center">
            <?php
              $re=mysqli_query($link,"select nombre, resultado from resultados_loterias INNER JOIN loterias ON loterias.id=resultados_loterias.id_loteria where fecha=CURDATE()")or die();
              while ($loteria=mysqli_fetch_array($re)) {
            ?>
              <div class="item"><a><h4 style="color:white; text-shadow: 0 0 3px #FF0000, 0 0 10px #000000;"><?php echo $loteria['nombre']."<br>".$loteria['resultado'];?> </h4></a></div>
            <?php } ?>
            </div>
          </div>
        </div>
      </div>

    </section>
      </div>

    </section>-->

  <!-- Footer -->
  <?php include("footer.php"); ?>
  <a class="scrollToTop" href="#"><i class="flaticon-seo-transport-3"></i></a>
        </div>
    
        </div>
    </div>

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
<!-- JS | Chart-->
<script src="js/chart.js"></script>
 <script> 
    $(function(){
      $("#includedContent").load("menu.php"); 
    });
        </script>
  
        
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
    
    
     <script>
       $( "img" ).click(function() {
        var $input = $( this );
        location.href =$input.attr("url");
       });
</script>
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

  

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   
    <script src="docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="ie10-viewport-bug-workaround.js"></script>

    <!-- jssor slider scripts-->
    <script type="text/javascript" src="js2/jssor.slider.min.js"></script>
    <script>
        jQuery(document).ready(function ($) {

            var options = {
                $FillMode: 2,                                       //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actual size, 5 contain for large image, actual size for small image, default value is 0
                $AutoPlay: 1,                                    //[Optional] Auto play or not, to enable slideshow, this option must be set to greater than 0. Default value is 0. 0: no auto play, 1: continuously, 2: stop at last slide, 4: stop on click, 8: stop on user navigation (by arrow/bullet/thumbnail/drag/arrow key navigation)
                $Idle: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: 1,   			            //[Optional] Steps to go for each navigation request by pressing arrow key, default value is 1.
                $SlideEasing: $Jease$.$OutQuint,          //[Optional] Specifies easing for right to left animation, default value is $Jease$.$OutQuad
                $SlideDuration: 800,                               //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide, default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $Cols: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $Align: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $Cols is greater than 1, or parking position is not 0)
              
                $BulletNavigatorOptions: {                          //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                 //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Rows: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 8,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 8,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1,                                //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                    $Scale: false                                   //Scales bullets navigator or not while slider scale
                },

                $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                if (bodyWidth)
                    jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 1920));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>
    
    </body>

<!-- Mirrored from thememascot.net/demo/personal/f/seoservice/j/demo/index-mp-layout1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Sep 2017 01:43:34 GMT -->
</html>