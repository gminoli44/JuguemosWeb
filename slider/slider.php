<!doctype HTML>
<html>
    <head>
        <title>Image Slider</title>
        <script src="aslider.js"></script>
        <style>
            .aslide {
                display: none;
            }
            .aslide img {
                max-width: 100%;                
            }
            .aslider {
                width: 90%;
                height: 1200px;
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
    </head>
    <body>        
        <div id="slider" class="aslider" data-duration="10" >
           <?php  
                require_once('../conexion.php');
               $re=mysqli_query($link,"select Imagen from slide WHERE estado = TRUE")or die();
                    while ($f=mysqli_fetch_array($re)) {
                    ?>
            <div class="aslide capa-imagen" data-duration="4">
             <?php echo ('<img src="../admin/slide/imagenes/'.$f["Imagen"].'" width=100%/>'); ?>
            </div>
               <?php }?>
        </div>
    </body>
</html>