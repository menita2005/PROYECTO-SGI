<?php
include_once('conexioncategoria.php');

class Categoria {
   
    private $IDCategoria;
    private $N_Categoria;
    private $con;

    public function __construct() {
        $this->con = new Conexion();
    }

    public function set($atributo, $contenido) {
        $this->$atributo = $contenido;
    }

    public function get($atributo) {
        return $this->$atributo;
    }

    public function listar(){
        $sql = "SELECT * FROM categoria";
        $resultado = $this->con->consultaRetorno($sql);
        return $resultado;
    }
    

    public function crear() {
        $sql2 = "SELECT * FROM categoria WHERE IDCategoria = '{$this->IDCategoria}'";
        $resultado = $this->con->consultaRetorno($sql2);
        $num = mysqli_num_rows($resultado); // Utiliza mysqli en lugar de mysql

        if ($num != 0) {
            return false;
        } else {
            $sql = "INSERT INTO categoria (IDcategoria,N_Categoria) VALUES (
                '{$this->IDCategoria}','{$this->N_Categoria}')"; // Corregido el problema de sintaxis
            $this->con->consultasimple($sql);
        }
    }

    public function eliminar() {
        $sql = "DELETE FROM categoria WHERE IDCategoria = '{$this->IDCategoria}'"; // Utiliza el nombre de columna correcto
        $this->con->consultasimple($sql);
    }

    
    public function ver() {
        $sql = "SELECT * FROM Categoria WHERE IDCategoria = '{$this->IDCategoria}' LIMIT 1";
        $resultado = $this->con->consultaRetorno($sql);
        $row = mysqli_fetch_assoc($resultado); // Utiliza mysqli en lugar de mysql

       
        $this->IDCategoria = $row["IDCategoria"];
        $this->N_Categoria = $row["N_Categoria"];

        return $row;
    }

    public function editar() {
        $sql = "UPDATE categoria SET N_Categoria =  '{$this->N_Categoria }' WHERE IDCategoria = '{$this->IDCategoria}'"; // Utiliza los nombres de columna correctos
        $this->con->consultasimple($sql); // Debes ejecutar la consulta utilizando tu conexión a la base de datos
    }
}
?>
