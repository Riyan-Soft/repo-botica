<?php
require_once("../models/Productos.php");
$objeto = new Productos();

if(isset($_GET['codigo'])){
    $codigo = $_GET['codigo'];
    $resultado_lista = $objeto->consultar_codigo_producto($codigo);

    $datos_producto = [];
    while($fila = $resultado_lista->fetch_array(MYSQLI_ASSOC)){
        $datos_producto[] = $fila;
    }

    header('Content-Type: application/json');
    echo json_encode($datos_producto);
}
?>