<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background: white;
            padding: 30px 25px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            width: 320px;
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 6px;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
            transition: 0.3s;
        }

        input[type="text"]:focus, input[type="password"]:focus {
            border-color: #007bff;
            outline: none;
        }

        input[type="submit"] {
            width: 100%;
            background: #007bff;
            color: white;
            padding: 10px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        input[type="submit"]:hover {
            background: #0056b3;
        }

        .form-footer {
            margin-top: 15px;
            text-align: center;
            font-size: 0.9em;
            color: #666;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2>Iniciar Sesión</h2>
        <form action="controllers/ControllerUser.php" method="POST">
            <label for="user">Usuario</label>
            <input type="text" id="user" name="user" placeholder="Escribe tu usuario" required>

            <label for="pass">Contraseña</label>
            <input type="password" id="pass" name="pass" placeholder="Escribe tu contraseña" required>

            <input type="submit" value="Iniciar Sesión">
        </form>
        <div class="form-footer">
            © 2025 Botica Servi Salud
        </div>
    </div>

</body>
</html>
