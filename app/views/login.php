<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #791718, #cc2d2d);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .login-container h1 {
            font-size: 2rem;
            margin-bottom: 20px;
        }
        .login-container label {
            display: block;
            font-size: 1rem;
            margin-bottom: 5px;
            text-align: left;
        }
        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
        }
        .login-container input[type="submit"] {
            background: linear-gradient(to right, #cc2d2d, #791718);
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 50px;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .login-container input[type="submit"]:hover {
            background: linear-gradient(to right, #791718, #cc2d2d);
            transform: scale(1.05);
        }
        @media screen and (max-width: 500px) {
            .login-container {
                padding: 20px;
            }

            .login-container h1 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h1>Iniciar Sesión</h1>
        <form action="controllers/ControllerUser.php" method="POST">
            <label for="user">Usuario</label>
            <input type="text" id="user" name="user" placeholder="Escribe tu usuario" required>
            <label for="pass">Contraseña</label>
            <input type="password" id="pass" name="pass" placeholder="Escribe tu contraseña" required>
            <input type="submit" value="Iniciar Sesión">
        </form>
    </div>
</body>

</html>