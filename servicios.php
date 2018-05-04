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
<title>Juguemos REDCA - Servicios</title>

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
    <section class="inner-header" data-bg-img="images/pattern/p17.jpg">
      <div class="container pt-100 pb-100">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title text-white">Servicios</h2>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: About -->
    <section id="about">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <h3 class="text-theme-colored3 text-uppercase mt-50 mt-sm-0 mb-20">Seo Monitoring Tool</h3>
              <p class="lead">Search engine optimization (SEO) is the science/art of increasing traffic to a website by helping it rank higher in organic, or non-paid, search results. The process of maximizing the number of visitors to a particular website by ensuring that the site appears high on the list of results returned by a search engine. SEO is a marketing discipline focused on growing visibility in organic (non-paid) search engine results.</p>
              <a href="#" class="btn btn-theme-colored2 btn-new mt-10 mb-sm-30">Read More</a>
            </div>
            <div class="col-sm-12 col-md-6">
              <img src="images/services/4.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: -->
    <section>
      <div class="container pt-0">
        <div class="section-content">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <img src="images/services/4.png" alt="">
            </div>
            <div class="col-sm-12 col-md-6">
              <h3 class="text-theme-colored3 text-uppercase mt-50 mt-sm-0 mb-20">Market Analysis</h3>
              <p class="lead">Search engine optimization (SEO) is the science/art of increasing traffic to a website by helping it rank higher in organic, or non-paid, search results. The process of maximizing the number of visitors to a particular website by ensuring that the site appears high on the list of results returned by a search engine. SEO is a marketing discipline focused on growing visibility in organic (non-paid) search engine results.</p>
              <a href="#" class="btn btn-theme-colored2 btn-new mt-10 mb-sm-30">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Section: Case Study -->
    <section class="divider parallax layer-overlay overlay-dark-9" data-bg-img="images/pattern/p111.jpg" data-parallax-ratio="0.7">
      <div class="container pb-0">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="mt-0 line-height-1 text-white">Case Studies</h2>
              <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid pt-0">
        <div class="row">
          <div class="col-md-12">
            <div class="owl-carousel-5col" data-dots="true">
              <div class="item">
                <div class="campaign">
                  <div class="thumb">
                    <img src="images/project/so1.jpg" alt="" class="img-fullwidth">
                    <div class="campaign-overlay-seo">
                      <div class="campaign-details-seo">
                        <a href="#"><h4>Multipurpose Fully Documented Projects</h4></a>
                        <div class="mt-10 mb-20 mb-sm-5">
                          <ul class="list-inline text-theme-colored2 clearfix mt-10">
                            <li class="pull-left flip pr-0">Rank: <span class="font-weight-700">3</span></li>
                            <li class="pull-right flip pr-0">Time: <span class="font-weight-700">2 Months</span></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="campaign">
                  <div class="thumb">
                    <img src="images/project/so1.jpg" alt="" class="img-fullwidth">
                    <div class="campaign-overlay-seo">
                      <div class="campaign-details-seo">
                        <a href="#"><h4>Multipurpose Fully Documented Projects</h4></a>
                        <div class="mt-10 mb-20 mb-sm-5">
                          <ul class="list-inline text-theme-colored2 clearfix mt-10">
                            <li class="pull-left flip pr-0">Rank: <span class="font-weight-700">3</span></li>
                            <li class="pull-right flip pr-0">Time: <span class="font-weight-700">2 Months</span></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="campaign">
                  <div class="thumb">
                    <img src="images/project/so2.jpg" alt="" class="img-fullwidth">
                    <div class="campaign-overlay-seo">
                      <div class="campaign-details-seo">
                        <a href="#"><h4>Multipurpose Fully Documented Projects</h4></a>
                        <div class="mt-10 mb-20 mb-sm-5">
                          <ul class="list-inline text-theme-colored2 clearfix mt-10">
                            <li class="pull-left flip pr-0">Rank: <span class="font-weight-700">3</span></li>
                            <li class="pull-right flip pr-0">Time: <span class="font-weight-700">2 Months</span></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="campaign">
                  <div class="thumb">
                    <img src="images/project/so3.jpg" alt="" class="img-fullwidth">
                    <div class="campaign-overlay-seo">
                      <div class="campaign-details-seo">
                        <a href="#"><h4>Multipurpose Fully Documented Projects</h4></a>
                        <div class="mt-10 mb-20 mb-sm-5">
                          <ul class="list-inline text-theme-colored2 clearfix mt-10">
                            <li class="pull-left flip pr-0">Rank: <span class="font-weight-700">3</span></li>
                            <li class="pull-right flip pr-0">Time: <span class="font-weight-700">2 Months</span></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="campaign">
                  <div class="thumb">
                    <img src="images/project/so2.jpg" alt="" class="img-fullwidth">
                    <div class="campaign-overlay-seo">
                      <div class="campaign-details-seo">
                        <a href="#"><h4>Multipurpose Fully Documented Projects</h4></a>
                        <div class="mt-10 mb-20 mb-sm-5">
                          <ul class="list-inline text-theme-colored2 clearfix mt-10">
                            <li class="pull-left flip pr-0">Rank: <span class="font-weight-700">3</span></li>
                            <li class="pull-right flip pr-0">Time: <span class="font-weight-700">2 Months</span></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="campaign">
                  <div class="thumb">
                    <img src="images/project/so1.jpg" alt="" class="img-fullwidth">
                    <div class="campaign-overlay-seo">
                      <div class="campaign-details-seo">
                        <a href="#"><h4>Multipurpose Fully Documented Projects</h4></a>
                        <div class="mt-10 mb-20 mb-sm-5">
                          <ul class="list-inline text-theme-colored2 clearfix mt-10">
                            <li class="pull-left flip pr-0">Rank: <span class="font-weight-700">3</span></li>
                            <li class="pull-right flip pr-0">Time: <span class="font-weight-700">2 Months</span></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Clients -->
    <section class="clients bg-theme-colored3">
      <div class="container pt-10 pb-10">
        <div class="row">
          <div class="col-md-12">
            <!-- Section: Clients -->
            <div class="owl-carousel-6col text-center">
              <div class="item"> <a href="#"><img src="images/clients/w1.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w2.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w3.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w4.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w5.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w6.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w3.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w4.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w5.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w6.png" alt=""></a></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: -->
    <section id="service" class="">
      <div class="container pb-70">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
              <h2 class="mt-0 line-height-1 text-center text-uppercase">Seo <span class="text-theme-colored3">Services</span></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem temporibus quisquam voluptas natus, provident porro et odio perferendis ipsam, amet sint</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-3">
              <div class="icon-box-new media text-center sm-text-center mb-sm-10 p-20 pt-40"> <a href="#" class="icon icon-circled icon-md flip"><i class="flaticon-seo-technology-7"></i></a>
                <div class="media-body">
                  <h4 class="heading">Site Mapping</h4>
                  <p>Lorem ipsum dolor sit , elit.Acque quidem eaque, totam magni cumque.</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="icon-box-new media text-center sm-text-center mb-sm-10 p-20 pt-40"> <a href="#" class="icon icon-circled icon-md flip"><i class="flaticon-seo-paper-plane"></i></a>
                <div class="media-body">
                  <h4 class="heading">Ads on Target</h4>
                  <p>Lorem ipsum dolor sit , elit.Acque quidem eaque, totam magni cumque.</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="icon-box-new media text-center sm-text-center mb-sm-10 p-20 pt-40"> <a href="#" class="icon icon-circled icon-md flip"><i class="flaticon-seo-seo-meter"></i></a>
                <div class="media-body">
                  <h4 class="heading">Web Analytics</h4>
                  <p>Lorem ipsum dolor sit , elit.Acque quidem eaque, totam magni cumque.</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="icon-box-new media text-center sm-text-center mb-sm-10 p-20 pt-40"> <a href="#" class="icon icon-circled icon-md flip"><i class="flaticon-seo-pay-per-click-1"></i></a>
                <div class="media-body">
                  <h4 class="heading">Pay Per Click</h4>
                  <p>Lorem ipsum dolor sit , elit.Acque quidem eaque, totam magni cumque.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: -->
    <section class="bg-theme-colored">
      <div class="container">
        <div class="section-title">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-white text-center line-height-1 mt-0">Our Success</h2>
              <p class="text-white-f2 text-center">Lorem ipsum dolor simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                  <div class="funfact">
                    <i class="pe-7s-smile text-white mt-20 font-48 pull-left flip"></i>
                    <div class="ml-60">
                      <h2 class="animate-number text-white-f1 mt-0 mb-0 font-48 line-bottom-testimonial" data-value="754" data-animation-duration="2000">0</h2>
                      <div class="clearfix"></div>
                      <h5 class="text-white-f2">Happy Donators</h5>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s">
                  <div class="funfact">
                    <i class="pe-7s-rocket text-white mt-20 font-48 pull-left flip"></i>
                    <div class="ml-60">
                      <h2 class="animate-number text-white-f1 mt-0 mb-0 font-48 line-bottom-testimonial" data-value="125" data-animation-duration="2500">0</h2>
                      <div class="clearfix"></div>
                      <h5 class="text-white-f2">Success Mission</h5>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                  <div class="funfact">
                    <i class="pe-7s-add-user text-white mt-20 font-48 pull-left flip"></i>
                    <div class="ml-60">
                      <h2 class="animate-number text-white-f1 mt-0 mb-0 font-48 line-bottom-testimonial" data-value="150" data-animation-duration="3000">0</h2>
                      <div class="clearfix"></div>
                      <h5 class="text-white-f2">Volunteer Reached</h5>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                  <div class="funfact">
                    <i class="pe-7s-global text-white mt-20 font-48 pull-left flip"></i>
                    <div class="ml-60">
                      <h2 class="animate-number text-white-f1 mt-0 mb-0 font-48 line-bottom-testimonial" data-value="150" data-animation-duration="3000">0</h2>
                      <div class="clearfix"></div>
                      <h5 class="text-white-f2">Globalization Work</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


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