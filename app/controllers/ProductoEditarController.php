<?php
require_once("../models/Productos.php");
$objeto = new Productos();

$id = $_POST['id_producto'];
$codigo = trim($_POST['codigo_producto']);
$nombre = trim($_POST['nombre']);
$cantidad = trim($_POST['cantidad']);
$precio = trim($_POST['precio']);
$descripcion = trim($_POST['descripcion']);

if($objeto->editar_producto($id, $codigo, $nombre, $cantidad, $precio, $descripcion)){
    echo "yes";
} else {
    echo "no";
}
?>