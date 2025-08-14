<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "data_stack";


$conexion = new mysqli($server, $user, $pass, $db);


if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>

