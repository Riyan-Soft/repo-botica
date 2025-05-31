<?php
//Llamamos a la conexion
require_once("conexion.php");
//Creamos una clase llamada Productos
class Productos{
    // Método para registrar un producto
    public function registrar_producto($codigo_producto, $nombre, $cantidad, $precio, $descripcion){
        $cn = new Conexion();
        $cn->conectar();
        $sql = "INSERT INTO tb_producto(codigo_producto, nombre, cantidad, precio, descripcion) VALUES ('$codigo_producto','$nombre', '$cantidad', '$precio', '$descripcion')";
        return $cn->getEjecutionQuery($sql);
    }

    // Método para listar productos
    public function reportes_productos(){
        $cn = new Conexion();
        $cn->conectar();
        $sql = "SELECT * FROM tb_producto";
        return $cn->getEjecutionQuery($sql);
    }
}
?>