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
<title>Juguemos REDCA - Astro</title>

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
  

    <!-- Section: About -->
    <div class="container">
        <div class="rowca" >
         <div class="col-md-3" style="float:left">        
            <br>
            <br>
             <div class="widget">
                <div class="fb-page" height="610px" width="300px" data-href="https://www.facebook.com/Juguemosredca/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Juguemosredca/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Juguemosredca/">Juguemos Redca</a></blockquote></div>
              </div>
         </div>
          <div class="col-md-6">
            <div class="blog-posts single-post">
              
                <br><br><center><img src="img/astro.png" width="65%"></center><br>
                
                <!-- Desde aqui el simulador -->
                
   <script type="application/javascript">
                    Number.prototype.formatMoney = function(decPlaces, thouSeparator, decSeparator) {
   var n = this,
   decPlaces = isNaN(decPlaces = Math.abs(decPlaces)) ? 2 : decPlaces,
   decSeparator = decSeparator == undefined ? "." : decSeparator,
   thouSeparator = thouSeparator == undefined ? "," : thouSeparator,
   sign = n < 0 ? "-" : "",
   i = parseInt(n = Math.abs(+n || 0).toFixed(decPlaces)) + "",
   j = (j = i.length) > 3 ? j % 3 : 0;
   return sign + (j ? i.substr(0, j) + thouSeparator : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thouSeparator) + (decPlaces ? decSeparator + Math.abs(n - i).toFixed(decPlaces).slice(2) : "");
};

function multiplicar(){

/*valor = document.getElementById("valor").value;
valoriva = valor*0.19;
valormenosiva = valor-valoriva;
valoriva100 = Math.round(valormenosiva);*/

valor = document.getElementById("valor").value;
valoriva = valor/119;
valoriva100 = Math.round(valoriva*100);
valor_rete = 1529000;

///100
valorplan100 = valoriva100*100;
valorplan100_50 = Math.round(valorplan100/50);
valorplan100_50redondo = Math.round(valorplan100_50*50);

/*valortodos = valor/12;
valortodosmenosiva = valortodos*0.19;
valortodosiva = Math.round(valortodos-valortodosmenosiva);
//valortodosiva = Math.round(valortodos/1.19);
valortodos100 = valortodosiva*100;
valortodos1000 = valortodosiva*1000;
valortodos42000 = valortodosiva*42000;*/

valortodos = valor/12;
valortodosiva = Math.round(valortodos/1.19);
valortodos100 = valortodosiva*100;
valortodos1000 = valortodosiva*1000;
valortodos42000 = valortodosiva*42000;

valorplan100_50todos = valorplan100_50redondo/12;
valorplan100_50todosx = Math.round(valorplan100_50todos/50);
valorplan100_50todosxx = Math.round(valorplan100_50todosx*50);


valorplan1000_50redondo = valoriva100*1000;
valorplan1000_50todosxx = (valoriva100*1000)/12;

valorplan42000_50redondo = valoriva100*42000;
valorplan42000_50todosxx = (valoriva100*42000)/12;

/////retencion para mayor de 1.500.000
valorplan100_50redondo_rete = 0;
if(valorplan100_50redondo>valor_rete){
valorplan100_50redondo_rete = valorplan100_50redondo-((valorplan100_50redondo*20)/100);
}
////
valortodos100_rete = 0;
if(valortodos100>valor_rete){
valortodos100_rete = valortodos100-((valortodos100*20)/100);
}
////
valorplan1000_50redondo_rete = 0;
if(valorplan1000_50redondo>valor_rete){
valorplan1000_50redondo_rete = valorplan1000_50redondo-((valorplan1000_50redondo*20)/100);
}
////
valortodos1000_rete = 0;
if(valortodos1000>valor_rete){
valortodos1000_rete = valortodos1000-((valortodos1000*20)/100);
}
////
valorplan42000_50redondo_rete = 0;
if(valorplan42000_50redondo>valor_rete){
valorplan42000_50redondo_rete = valorplan42000_50redondo-((valorplan42000_50redondo*20)/100);
}
////
valortodos42000_rete = 0;
if(valortodos42000>valor_rete){
valortodos42000_rete = valortodos42000-((valortodos42000*20)/100);
}

document.getElementById("valoriva").value = '$ ' + valoriva100.formatMoney(0, '.');
document.getElementById("valorivatodos").value = '$ ' + valortodosiva.formatMoney(0, '.');
document.getElementById("cuatrocifras").value = '$ ' + valorplan42000_50redondo.formatMoney(0, '.');
document.getElementById("cuatrocifras_rete").value = '$ ' + valorplan42000_50redondo_rete.formatMoney(0, '.');
document.getElementById("cuatrocifrast").value = '$ ' + valortodos42000.formatMoney(0, '.');
if (valortodos42000_rete == 0 ) { document.getElementById("cuatrocifrast_rete").value = 'No aplica' } else { document.getElementById("cuatrocifrast_rete").value = '$ ' + valortodos42000_rete.formatMoney(0, '.'); } /*este*/
document.getElementById("trescifras").value = '$ ' + valorplan1000_50redondo.formatMoney(0, '.');
if (valorplan1000_50redondo_rete == 0 ) { document.getElementById("trescifras_rete").value = 'No aplica' } else { document.getElementById("trescifras_rete").value = '$ ' + valorplan1000_50redondo_rete.formatMoney(0, '.'); } /*este*/
document.getElementById("trescifrast").value = '$ ' + valortodos1000.formatMoney(0, '.');
if(valortodos1000<valor_rete){document.getElementById("trescifrast_rete").value = 'No aplica';}else
{document.getElementById("trescifrast_rete").value = '$' + (valortodos1000*0.8).formatMoney(0,'.');}
document.getElementById("doscifras").value = '$ ' + valorplan100_50redondo.formatMoney(0, '.');
if(valorplan100_50redondo<valor_rete){document.getElementById("doscifras_rete").value = 'No aplica';}else{
document.getElementById("doscifras_rete").value = '$' + (valorplan100_50redondo*0.8).formatMoney(0,'.');}
document.getElementById("doscifrast").value = '$ ' + valortodos100.formatMoney(0, '.');
if(valortodos100<valor_rete){document.getElementById("doscifrast_rete").value = 'No aplica';}else{
document.getElementById("doscifrast_rete").value = '$' + (valortodos100*0.8).formatMoney(0,'.');}
    
}
</script>
<div style="margin: 0 auto; margin-top: 20px; margin-bottom: 20px;"><form id="multiplicar">
<div style="border: 3px #2f529c solid; -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px; padding: 10px;">
<table style="text-align: center;" border="0" width="100%" cellspacing="0" cellpadding="2">
<tbody>
<tr>
<td colspan="2">
    <div style="-webkit-border-radius: 20px; -moz-border-radius: 20px; border-radius: 20px; background-color: #2f529c; color:white" align="center"><h3><strong style="color:white">TU APUESTA</strong></h3></div>
</td>
</tr>
<tr>
<td colspan="2"><span class="style3" style="font-size: 10pt;">

<input id="valor" type="number" name="valor" onkeydown="multiplicar()" onkeyup="multiplicar()" min="0" placeholder="0" required="" style="width: 100%; margin-bottom: 0px;">

</span></td>
</tr>
<tr>
<td colspan="2">
<div class="" style="font-size: 10px;" align="center">* Valor redondeando IVA:</div>
</td>
</tr>
<tr>
<td><span style="font-size: 10pt;"> <input id="valoriva" style="width: 95%; border: 2px #2f529c solid; margin-bottom: 0px;" disabled="disabled" name="valoriva" type="text" /> </span></td>
<td><span style="font-size: 10pt;"> <input id="valorivatodos" class="style4 style3" style="width: 95%; border: 2px #2f529c solid; margin-bottom: 0px;" disabled="disabled" name="valorivatodos" type="text" /> </span></td>
</tr>
<tr>
<td><span class="style4 style4 style3" style="font-size: 10pt;"><strong>1 SIGNO</strong></span></td>
<td><span class="style4 style4 style3" style="font-size: 10pt;"><strong>TODOS LOS SIGNOS</strong></span></td>
</tr>
<tr>
<td>
<div style="-webkit-border-radius: 20px; -moz-border-radius: 20px; border-radius: 20px; background-color: #2f529c; color:white" align="center">Valor ganado <strong style="color:white">2 cifras + signo</strong></div>
</td>
<td>
<div style="-webkit-border-radius: 20px; -moz-border-radius: 20px; border-radius: 20px; background-color: #2f529c; color:white" align="center">Valor ganado <strong style="color:white">2 cifras</strong></div>
</td>
</tr>
<tr>
<td><span style="font-size: 10pt;"><input id="doscifras" class="style4 style3" style="width: 95%; margin-bottom: 0px;" disabled="disabled" name="doscifras" type="text" /></span></td>
<td><span style="font-size: 10pt;"><input id="doscifrast" class="style4 style3" style="width: 95%; margin-bottom: 0px;" disabled="disabled" name="doscifrast" type="text" /></span></td>
</tr>
<tr>
<td colspan="2">
<div style="font-size: 10px;" align="center">** Valor ganado despues de retención</div>
</td>
</tr>
<tr>
<td><span style="font-size: 10pt;"> <input id="doscifras_rete" class="style4 style3" style="width: 95%; margin-bottom: 0px;" disabled="disabled" name="doscifras_rete" type="text" /> </span></td>
<td><span style="font-size: 10pt;"> <input id="doscifrast_rete" class="style4 style3" style="width: 95%; margin-bottom: 0px;" disabled="disabled" name="doscifrast_rete" type="text" /> </span></td>
</tr>
<tr>
<td>
<div style="-webkit-border-radius: 20px; -moz-border-radius: 20px; border-radius: 20px; background-color: #2f529c; color:white" align="center">Valor ganado <strong style="color:white">3 cifras + signo</strong></div>
</td>
<td>
<div style="-webkit-border-radius: 20px; -moz-border-radius: 20px; border-radius: 20px; background-color: #2f529c; color:white" align="center">Valor ganado <strong style="color:white">3 cifras</strong></div>
</td>
</tr>
<tr>
<td><span style="font-size: 10pt;"><input id="trescifras" class="style4 style3" style="width: 95%; margin-bottom: 0px;" disabled="disabled" name="trescifras" type="text" /></span></td>
<td><span style="font-size: 10pt;"><input id="trescifrast" class="style4 style3" style="width: 95%; margin-bottom: 0px;" disabled="disabled" name="trescifrast" type="text" /></span></td>
</tr>
<tr>
<td colspan="2">
<div style="font-size: 10px;" align="center">** Valor ganado despues de retención</div>
</td>
</tr>
<tr>
<td><span style="font-size: 10pt;"> <input id="trescifras_rete" class="style4 style3" style="width: 95%; margin-bottom: 0px;" disabled="disabled" name="trescifras_rete" type="text" /> </span></td>
<td><span style="font-size: 10pt;"> <input id="trescifrast_rete" class="style4 style3" style="width: 95%; margin-bottom: 0px;" disabled="disabled" name="trescifrast_rete" type="text" /> </span></td>
</tr>
<tr>
<td>
<div style="-webkit-border-radius: 20px; -moz-border-radius: 20px; border-radius: 20px; background-color: #2f529c; color:white" align="center">Valor ganado <strong style="color:white">4 cifras + signo</strong></div>
</td>
<td>
<div style="-webkit-border-radius: 20px; -moz-border-radius: 20px; border-radius: 20px; background-color: #2f529c; color:white" align="center">Valor ganado <strong style="color:white">4 cifras</strong></div>
</td>
</tr>
<tr>
<td><span style="font-size: 10pt;"><input id="cuatrocifras" class="style4 style3" style="width: 95%; margin-bottom: 0px;" disabled="disabled" name="cuatrocifras" type="text" /></span></td>
<td><span style="font-size: 10pt;"><input id="cuatrocifrast" class="style4 style3" style="width: 95%; margin-bottom: 0px;" disabled="disabled" name="cuatrocifrast" type="text" /></span></td>
</tr>
<tr>
<td colspan="2">
<div style="font-size: 10px;" align="center">** Valor ganado despues de retención</div>
</td>
</tr>
<tr>
<td><span style="font-size: 10pt;"> <input id="cuatrocifras_rete" class="style4 style3" style="width: 95%; margin-bottom: 0px;" disabled="disabled" name="cuatrocifras_rete" type="text" /> </span></td>
<td><span style="font-size: 10pt;"> <input id="cuatrocifrast_rete" class="style4 style3" style="width: 95%; margin-bottom: 0px;" disabled="disabled" name="cuatrocifrast_rete" type="text" /> </span></td>
</tr>
</tbody>
</table>
</div>
</form></div>

                
                <!-- Hasta aqui el simulador -->
                
                
                
                
          </div>
          </div>
          <br>
          <br>
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