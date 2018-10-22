<!DOCTYPE html>
<html lang="en">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Plantas Vs Zombies Heores</title>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="main.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <script type="text/javascript">
      function ver(n) {
              document.getElementById("subseccion"+n).style.display="block"
              }
      function ocultar(n) {
              document.getElementById("subseccion"+n).style.display="none"
              }
    </script>
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Plantas VS Zombies Heroes Stats</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="http://localhost/paginaweb/paginaInicioRegoloEspindola/">Inicio
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/paginaweb/formulariog/">Registro</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <!-- Page Content -->
    <div class="container">

      <div class="row">
        <div class="col-lg-12">
          <h1 class="my-4">Cartas Disponibles en el Juego</h1>
        </div>      
      </div>

      <div class="row">
        <div class="col-lg-6">
          <div class="menu">
            <li id="seccion1" onload="ocultar(1)" onmouseover="ver(1)" onmouseout="ocultar(1)">
              <a   class="nav-item">Filtrar por:</a>
              <div id="subseccion1">
                <a class ="desplegables">clase</br></a>
                <a class ="desplegables">ataque</br></a>
                <a class ="desplegables">coste</br></a>
                <a class ="desplegables">salud</br></a>
                <a class ="desplegables">rareza</br></a>
                <a class ="desplegables">expancio</br></a>
              </div>
            </li>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="menu">
            <li id="seccion2" onload="ocultar(2)" onmouseover="ver(2)" onmouseout="ocultar(2)">
              <a>Ordenar por:</a>
              <div id="subseccion2">
                <a class ="desplegables">clase</br></a>
                <a class ="desplegables">ataque</br></a>
                <a class ="desplegables">coste</br></a>
                <a class ="desplegables">salud</br></a>
                <a class ="desplegables">rareza</br></a>
                <a class ="desplegables">expancio</br></a>
              </div>
            </li>
          </div>   
        </div>
      </div>
      <div class=row>
        <div class="col-lg-12">
          <div class="base-datos">
            <?php  
                include("conxion.php");
                $con = new conxion;
                $con->recuperarDatos();
            ?>
            nacho </br>
            nacho </br>
            nacho </br>
            nacho </br>
            nacho </br>
            nacho </br>
            nacho </br>
            nacho </br>
            nacho </br>
            nacho </br>
            nacho </br>
            nacho </br>
            nacho </br>
            nacho </br>
            nacho </br>
            nacho </br>
            nacho </br>
            nacho </br>            nacho </br>
            nacho </br>
            nacho </br>
            nacho </br>
            nacho </br>
            nacho </br>
          </div>

        </div>

      </div>
    </div>
    <!-- /.container -->
  
    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Proximamente nuevas cartas</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>      
  </body>

</html>
