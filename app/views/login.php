<?php

session_start();
if (isset($_SESSION["usuario_sesion"])) {
    header("Location: views/dashboard.php");
} else {
    
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="../views/assets/css/login-intranet.css">
</head>
<body>
    <div class="login-container">
        <img src="views/assets/img/logo-botica.png" alt="Logo de Botica Servi Salud" class="logo">
        <h2>Iniciar Sesión</h2>
        <form action="controllers/UserController.php" method="POST">
            <label for="user">Usuario</label>
            <input type="text" id="user" name="user" placeholder="Escribe tu usuario" required>

            <label for="pass">Contraseña</label>
            <input type="password" id="pass" name="pass" placeholder="Escribe tu contraseña" required>

            <div class="g-recaptcha" data-sitekey="6LfsRkArAAAAAIfTGdzy3-UAWNsKz_W2lXpiJmDW"></div>

            <input type="submit" value="Iniciar Sesión">
        </form>
        <div class="form-footer">
            © 2025 Botica Servi Salud
        </div>
    </div>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</body>
</html>