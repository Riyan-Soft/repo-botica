<?php
require_once("../models/Productos.php");
$objeto = new Productos();

$nombre = trim($_POST['producto_nombre']);
$cantidad = trim($_POST['producto_cantidad']);
$precio = trim($_POST['producto_precio']);
$descripcion = trim($_POST['producto_descripcion']);

if($objeto->registrar_producto($nombre, $cantidad, $precio, $descripcion)){
    header("Location: ../views/panel_productos_registrar.php?success=1");
} else {
    header("Location: ../views/panel_productos_registrar.php?error=1");
}
?>