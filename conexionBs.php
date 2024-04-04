<?php

class Conexion {
    // Atributos
    private $host;
    
    private $usuario;
    
    private $contra;
    private $base_datos;
    private $conexion;

    // Constructor
    public function __construct() {
        $this->host = "localhost:3306";
        $this->usuario = "root";
        
        $this->contra = "";
        $this->base_datos = "wall_inventary";

        // Crear una conexión MySQLi
        $this->conexion = new mysqli($this->host,  $this->usuario,  $this->contra, $this->base_datos);

        // Comprobar errores de conexión
        if ($this->conexion->connect_error) {
            die("Conexión fallida: " . $this->conexion->connect_error);
        }
    }

    // Método para realizar consultas simples (INSERT, UPDATE, DELETE)
    public function consultasimple($sql){
        if ($this->conexion->query($sql) === TRUE) {
            return true;
        } else {
            echo "Error en la consulta: " . $this->conexion->error;
            return false;
        }
    }

    // Método para realizar consultas SELECT y devolver resultados
    public function consultaRetorno($sql){
        $resultado = $this->conexion->query($sql);

        if ($resultado === false) {
            echo "Error en la consulta: " . $this->conexion->error;
            return false;
        } else {
            return $resultado;
        }
    }
}

?>
