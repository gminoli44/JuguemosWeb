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

                <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                
                                <h4 class="page-title">Añadir un nuevo Post</h4>
                            </div>
                        </div>


                        <div class="row">

                            <div class="col-lg-12">

                                <div class="card-box">
                                    <form action="logic/procesar_guardar_post.php" method="POST" enctype="multipart/form-data">
                                    <input type="text" class="form-control" name="titulo" id="" placeholder="Titulo del post"><br>
                                    <input type="text" class="form-control" name="autor" id="" placeholder="Nombre del Autor"><br>
                                    <textarea name="descripcion" class="form-control" id="descripcion" placeholder="descripcion del post"></textarea><br>
                                                                       
                                   
                                    
                                    <div class="tags-default">
                                        <input type="text" name="categoria" value="" data-role="tagsinput" placeholder="Escribe Categorías..."/>
                                    </div><br>
                                     <input type="file" name="imagen" id="imagen"><br><br>
                                     
                                    <label for="">Contenido del Post</label>
                                    <textarea name="contenido" id="contenido"></textarea>
                                    
                                    <br><input type="submit" class="btn btn-danger" value="Guardar y Publicar">
                                    </form>

                                    
                                </div>
                            </div><!-- end col -->

                            
                            </div><!-- end col -->
                        </div>
                    

                    </div> <!-- container -->

                </div> <!-- content -->

               

            </div>