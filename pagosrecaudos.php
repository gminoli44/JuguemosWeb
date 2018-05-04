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
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Juguemos redca popayán" />
<meta name="keywords" content="juguemos, apuestas, popayan, chance, redca" />
<meta name="author" content="Juguemos Redca" />

<!-- Page Title -->
<title>Juguemos S.A. - Pagos y Recaudos</title>

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
<style type="text/css">

.table_desk{ 
  visibility: hidden; 
  display:none; 
  }

.table_resp{ 
  visibility: hidden; 
  display:none; 
  }

@media only screen and (min-width: 768px)  
{  
.table_desk { 
  visibility: visible; 
  display:inline 
}
}

@media only screen and (max-width: 768px)  
{  
.table_resp { 
  visibility: visible; 
  display:inline 
}
}

</style>

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
 
    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="blog-posts single-post">
              <br>
              <h3 id="aqui" name="aqui" class="text-theme-colored3 text-uppercase mt-50 mt-sm-0 mb-20">Pagos y Recaudos</h3>
              <p class="lead">Juguemos tiene habilitado el servicio de recaudos con 11 convenios empresariales <small>(Click en cada logo para información)</small></p><br>
              <div name="aqui"></div>
                <!-- TABLA DESKTOP START -->   

                <div class="container">
   

   <!-- TABLA NUEVA START -->
    <div id="products" class="row list-group">
      <?php 
        $re=mysqli_query($link,"select * from slide_aliados")or die();
        while ($f=mysqli_fetch_array($re)) {
          $nombre=$f['Nombre'];
          $convenio=$f['convenio'];
          $imagen=$f['Imagen'];
        ?>
        <div  class="item  col-xs-4 col-lg-4">
            <div class="thumbnail" style="border: 0px">
                <a onclick="cambiar('<?php echo $nombre; ?>'); return false;"><img class="group list-group-image" width="63%" src="<?php echo "admin/slide/imagenes/".$imagen.""?>" alt="" /></a>
            </div>
            
        </div>
        <?php } ?>
        
    </div>
</div>




<!-- TABLA NUEVA -->           
<table class="table_desk">
  
<?php 
        $re=mysqli_query($link,"select * from slide_aliados")or die();
        while ($f=mysqli_fetch_array($re)) {
          $nombre=$f['Nombre'];
          ?>
  <div id="<?php echo $nombre; ?>" style="display: none;">
    <b><?php echo $nombre ?></b>
    <?php echo $convenio; ?>  
  </div>
  <?php } ?>
    

 
</table>

<button id="myBtn">Open Modal</button>


<!-- INFO CONVENIOS START -->

    <div id="myModal" class="modal">

      <!-- Modal content -->
      <div class="modal-content">
        <span class="close">&times;</span>
        <p>Some text in the Modal..</p>
      </div>

    </div>

<!-- INFO DE CONVENIOS END -->



<br><br>


<!-- TABLA RESPONSIVE START -->


<!-- TABLA RESPONSIVE END -->

<?php 
        $re=mysqli_query($link,"select * from slide_aliados")or die();
        while ($f=mysqli_fetch_array($re)) {
          $nombre=$f['Nombre'];
          ?>

 <script type="text/javascript">
   function cambiar(esto)
{
  document.getElementById("<?php echo $nombre; ?>").style.display='none';
  
  window.location.href = "#aqui";

  
  vista=document.getElementById(esto).style.display;
  if (vista=='none')
    vista='block';
    

  else
    vista='none';

  document.getElementById(esto).style.display = vista;

}



 </script>
 <?php } ?>

 <script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
              
          </div>
          </div>
          <br><br>
         
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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>
<script src="js/extra.js"></script>
<script src="js/custom.js"></script>

</body>

<!-- Mirrored from thememascot.net/demo/personal/f/seoservice/j/demo/page-about1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Sep 2017 01:44:09 GMT -->
</html>