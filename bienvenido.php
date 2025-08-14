<?php
session_start();

// Si no hay sesión, redirigimos al login
if (!isset($_SESSION['nombre'])) {
    header("Location: login.php");
    exit();
}

$nombre = $_SESSION['nombre'];
$documento = $_SESSION['documento']; // opcional
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title>Bienvenido</title>
  <link rel="stylesheet" href="style (1).css" />
</head>
<body>
  <div class="wrapper">
    <h1>¡Bienvenido, <?php echo htmlspecialchars($nombre); ?>!</h1>
    <p>Oh tmb conocido como numero:<?php echo htmlspecialchars($documento); ?>!</p>
    <p>Has iniciado sesión correctamente.</p>

    <form action="logout.php" method="POST">
      <button type="submit" class="btn">Cerrar Sesión</button>
    </form>
  </div>
</body>
</html>
