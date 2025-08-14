<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "data_stack";

$conexion = mysqli_connect($server, $user, $pass, $db);
if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
} else {
    echo "Conectado";
}
?>
