<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Planta VS Zombies Heores Stats</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Inicio
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Registro</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container-fluid">

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
        <div class="col-lg-1">

          
          <div class="list-group">
            <a href="#" class="list-group-item">clase</a>
            <a href="#" class="list-group-item">ataque</a>
            <a href="#" class="list-group-item">coste</a>
            <a href="#" class="list-group-item">salud</a>
            <a href="#" class="list-group-item">rareza</a>
            <a href="#" class="list-group-item">expancio</a>
          </div>

        </div>
        <!-- /.col-lg-3 -->
                  
        <div class="col-lg-10">
          <div class="base-datos">
            <?php  
                include("conxion.php");
                $con = new conxion;
                $con->recuperarDatos();
            ?>
          </div>

        </div>
      
        <!-- /.row -->

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
