<?php
require_once("conexion.php");
class Usuarios {
    public function registrar_usuario($nombre, $apellido, $usuario, $password, $rol){
        $cn = new Conexion();
        $cn->conectar();
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO tb_usuario(nombre, apellido, usuario, password, id_rol) 
                VALUES ('$nombre', '$apellido', '$usuario', '$password_hash', '$rol')";
        return $cn->getEjecutionQuery($sql);
    }
    public function listar_usuarios(){
        $cn = new Conexion();
        $cn->conectar();
        $sql = "SELECT u.id_usuario, u.nombre, u.apellido, u.usuario, r.nombre_rol AS rol
                FROM tb_usuario u
                LEFT JOIN tb_rol r ON u.id_rol = r.id_rol";
        return $cn->getEjecutionQuery($sql);
    }
}
?>