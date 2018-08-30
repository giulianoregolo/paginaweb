<?php
    class conxion{
        function recuperarDatos(){
            $host = "localhost";
            $user = "root";
            $pw = "";
            $db = "pvzdb";

            $con = mysqli_connect($host,$user,$pw) or die ("No se pudo conectar a la base de datos");
            mysqli_select_db($con,$db) or die("No se encontro la base de datos");
            $query = "SELECT * FROM cartas";
            $resultado = mysqli_query($con,$query);

           while($obtener_filas=mysqli_fetch_array($resultado)){
                echo 'id', $id = $obtener_filas['id'], '<br>';
                echo 'nombre',$nombre=$obtener_filas['nombre'], '<br>';
                echo 'clase',$clase=$obtener_filas['clase'], '<br>';
                echo 'tipo',$tipo=$obtener_filas['tipo'], '<br>';
                echo 'coste',$coste=$obtener_filas['coste'], '<br>';
                echo 'ataque',$ataque=$obtener_filas['ataque'], '<br>';
                echo 'salud',$salud=$obtener_filas['salud'], '<br>';
                echo 'descripcion',$descripcion=$obtener_filas['descripcion'], '<br>';
                echo 'rareza',$rareza=$obtener_filas['rareza'], '<br>';
                echo 'expansion',$expansion=$obtener_filas['expansion'], '<br>';
		    echo '<br>';
            }
        }
    }
?>