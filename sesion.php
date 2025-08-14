<?php
session_start();

// Verificar que el usuario esté logueado
if (!isset($_SESSION['usuario'])) {
    // Si no está logueado, redirigir al login
    header("Location: inicarsesion.php");
    exit();
}

$usuario = $_SESSION['usuario'];
?>