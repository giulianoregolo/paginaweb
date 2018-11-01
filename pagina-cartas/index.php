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
        <div class="col-lg-8">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="https://media.contentapi.ea.com/content/dam/eacom/en-us/migrated-images/2016/06/play-pvzheroes-pvzheroes-homepage-hero1.jpg.adapt.crop16x9.1920w.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="https://media.contentapi.ea.com/content/dam/eacom/en-us/migrated-images/2016/06/play-pvzheroes-pvzheroes-homepage-hero1.jpg.adapt.crop16x9.1920w.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="https://media.contentapi.ea.com/content/dam/eacom/en-us/migrated-images/2016/06/play-pvzheroes-pvzheroes-homepage-hero1.jpg.adapt.crop16x9.1920w.jpg" alt="Third slide">
              </div>
            </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
             </div>
           </div>
          
        </div>
        <!-- /.row -->
        <h1 class="my-4">Cartas Disponibles en el Juego</h1>
      </div>

      <div class="row">
        <div class="col-lg-6">
          
          <div class="menu">
            <li id="seccion1" onmouseover="ver(1)" onmouseout="ocultar(1)">
              <a>Filtrar por:</a>
                <div id="subseccion1">
                  <form action="filtros.php" method="POST">
                    <input type= "submit" value="clase" class="list-group-item" id="filtro1">
                    <input type= "submit" value="ataque" class="list-group-item" id="filtro2">
                    <a href="#" class="list-group-item">coste</a>
                    <a href="#" class="list-group-item">salud</a>
                    <a href="#" class="list-group-item">rareza</a>
                    <a href="#" class="list-group-item">expancio</a>
                  </form>  
                </div>
            </li>
          
          </div>
          <div class="col-lg-6">  
            <div class="menu">
              <li id="seccion2" onmouseover="ver(2)" onmouseout="ocultar(2)">
                  <a>Ordenar por:</a>
                  <div id="subseccion2">
                    <form action="">
                      <a href="#" class="list-group-item" id="orden1">clase</a>
                      <a href="#" class="list-group-item">ataque</a>
                      <a href="#" class="list-group-item">coste</a>
                      <a href="#" class="list-group-item">salud</a>
                      <a href="#" class="list-group-item">rareza</a>
                      <a href="#" class="list-group-item">expancio</a>
                    </form>
                  </div>
              </li>            
            </div>
          </div>      
        </div>
        <!-- /.col-lg-3 -->
      </div>     
      <div class="row">
        <div class="col-lg-12">
          <div class="base-datos">
            <?php 
              include("conxion.php");
              $con = new conxion;
              $con->recuperarDatos();
              // include("cerrar_conexion.php");
              if(isset($_POST['filtro1'])){
                //include("conxion.php");
                  $filtro1=mysqli_query($con,"SELECT * FROM $db WHERE clase = gigante");
                  while($Fila=mysqli_fetch_array($filtro1)){
                   echo
                    "<table width= \"100% \" border=\"1\">
                        <tr>
                          <td><b><center>Nombre</center></b></td>
                          <td><b><center>Clase</center></b></td>
                          <td><b><center>Tipo</center></b></td>
                          <td><b><center>Coste</center></b></td>
                          <td><b><center>Ataque</center></b></td>
                          <td><b><center>Salud</center></b></td>
                          <td><b><center>Descrip</center></b></td>
                          <td><b><center>Rareza</center></b></td>
                          <td><b><center>Expansion</center></b></td>
                        </tr>
                        <tr>
                          <td>".$Fila['nombre']."</td>
                          <td>".$Fila['clase']."</td>
                          <td>".$Fila['tipo']."</td>
                          <td>".$Fila['coste']."</td>
                          <td>".$Fila['ataque']."</td>
                          <td>".$Fila['salud']."</td>
                          <td>".$Fila['descripcion']."</td>
                          <td>".$Fila['rareza']."</td>
                          <td>".$Fila['expamsion']."</td>
                        </tr>
                      </table>
                    ";
                  }
                  
              }
              if(isset($_POST['filtro2'])){
                //include("conxion.php");
                mysqli_query($con,"SELECT * FROM $db WHERE ataque = 4");
              }
                
               
            ?>

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
    <!-- script para consultas -->
    <script type="text/javascript"> 
      $document().ready(function(){
        $('').click()function(){
            $.ajax({
              type:
              url:
              data:
              success:function(){
                
              }
            })
        }
      })
    
    </script> 
  </body>

</html>
