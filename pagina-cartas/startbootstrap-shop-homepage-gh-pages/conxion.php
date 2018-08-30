<?php
    class conxion{
        function recuperarDatos(){
            $host = "localhost";
            $user = "root";
            $pw = "";
            $db = "plantavszombies";

            $con = mysqli_connect($host,$user,$pw) or die ("No se pudo conectar a la base de datos");
            mysqli_select_db($db,$con) or die("No se encontro la base de datos");
            $query = "SELECT * FROM cartas";
            $resultado = mysqli_query($con,$query);

            while($fila = mysqli_fetch_array($resultado)){
                echo"$fila [id] <br>";
                echo"$fila [nombre] <br>";
                echo"$fila [clase] <br>";
                echo"$fila [tipo] <br>";
                echo"$fila [coste] <br>";
                echo"$fila [ataque] <br>";
                echo"$fila [salud] <br>";
                echo"$fila [descripcion] <br>";
                echo"$fila [rareza] <br>";
                echo"$fila [expansion] <br>";
            }
        }
    }
?>