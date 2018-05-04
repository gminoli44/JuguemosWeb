<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body style="background-color: #2f529c">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
        <br><br><br><br><br><br><br><br>
            <div>
                <img style="margin-left: -100px" width="500px" src="../logo.png">
            </div>
            <br><br>        
            <form class="m-t" role="form" id="login" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <button onclick="validar()" type="button" class="btn btn-sm btn-white btn-block">Ingresar</button>
            </form>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
       function validar(){
        
            $.ajax({
                type: "POST",
                url:"validar_login.php",
                data: "username=" + $("#username").val() + "&password=" + $("#password").val(),
                success: function(response){


                    if (response==1){
                        window.location.href = "agregar_resultados.php";
                    }else{
                        alert("usuario o contraseña incorrectos");
                    }
                   // $('#ok').show().fadeIn(2000);
                   // $("#ok").html(response);
                   // $("#ok").show().delay(4000).fadeOut();
                    

                   // $('#loginemp').slideToggle('slow');
                  //  $('#loginemp').show().fadeIn(1000);
                }
            });
        }
        
    </script>
</body>

</html>
