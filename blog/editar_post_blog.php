<script src="../blog/tinymce/plugin/tinymce/js/tinymce/tinymce.min.js"></script>
                <script>tinymce.init({ selector:'#contenido',height: 500, width: 1080,statusbar: false,menubar: false,plugins: [
                            "advlist autolink autosave link image lists charmap preview hr anchor spellchecker",
                            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                            "table contextmenu directionality emoticons template textcolor paste textcolor colorpicker textpattern"
                            ],toolbar1: "newdocument | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | cut copy paste | bullist numlist | outdent indent | undo redo | link unlink image media | preview | forecolor backcolor | formatselect",
                        toolbar3: "subscript superscript | emoticons",
                        toolbar_items_size: 'small',content_css: [
                            '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
                            '//www.tinymce.com/css/codepen.min.css'
                            ]
                });
                </script>

 <?php

require_once('../conexion.php');

        $id = $_REQUEST['id'];
        $query = "SELECT * FROM post WHERE id_post='$id'";
        $resultado = $link->query($query);
        while($row = $resultado->fetch_assoc()){

?>

<div class="row">

                            <div class="col-lg-12">

                                <div class="card-box">
                                    
                                <form action="logic/procesar_modificar_post.php?id=<?php echo $row['id_post']?>" method="POST" >
                                    <input type="text" class="form-control" name="titulo" id="" value="<?php echo $row['titulo_post']; ?>" placeholder="Titulo del post"><br>
                                    <input type="text" class="form-control" value="<?php echo $row['autor_post']; ?>" name="autor" id="" placeholder="Nombre del Autor"><br>
                                    <textarea name="descripcion" class="form-control" id="descripcion" placeholder="descripcion del post"><?php echo htmlspecialchars($row['descripcion_post']); ?></textarea><br>
                                    <div class="tags-default">
                                        <input type="text" name="categoria" value="<?php echo $row['categoria_post']; ?>" data-role="tagsinput" placeholder="Escribe Categorías..."/>
                                    </div><br>

                                    
                                     
                                    <label for="">Contenido del Post</label>
                                    <textarea name="contenido" id="contenido"><?php echo htmlspecialchars($row['contenido_completo_post']); ?></textarea>
                                    
                                    <br><input type="submit" class="btn btn-danger" value="Guardar y Publicar">
                                </form>
                                <br><br><br>
                                <form action="logic/procesar_modificar_post_imagen.php?id=<?php echo $row['id_post']?>" method="POST" enctype="multipart/form-data">
                                      <img src="<?php echo "logic/imagenes/".$row["imagen_post"].""?>" width='370'><br><br><br>
                                      <input type="file" name="imagen" id="imagen"><br>
                                      <br><input type="submit" class="btn btn-danger" value="Modificar Imagen">
                                </form>  

                                    
                                </div>
                                <?php } ?>  
                            </div><!-- end col -->

                          
                            </div><!-- end col -->
                        </div>
                    

                    </div> <!-- container -->

                </div> <!-- content -->