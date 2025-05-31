<?php
class Conexion {
    public $conexion;
    private $servidor = "localhost";
    private $user = "root";
    private $clave = "";
    private $database = "minimarket_db";

    public function conectar() {
        $this->conexion = new mysqli(
            $this->servidor,
            $this->user,
            $this->clave,
            $this->database
        );
        if ($this->conexion->connect_error) {
            die("Conexión fallida: " . $this->conexion->connect_error);
        }
    }

    public function getEjecutionQuery($sql) {
        return $this->conexion->query($sql);
    }
}

?>