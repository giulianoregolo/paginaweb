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

           while($obtener_filas=mysqli_fetch_array($resultado)){
                echo 'nombre: ',$nombre=$obtener_filas['nombre'],'|' ;
                echo 'clase: ',$clase=$obtener_filas['clase'], '|';
                echo 'tipo: ',$tipo=$obtener_filas['tipo'], '|';
                echo 'coste: ',$coste=$obtener_filas['coste'], '|';
                echo 'ataque: ',$ataque=$obtener_filas['ataque'], '|';
                echo 'salud: ',$salud=$obtener_filas['salud'], '|';
                echo 'descripcion: ',$descripcion=$obtener_filas['descripcion'], '|';
                echo 'rareza: ',$rareza=$obtener_filas['rareza'], '|';
                echo 'expansion: ',$expansion=$obtener_filas['expamsion'], '|';
		        echo '<br>';
            }
        }
    }
?>