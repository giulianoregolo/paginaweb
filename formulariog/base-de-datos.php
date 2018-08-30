<?php

mb_internal_encoding("UTF-8");

$Coneccion = mysqli_connect("localhost","root","","plantavszombies") or die("no se encuentra el servidor");

$Nombre = $_POST['Nombre'];
$apellido = $_POST['apellido'];
$password = $_POST['password'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];
$continente = $_POST['continente'];

mysqli_set_charset($Coneccion, 'utf8');

$ingresar = "INSERT INTO plantavszombies (Nombre, apellido,email,password,sexo,continente) VALUES ('$Nombre','$apellido','$email','$password','$sexo','$continente')";

$query = mysqli_query($Coneccion,$ingresar);

?>