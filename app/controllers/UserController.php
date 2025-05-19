<?php

if (!isset($_POST['g-recaptcha-response']) || empty($_POST['g-recaptcha-response'])) {
    echo "<script>alert('Por favor, confirma que no eres un robot.'); window.location.href='../index.php';</script>";
    exit;
}

$recaptcha = $_POST['g-recaptcha-response'];
$secret = "6LfsRkArAAAAACtDCjSXRvdRNLSPxAsp79oBE1TZ";  // Reemplaza aquí con tu clave secreta real
$remoteip = $_SERVER['REMOTE_ADDR'];

// Verificar con Google
$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$recaptcha&remoteip=$remoteip");
$result = json_decode($response, true);

if (!$result['success']) {
    echo "<script>alert('Error en reCAPTCHA. Por favor intenta de nuevo.'); window.location.href='../index.php';</script>";
    exit;
}

// Si pasó el reCAPTCHA, sigue con tu validación de usuario y contraseña
require_once '../models/Usuario.php';
$obj = new Usuario();
$resultado = $obj->getLoginUsuario();

$user = trim($_POST["user"]);
$clave = trim($_POST["pass"]);

$encontrados = 0;

while($fila = $resultado->fetch_array(MYSQLI_ASSOC)){
    if ($fila['usuario'] == $user && $fila['password'] == $clave) {
        session_start();
        $_SESSION["usuario_sesion"] = $fila;
        $encontrados = 1;
        break;
    }
}

if ($encontrados) {
    header('Location: ../views/dashboard.php');
} else {
    echo "<script>alert('Usuario o contraseña incorrectos.'); window.location.href='../index.php';</script>";
    exit;
}
?>

