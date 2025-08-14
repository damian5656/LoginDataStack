<?php
session_start();
include("conexion.php"); // conexión a la base de datos

if (isset($_POST['login'])) {

    $usuario = trim($_POST['usuario']);
    $contrasena = trim($_POST['contrasena']); // debe coincidir con el name en HTML

    if (!empty($usuario) && !empty($contrasena)) {

        // Escapar valor para prevenir inyección SQL
        $usuario_safe = mysqli_real_escape_string($conexion, $usuario);

        // Buscar usuario por documento
        $sql = "SELECT * FROM usuario WHERE documento = '$usuario_safe' LIMIT 1";
        $resultado = mysqli_query($conexion, $sql);

        if ($resultado && mysqli_num_rows($resultado) === 1) {
            $fila = mysqli_fetch_assoc($resultado);
            $hash_almacenado = $fila['Contrasena']; // hash almacenado en BD

            // Verificar contraseña
          if (password_verify($contrasena, $fila['Contrasena'])) {
    // Guardar datos en sesión
    $_SESSION['nombre'] = $fila['Nombre'];    // nombre real
    $_SESSION['documento'] = $fila['Documento']; // documento si querés usarlo
    $_SESSION['id_usuario'] = $fila['ID_Usuario'];
    $_SESSION['rol'] = $fila['ID_Rol'];

    header("Location: bienvenido.php");
    exit();
            } else {
                $error = "Contraseña incorrecta.";
            }
        } else {
            $error = "Usuario no encontrado.";
        }

    } else {
        $error = "Por favor completa todos los campos.";
    }
}