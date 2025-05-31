<?php
require_once("../models/Usuarios.php");
$objeto = new Usuarios();

$nombre = trim($_POST['nombre']);
$apellido = trim($_POST['apellido']);
$usuario = trim($_POST['usuario']);
$password = trim($_POST['password']);
$rol = intval($_POST['rol']);

if($objeto->registrar_usuario($nombre, $apellido, $usuario, $password, $rol)){
    header("Location: ../views/panel_usuarios_registrar.php?success=1");
} else {
    header("Location: ../views/panel_usuarios_registrar.php?error=1");
}
?>