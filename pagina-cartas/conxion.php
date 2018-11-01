<?php
    class conxion{
        public function recuperarDatos(){
            $host = "localhost";
            $user = "root";
            $pw = "";
            $db = "plantavszombies";

            $con = mysqli_connect($host,$user,$pw) or die ("No se pudo conectar a la base de datos");
            mysqli_select_db($con,$db) or die("No se encontro la base de datos");
            $query = "SELECT * FROM cartas";
            $resultado = mysqli_query($con,$query);

           while($ObtenerFila=mysqli_fetch_array($resultado)){
            echo 
            "
              <table width=\"100%\" border=\"1\">
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
                  <td>".$ObtenerFila['nombre']."</td>
                  <td>".$ObtenerFila['clase']."</td>
                  <td>".$ObtenerFila['tipo']."</td>
                  <td>".$ObtenerFila['coste']."</td>
                  <td>".$ObtenerFila['ataque']."</td>
                  <td>".$ObtenerFila['salud']."</td>
                  <td>".$ObtenerFila['descripcion']."</td>
                  <td>".$ObtenerFila['rareza']."</td>
                  <td>".$ObtenerFila['expamsion']."</td>
                </tr>
              </table>
            ";
            }
        }
    }
?>