<?php
require_once("../models/Productos.php");
$objeto = new Productos();

$id = $_POST['id_producto'];

if($objeto->eliminar_producto($id)){
    echo "yes";
} else {
    echo "no";
}
?>