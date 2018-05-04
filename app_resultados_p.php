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
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
</style>

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
<meta property="og:image" content="img/resultados.png" />

<meta property="og:title" content="Juguemos" />
<meta property="og:type" content="Juguemos redca popayán" />
<meta property="og:url" content=" http://www.juguemos.com.co/resultados_p.php" />
<meta property="og:image" content="img/resultados.png" />
<meta property="og:description" content="Juguemos redca popayan sitio oficial" />
<meta property="og:site_name" content="Juguemos" />


<!-- Page Title -->
<title>Juguemos REDCA - Resultados Juguemos</title>

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
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.10&appId=669977056541304";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <div class="preloader-dot-loading">
        <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
      </div>
    </div>
  
  </div>
  
  <header id="header" class="header">
      <center><img src="images/logo.png" width="100%" style="-webkit-box-shadow: 0px 4px 5px 0px rgba(87,87,87,0.5);
-moz-box-shadow: 0px 4px 5px 0px rgba(87,87,87,0.5);
box-shadow: 0px 4px 5px 0px rgba(87,87,87,0.5);"></center>
  </header>
  
  <!-- Start main-content -->

  <div class="container">
        <div class="row">
        
          <div class="col-md-6 col-xs-12">
           <br><br>
            <div class="blog-posts single-post">
             
             <form method="get" action="app_resultados_p.php">
            <h4>Consulta resultados por fecha</h4>
              <input type="date"  class="form-control m-b" name="fecha">
              <br>
              <center><input type="submit" name="" value="Consultar"></center><br>
              <div class="hr-line-dashed"></div>
          </form> 
          <table style="max-width: 100%" class="table table-striped">
                <thead>
              <tr > 
                <th style="background-color: #2f529c; color: white">Loteria </th>
                <th style="background-color: #2f529c; color: white">Resultado </th>
                </tr>
            </thead>
            <?php
            $timezone  = -5; //(GMT -5:00) EST (U.S. & Canada) 
            $hoy = gmdate("Y-m-j", time() + 3600*($timezone+date("I"))); 
            ?>
            <?php 
            if(isset($_REQUEST['fecha']))
            {
            $fecha=$_REQUEST['fecha'];
            }else {
              $timezone  = -5; //(GMT -5:00) EST (U.S. & Canada) 
              $fecha = gmdate("Y-m-j", time() + 3600*($timezone+date("I")));
              
            }
            ?>
            <H4>Resultados <?php echo fechaCastellano($fecha); ?></H4>
            <?php
            $re=mysqli_query($link,"select nombre, resultado from resultados_loterias INNER JOIN loterias ON loterias.id=resultados_loterias.id_loteria where fecha='$fecha'")or die();
            
            while($f = $re->fetch_assoc()){
                ?>
            <tbody>
              <tr>
                <td><?php echo $f['nombre'];?></td>
                <td><?php echo $f['resultado'];?></td>        
              </tr>
            </tbody>
            <?php } ?>
          </table>
          <!-- Go to www.addthis.com/dashboard to customize your tools --> 
          <div class="addthis_inline_share_toolbox"></div>
            </div>
            <div class="col-sm-12 col-md-6">
              
          </div>
          </div>
         
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
<script>
    $(document).ready(function() {
      var f = new Date();
      var fe = f.getFullYear() + "-" + (f.getMonth() +1) + "-" + f.getDate();

      $.ajax({
                type: "POST",
                url:"admin/loterias/consulta2.php",
                data: "fecha="+fe,
                success: function(response){
                   // $('#ok').show().fadeIn(2000);
                    $("#ok").html(response);
                    $("#ok").show();

                    

                   // $('#loginemp').slideToggle('slow');
                  //  $('#loginemp').show().fadeIn(1000);
                }
            });
    

    $("#getresultfecha").validate({
        
        messages: {
            loteria: "porfavor elegir una.",
        },
        submitHandler: function(form){
            
            $.ajax({
                type: "POST",
                url:"admin/loterias/consulta2.php",
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
    <!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-59e82b6661e5c87f"></script> 
</body>

<!-- Mirrored from thememascot.net/demo/personal/f/seoservice/j/demo/blog-single-right-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Sep 2017 01:44:21 GMT -->
</html>