<?php
    $host = "localhost";
    $user = "root";
    $pw = "";
    $db = "plantavszombies";

    $con = mysqli_connect($host,$user,$pw) or die ("No se pudo conectar a la base de datos");
    mysqli_select_db($con,$db) or die("No se encontro la base de datos");
    // include("cerrar_conexion.php");
?>