<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap-4.5.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Registro</title>
    <link rel="icon" type="image/png" href="./imagenes/Logo.png">
</head>
<body id="fondo">
    <div class="register-box">
        <div class="row no-gutters" id="fila1">
            <div class="col-md-4" id="contenedorImg">
                <img src="./imagenes/Logo.png" alt="" id="imgRegistro">
            </div>
            <div class="col-md-3" id="linea">
            </div>
            <div class="col-md-5" id="contenedorForm">
                <h2 id="TituloRegistro">Bienvenid@ a la familia</h2>
                <br>
                <br>
                <form method="POST" action="{{ route('/Registro') }}" id="FormularioRegis">
                    {{csrf_field()}}
                    <!-- Correo electronico -->
                    <span><i class="fa fa-envelope-o fa-2x"></i></span>
                    <input type="text" name="" id="" placeholder="Correo electronico">
                    <br>
                    <br>
                    <!-- Nombre -->
                    <span><i class="fa fa-user fa-2x"></i></span>
                    <input type="text" name="" id="" placeholder="Nombre de usuario">
                    <br>
                    <br>
                    <!-- Contraseña -->
                    <span><i class="fa fa-lock fa-2x"></i></span>
                    <input type="text" name="" id="" placeholder="Contraseña">
                    <br><br>
                    <button id="Regisbuton">Crear cuenta</button>
                    <br><br>
                    <a href="/Login">Ya tienes cuenta</a>
                </form>
            </div>
            </div>
        <div class="row no-gutters" id="fila">
        </div>
        </div>
    </div>
    <script src="bootstrap-4.5.0-dist/js/jquery-3.5.1.min.js"></script>
    <script src="bootstrap-4.5.0-dist/js/bootstrap.min.js.map"></script>
</body>
</html>