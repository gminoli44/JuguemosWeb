<!DOCTYPE html>
<html dir="ltr" lang="en">
<?php include("conexion.php"); 
$id = $_REQUEST['id'];
?>
<!-- Mirrored from thememascot.net/demo/personal/f/seoservice/j/demo/blog-single-right-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Sep 2017 01:44:21 GMT -->
<head>

<!-- Meta Tags -->
<?php
  $query = "SELECT * FROM post WHERE id_post = $id";
  $resultado = $link->query($query);
  while($row = $resultado->fetch_assoc()){
  
?>
 <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Juguemos redca popayán" />
<meta name="keywords" content="juguemos, apuestas, popayan, chance, redca" />
<meta name="author" content="Juguemos Redca" />

<meta property="og:title" content="<?php echo $row['titulo_post']; ?>" />
<meta property="og:type" content="Juguemos redca popayán" />
<meta property="og:url" content=" http://www.juguemos.com.co/resultados_p.php" />
<meta property="og:image" content="<?php echo "blog/logic/imagenes/".$row["imagen_post"].""?>"/>
<meta property="og:description" content="Juguemos redca popayan sitio oficial" />
<meta property="og:site_name" content="Juguemos" />
<!-- Page Title -->

<title><?php echo $row['titulo_post']; }?></title>

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
<div id="wrapper" class="clearfix">
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
<?php

function urls_amigables($url) {
      // Tranformamos todo a minusculas
      $url = strtolower($url);
      //Rememplazamos caracteres especiales latinos
      $find = array('á', 'é', 'í', 'ó', 'ú', 'ñ');
      $repl = array('a', 'e', 'i', 'o', 'u', 'n');
      $url = str_replace ($find, $repl, $url);
      // Añadimos los guiones
      $find = array(' ', '&', '\r\n', '\n', '+');
      $url = str_replace ($find, '-', $url);
      // Eliminamos y Reemplazamos otros carácteres especiales
      $find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');
      $repl = array('', '-', '');
      $url = preg_replace ($find, $repl, $url);
      return $url; 
}

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

  function fechaMes ($fecha) {
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
  $rest = substr($nombreMes, 0, 3);
  return $rest;
  }

  function fechaDia ($fecha) {
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
  return $numeroDia;
}
?>

    <?php
        $query = "SELECT * FROM post WHERE id_post = $id ORDER BY id_post DESC";
        $resultado = $link->query($query);
        while($row = $resultado->fetch_assoc()){
        $id = $row['id_post'];
        $query2 = mysqli_query($link, "SELECT * FROM comentarios_post WHERE post_id = '$id'");

        //recibo los valores de la consulta en diferentes variables
        $id_articulo = $row['id_post'];
         
        //limpiamos el título con la función que hay al comienzo del artículo
        $titulo = urls_amigables($row['titulo_post']);
         
        echo '<a href="blog/'.$id_articulo.'/'.$titulo.'" title="'.$row["titulo_post"].'"></a>';

    ?>
    

    <!-- Section: Blog -->
    
    <section>

      <div class="container mt-30 mb-30 pt-30 pb-30">
        <div class="row">
          <div class="col-md-9">
            <div class="blog-posts single-post">
              <article class="post clearfix mb-0">
                <div class="entry-header">
                  <div class="post-thumb thumb"> <img src="<?php echo "blog/logic/imagenes/".$row["imagen_post"].""?>" alt="" class="img-responsive img-fullwidth"> </div>
                </div>
                <div class="entry-content">
                  <div class="entry-meta media no-bg no-border mt-15 pb-20">
                    <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                      <ul>
                       <!--<p><?php echo fechaCastellano($row['fecha_post']); ?></p>-->

                       
                        <li class="font-16 text-white font-weight-600"><?php echo fechaDia($row['fecha_post']) ?></li>
                        <li class="font-16 text-white font-weight-600"><?php echo fechaMes($row['fecha_post']);?></li>
                      </ul>
                    </div>
                    <div class="media-body pl-15">
                      <div class="event-content pull-left flip">
                        <h3 class="entry-title text-white text-uppercase pt-0 mt-0"><a><?php echo $row['titulo_post']; ?></a></h3>
                        <p><i><?php echo $row['descripcion_post']; ?></i></p>
                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> <?php echo mysqli_num_rows($query2)." Comentarios" ?></span>                       
                        
                      </div>
                    </div>
                  </div>
                  <p class="mb-15"><?php echo $row['contenido_completo_post']; ?></p>
                  <!--
                  <div class="mt-30 mb-0">
                    <h5 class="pull-left flip mt-10 mr-20 text-theme-colored">Compartir:</h5>
                    <ul class="styled-icons icon-circled m-0">
                      <li><a href="#" data-bg-color="#3A5795"><i class="fa fa-facebook text-white"></i></a></li>
                      <li><a href="#" data-bg-color="#55ACEE"><i class="fa fa-twitter text-white"></i></a></li>
                      <li><a href="#" data-bg-color="#A11312"><i class="fa fa-google-plus text-white"></i></a></li>
                    </ul>
                  </div>-->
                </div>
              </article>
<!-- AddToAny BEGIN -->
<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
<a class="a2a_button_facebook"></a>
<a class="a2a_button_twitter"></a>
<a class="a2a_button_google_plus"></a>
</div>
<script async src="https://static.addtoany.com/menu/page.js"></script>
<!-- AddToAny END -->
              <div class="tagline p-0 pt-20 mt-5">
                <div class="row">
                  <div class="col-md-8">
                    <div class="tags">
                      <p class="mb-0"><i class="fa fa-tags text-theme-colored"></i> <span>Tags:</span> <?php echo $row['categoria_post']; ?></p>
                      <p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="author-details media-post">
          
                <div class="post-right">
                  
                  
                </div>
                <div class="clearfix"></div>
              </div>

              <div class="comments-area">

                <h5 class="comments-title">Comentarios</h5>
                <ul class="comment-list">
                <li>
                  <div class="media comment-author"> <a class="media-left" href="#"></a>
                    <div class="media-body">
                    <?php
                      $query = "SELECT * FROM comentarios_post WHERE post_id = '$id' ORDER BY id_comentario ";
                        $resultado = $link->query($query);
                        while($row = $resultado->fetch_assoc()){
                      ?>
                       <div class="media comment-author nested-comment"> <a href="#" class="media-left"></a>
                          <div class="media-body p-20 bg-lighter">
                            <h5 class="media-heading comment-heading"><?php echo $row['usuario_comentario']; ?></h5>
                            <div class="comment-date"><?php echo fechaCastellano($row['fecha']); ?></div>
                            <p><?php echo $row['comentario']; ?></p>
                          </div>
                        </div>
                        <?php } ?>
                      </div>
                    </div>
                </li>
                <br>
                <li>
                  <div id="newmessage"></div>
                </li>
                </ul>
              </div>
              <br>
              <div class="comment-box">
                <div class="row">
                  <div class="col-sm-12">
                    <h5>Deja un comentario</h5>
                    <div class="row">
                      <form id="form" role="form" method="post">
                        <div class="col-sm-6 pt-0 pb-0">
                          <div class="form-group">
                            <input type="text" class="form-control" required name="name" id="name" placeholder="Nombre">
                            <input style="display: none" type="text" class="form-control" required name="id_post" id="id_post" value="<?php echo $id; ?>">
                          </div>
                          <div class="form-group">
                            <input type="email" required class="form-control" name="email" id="email" placeholder="Email">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <textarea class="form-control" required name="comment" id="comment"  placeholder="Mensaje" rows="7"></textarea>
                          </div>
                           <input name="submit" type="submit" value="enviar" id="enviar-btn" />
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="sidebar sidebar-left mt-sm-30">              
              <div class="widget">
                <h5 class="widget-title line-bottom">Ultimos publicados</h5>
                <div class="latest-posts">
                <?php
                $query = "SELECT * FROM post ORDER BY id_post DESC";
                $resultado = $link->query($query);
                while($row = $resultado->fetch_assoc()){
                ?>
                  <article class="post media-post clearfix pb-0 mb-10">
                    <a class="post-thumb" href="#"><img src="../../../../../../../placehold.it/75x75.png" alt=""></a>
                    <div class="post-right">
                      <h5 class="post-title mt-0"><a href="post.php?id=<?php echo $row['id_post']; ?>"><?php echo $row['titulo_post']; ?></a></h5>
                    </div>
                  </article>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> 
    <?php } ?>
  </div>  
  <!-- end main-content -->

  <!-- Footer -->
  <?php include("footer.php"); ?>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
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


<script type="text/javascript">


$(document).ready(function() {

    $("#enviar-btn").click(function() {

      

        var name = $("input#name").val();
        var email = $("input#email").val();
        var comment = $("textarea#comment").val();
        var id_post = $("input#id_post").val();
        var now = new Date();
        var date_show = now.getDate() + '-' + now.getMonth() + '-' + now.getFullYear() + ' ' + now.getHours() + ':' + + now.getMinutes() + ':' + + now.getSeconds();

        if (name == '') {
            alert('Debe añadir su nombre.');
            return false;
        }
        
        if (comment == '') {
            alert('Debe añadir un comentario.');
            return false;
        }

        if(comment.length < 5){
          alert("El comentario debe ser mas extenso");
          return false;
        }

        if(name.length < 2){
          alert("Debe introducir un nombre valido");
          return false;
        }

        

        function validar_email( email ) 
        {
            var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            return regex.test(email) ? true : false;
        }

        if( !validar_email( email ) )
        {
            alert("El email NO es correcto");
            return false;
        }

        if (email == '') {
            alert('Debe añadir un email.');
            return false;
        }



        


        var dataString = 'name=' + name + '&comment=' + comment + '&id_post=' + id_post + '&email=' + email;

        $.ajax({
                type: "POST",
                url: "blog/comentarios.php",
                data: dataString,
                success: function(response) {

                $('#newmessage').append(' <div class="media comment-author"> <a class="media-left" href="#"></a><div class="media-body"><div class="media comment-author nested-comment"> <a href="#" class="media-left"></a><div class="media-body p-20 bg-lighter"><h5 class="media-heading comment-heading">'+name+'</h5>Publicado: Justo ahora<div class="comment-date"><?php echo $row['fecha']; ?></div><p>'+comment+'</p></div></div></div></div>');
                $("#form")[0].reset();
                }
        });
        return false;
    });
});
</script>
<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-59e82b6661e5c87f"></script> 
</body>

<!-- Mirrored from thememascot.net/demo/personal/f/seoservice/j/demo/blog-single-right-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Sep 2017 01:44:21 GMT -->
</html>