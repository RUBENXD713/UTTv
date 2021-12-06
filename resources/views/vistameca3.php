<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

    
    <title>UTTv</title>
</head>
<body id="fondo">
    
    <header id="base">
        <div class="letf_area">
          <div class="container" id="menu">
            <div class="row g-2">
               <center> 
                <div class="col-12" id="cubo">
                <a style="text-decoration:none" href="welcome.blade.php">
                    <center><img src="Logo.png" id="logo" alt="logo"></center>
                </a>
                </div>
            </center>
            </div>
            <div class="row g-2">
                <div class="col-12">
                   <center><h3 id="categorias">Categorias</h3></center>
                </div>
            </div>
            <p></p>
            <div class="row g-2">
                <div class="col-12">
                <a style="text-decoration:none" href="mecatronica.php">
                    <button type="button" id="boton" class="btn">Mecatronica</button>
                </a>
                </div>
            </div>
            <p></p>
            <div class="row g-2">
                <div class="col-12">
                <a style="text-decoration:none" href="tics.php">
                    <button type="button" id="boton" class="btn">Tics</button>
                </a>
                </div>
            </div>
            <p></p>
            <div class="row">
                <div class="col-12">
                   <div class="wrapper">
                       <div class="button">
                           <div class="icon"><i class="fa fa-user-plus fa-2x"></i></div>
                           <span>Iniciar Sesion</span>
                       </div>
                   </div>
                </div>
            </div>
          </div>
          <div class="container" id="busqueda" style="text-align: center;">
            <input type="text" id="buscar" placeholder="Buscar...">
            <button class="btn" type="submit">
                <i class="fa fa-search fa-2x" id="prueba"></i>
            </button>
           
            <p style="text-align: center;" class="videossss">Video de: Mecatronica</p>
            <div class="videossss">
    <table class="default" style="text-align: righ;">
      <tr>
          <td class="separation">
          <iframe width="850" height="450" src="https://www.youtube.com/embed/cFaf1_P2Y8c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            
            </td>
      </tr>

    </table>    
  </div>
  <div class="descript">
  <p style="text-align: righ;" class="videossss">Introducción a la teoría Electromagnética Clásica y Modelos Atómicos.</p>
              </div>
          </div>
        </div>
    </header>

    <!-- JavaScript Bundle with Popper -->
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="animaciones.js"></script> -->
</body>
</html>