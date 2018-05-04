<div class="header-top sm-text-center p-0" style="background-color: white">
      <div class="container">
        <div class="row">
          <div class="col-md-4 pr-0">
            <div class="widget no-border m-0">
              <ul class="styled-icons icon-flat icon-circled icon-sm-new pull-left flip sm-pull-none sm-text-center mt-sm-15">
                <li class="clearfix"><a class="mt-5 bg-theme-colored3" href="#"><i class="fa fa-facebook text-white"></i></a></li>
                <li class="clearfix"><a class="mt-5 bg-theme-colored3" href="#"><i class="fa fa-twitter text-white"></i></a></li>
                <li class="clearfix"><a class="mt-5 bg-theme-colored3" href="#"><i class="fa fa-twitter text-white"></i></a></li>
                <li class="clearfix"><a class="mt-5 bg-theme-colored3" href="#"><i class="fa fa-google-plus text-white"></i></a></li>
                <li class="clearfix"><a class="mt-5 bg-theme-colored3" href="#"><i class="fa fa-instagram text-white"></i></a></li>
                <li class="clearfix"><a class="mt-5 bg-theme-colored3" href="#"><i class="fa fa-linkedin text-white"></i></a></li>
              </ul>
              <div class="clearfix"></div>
            </div>
          </div>

          <div class="col-md-7">
            <a target="_blank" href="https://www.betplay.com.co"><img width="140px" src="images/betplaylogo.png"></a>
            <a target="_blank" href="https://www.supergiros.com.co/"><img width="100px" src="images/bloque203236.png"></a>
            <a target="_blank" href="https://colombiamayor.co/index.html"><img width="100px" src="images/logocmc.png"></a>
            
          </div>
          <div class="col-md-1"><a class="btn btn-colored btn-flat btn-theme-colored2 pb-10 ajaxload-popup" href="ajax-load/modal-contact-form.html">Escribenos</a>
            <div class="clearfix"></div></div>
        </div>
      </div>
    </div>
    <div class="header-nav"> 
      <div class="header-nav-wrapper navbar-scrolltofixed bg-theme-colored">
        <div class="container">
          <nav id="menuzord" class="menuzord default no-bg">
            <a class="menuzord-brand flip xs-pull-center" href="index-mp-layout12.php"><img src="images/logo.png" alt="" style="max-height: 63px;"></a>
            <ul class="menuzord-menu">
              <li class="active"><a href="index-mp-layout12.php">Inicio</a></li>
              <li><a>Quienes Somos</a>
                  <ul class="dropdown">
                  <li><a href="misionvision.php">Misión y Visión</a></li>
                  <li><a href="valoresprincipios.php">Valores y Principios</a></li>
                  <li><a href="politicasor.php">Politicas Organizacionales</a></li>
                  <li><a href="objetivos.php">Objetivos de Calidad</a></li>
                  <li><a href="politicasdatos.php">Politicas de Tratamiento de Datos</a></li>
                </ul>
              </li>
              <li><a href="#">Chance</a>                  
                <ul class="dropdown">
                  <li><a href="chance.php">Chance</a></li>
                  <li><a href="doblechance.php">Doble Chance</a></li>
                  <li><a href="astro.php">Astro</a></li>
                </ul>
              </li>
              <li><a href="#">Loteria</a>                  
                <ul class="dropdown">
                  <li><a href="loteriafisica.php">Loteria Fisica</a></li>
                  <li><a href="loteriavirtual.php">Loteria Virtual</a></li>
                </ul>
              </li>
              <li><a href="#">Servicios</a>                  
                <ul class="dropdown">
                  <li><a href="recargas.php">Recargas</a></li>
                  <li><a href="pagosrecaudos.php">Pagos y Recaudos</a></li>
                  <li><a href="giros.php">Giros</a></li>
                  <li><a href="soat.php">SOAT</a></li>
                </ul>
              </li>
              <li><a href="javascript:void(0)">Lo Ultimo</a>
                <div class="megamenu">
                  <div class="megamenu-row">
                    <div class="col3">
                      <ul class="list-unstyled list-dashed">
                        <li>
                          <h5 class="pl-10"><strong>Enlaces Rapidos</strong></h5>
                        </li>
                        <li><a href="chance.php">Chance</a></li>
                        <li><a href="doblechance.php">Doble Chance</a></li>
                        <li><a href="astro.php">Astro</a></li>
                        <li><a href="loteriafisica.php">Loteria</a></li>
                        <li><a href="recargas.php">Recargas</a></li>
                        <li><a href="pagosrecaudos.php">Pagos y Recaudos</a></li>
                        <li><a href="giros.php">Giros</a></li>
                        <li><a href="soat.php">SOAT</a></li>
                      </ul>
                    </div>
                    <div class="col5">
                      <h5 class=""><strong>Novedades:</strong></h5>
                      <?php
                      $query = "SELECT * FROM post ORDER BY id_post DESC limit 1";
                      $resultado = $link->query($query);
                      while($row = $resultado->fetch_assoc()){
                      ?>

                      <article class="post clearfix">
                        <div class="entry-header">
                          <div class="post-thumb"> <img style="width: 60%" class="img-responsive" src="<?php echo "blog/logic/imagenes/".$row['imagen_post']; ?>" alt=""> </div>
                          <h4 class="entry-title"><a href="post.php?id=<?php echo $row['id_post']; ?>" <?php echo $row['titulo_post']; ?></a></h4>
                        </div>
                        <div class="entry-content">
                          <p class=""><?php echo $row['descripcion_post']; ?></p>
                          <a class="btn btn-default btn-xs" href="post.php?id=<?php echo $row['id_post']; ?>">Leer mas..</a> </div>
                      </article>
                      <?php } ?>
                    </div>
                    <div class="col4">
                      <h5 class=""><strong>Ultimas noticias:</strong></h5>
                      <div class="list-dashed">
                      <?php
                      $query = "SELECT * FROM post ORDER BY id_post DESC limit 4";
                      $resultado = $link->query($query);
                      while($row = $resultado->fetch_assoc()){
                      ?>
                        <article class="post media-post clearfix pb-0 mb-10"> <a href="post.php?id=<?php echo $row['id_post']; ?>" class="post-thumb"><img width="50px" height="50px" src="<?php echo "blog/logic/imagenes/".$row['imagen_post']; ?>"></a>
                          <div class="post-right">
                            <h5 class="post-title mt-0"><a href="post.php?id=<?php echo $row['id_post']; ?>"><?php echo $row['titulo_post']; ?></a></h5>
                            <p><?php echo fechaCastellano($row['fecha_post']); ?></p>
                          </div>
                        </article>
                        <?php } ?>                 
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li><a href="nuestras_sedes.php">Nuestras sedes</a></li>
               <li class="active"><a href="resultados_p.php">Resultados</a></li>
            </ul>
          </nav>
        </div>
      </div>
      </div>
