<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title>Login</title>
  <script src="script.js"></script>
  <link rel="stylesheet" href="estilos.css" />
</head>
<body>

  <form class="login-form" action="inicio.php" method="POST">
    <img src="https://i.postimg.cc/vBmRpy7D/Captura-de-pantalla-2025-07-12-212358.png" alt="Logo" class="logo"/>

    <label>
      <input type="text" name="usuario" placeholder="Documento 👤" required />
    </label>
    <label>
     <input type="password" name="contrasena" placeholder="Contraseña 🔒" required />
    </label>
    
    <button type="submit" name="login" class="btn">Iniciar sesión</button>
  </form>

</body>
</html>
