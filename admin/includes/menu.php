 <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <?php
                            if($_SESSION["ID"]==1){
                            ?>
                            <img alt="image" class="img-circle" src="http://todos-los-horarios.co/resize.jpg?id=192444477836433" width="50px" />
                            </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Administrador</strong>
                            <?php } else if($_SESSION["ID"]==2){ ?>
                            <img alt="image" class="img-circle" src="http://todos-los-horarios.co/resize.jpg?id=192444477836433" width="50px" />
                            </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Loteria</strong>
                            <?php } ?>
                             
                             </span> <span class="text-muted text-xs block">Juguemos Popayán </span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="mailbox.html">Mailbox</a></li>
                                <li class="divider"></li>
                                <li><a href="login.html">Logout</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            IN+
                        </div>
                    </li>
                    <li>
                        <a href="agregar_resultados.php"><i class="fa fa-check-square"></i> <span class="nav-label">Agregar Loteria</span></a>
                    </li>

                    <li>
                        <a href="ver_resultados.php"><i class="fa fa-window-maximize"></i> <span class="nav-label">Ver resultados</span></a>
                    </li>
                    <?php 
                    if($_SESSION["ID"]==1){
                        
                    ?>
                    <li>
                        <a href="slide_ppal.php"><i class="fa fa-caret-square-o-right"></i> <span class="nav-label">Slide Principal</span></a>
                    </li>
                    <li>
                        <a href="slide.php"><i class="fa fa-th-large"></i> <span class="nav-label">Slides Aliados</span></a>
                    </li>
                    <li>
                        <a href="convenios.php"><i class="fa fa-eercast"></i> <span class="nav-label">Convenios</span></a>
                    </li>
                    
                    <li>
                        <a href="blog_view_post.php"><i class="fa fa-book"></i> <span class="nav-label">Blog</span></a>
                    </li>

                    
                    <li>
                        <a href="mapa.php"><i class="fa fa-map-marker"></i> <span class="nav-label">Mapa</span></a>
                    </li>
                    <li>
                        <a href="nuestras_sedes.php"><i class="fa fa-superpowers"></i> <span class="nav-label">Sedes</span></a>
                    </li>
                    <?php } ?>

                </ul>

            </div>
        </nav>


        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li><?php
                    if($_SESSION["ID"]==1){
                    ?>
                    <span class="m-r-sm text-muted welcome-message">Bienvenido al panel de Administrador de Juguemos REDCA.</span>
                    <?php }else { ?>
                    <span class="m-r-sm text-muted welcome-message">Bienvenido -  Juguemos REDCA.</span>  
                    <?php } ?>

                </li>
                <li>
                    <a href="logout.php">
                        <i class="fa fa-sign-out"></i> Cerrar Sesión
                    </a>
                </li>
            </ul>

        </nav>
        </div>

