<!DOCTYPE html>
<html>
<?php 
session_start();
if(!isset($_SESSION["USERNAME"])){
    header("location: login.php");
}

?>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Juguemos | Agregar Resultados</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

  <?php include("includes/menu.php"); ?>

        
           
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Agregar Resultados de Loterias</h5>
                        </div>
                        <div class="ibox-content">
                            <form method="post" action="loterias/create2.php" class="form-horizontal">

                                <div class="form-group"><label class="col-sm-2 control-label">Seleccionar Loteria</label>
                                    <div class="col-sm-10">
                                        <select class="form-control m-b" name="loteria">
                                           <?php
                                        require("../conexion.php");
                                        $re=mysqli_query($link,"select * from loterias")or die();
                                        while ($loteria=mysqli_fetch_array($re)) {
                                        ?>
                                        <option value="<?php echo $loteria['id']; ?>"><?php echo $loteria['nombre']; ?></option>
                                        <?php } ?>   
                                        </select>                                    
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Resultado</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="resultado"> 
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                               <div class="form-group"><label class="col-sm-2 control-label">Fecha</label>
                                    <div class="col-sm-10"><input type="date" class="form-control" name="fecha"> 
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-primary" type="submit">Guardar</button>
                                    </div>
                                </div>
                            </form>
                            <div id="okk"></div>
                        </div>
                    </div>
                </div>
                  <div class="col-lg-12">
                    <div class="ibox float-e-margins">

                        <div class="ibox-title">
                            <h5>Agregar Lotería</h5>
                        </div>

                        <div class="ibox-content">
                            <form method="post" action="loterias/create.php" class="form-horizontal">
                                <div class="form-group"><label class="col-sm-2 control-label">Nombre</label>
                                    <div class="col-sm-10"><input name="nombre" type="text" class="form-control"> 
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-primary" type="submit">Guardar</button>
                                    </div>

                                </div>
                                
                            </form>
                            <div id="ok"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="ibox float-e-margins">

                        <div class="ibox-title">
                            <h5>Ver Loterías</h5>
                        </div>

                        <div class="ibox-content">
                            <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Lotería </th>
                                    <th>Eliminar</th>
                                    </tr>
                            </thead>
                            <?php
                            $re=mysqli_query($link,"select * from loterias")or die();
                            while ($f=mysqli_fetch_array($re)) {
                            ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $f['nombre'];?></td>
                                    
                                    <td><a href="loterias/eliminar_loteria.php?id=<?php echo $f['id']; ?>">Eliminar</a></td>
                                </tr>
                            </tbody>
                            <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="pull-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> Juguemos &copy; 2017
            </div>
        </div>

        </div>
        </div>


    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- iCheck -->

    <script src="js/plugins/iCheck/icheck.min.js"></script>
        
        <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    

    
</body>


</html>
