<?php
include_once('../conexionBs.php');

class Proveedor {
    private $IDProveedor;
    private $Nombre;
    private $N_Contacto;
    private $Direccion;
    private $Correo;
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
        $sql = "SELECT * FROM proveedor";
        $resultado = $this->con->consultaRetorno($sql);
        return $resultado;
    }
    

    public function crear() {
        $sql2 = "SELECT * FROM proveedor WHERE IDProveedor = '{$this->IDProveedor}'";
        $resultado = $this->con->consultaRetorno($sql2);
        $num = mysqli_num_rows($resultado); // Utiliza mysqli en lugar de mysql

        if ($num != 0) {
            return false;
        } else {
            $sql = "INSERT INTO proveedor (IDProveedor, Nombre, N_Contacto, Direccion, Correo) VALUES (
                '{$this->IDProveedor}', '{$this->Nombre}', '{$this->N_Contacto}', '{$this->Direccion}', '{$this->Correo}')"; // Corregido el problema de sintaxis
            $this->con->consultasimple($sql);
        }
    }

    public function eliminar() {
        $sql = "DELETE FROM proveedor WHERE IDProveedor = '{$this->IDProveedor}'"; // Utiliza el nombre de columna correcto
        $this->con->consultasimple($sql);
    }

    
    public function ver() {
        $sql = "SELECT * FROM proveedor WHERE IDProveedor = '{$this->IDProveedor}' LIMIT 1";
        $resultado = $this->con->consultaRetorno($sql);
        $row = mysqli_fetch_assoc($resultado); // Utiliza mysqli en lugar de mysql

        $this->IDProveedor = $row["IDProveedor"];
        $this->Nombre = $row["Nombre"];
        $this->N_Contacto = $row["N_Contacto"];
        $this->Direccion = $row["Direccion"];
        $this->Correo = $row["Correo"];

        return $row;
    }

    public function editar() {
        $sql = "UPDATE proveedor SET Nombre = '{$this->Nombre}', N_Contacto = '{$this->N_Contacto}', Direccion = '{$this->Direccion}', Correo = '{$this->Correo}' WHERE IDProveedor = '{$this->IDProveedor}'"; // Utiliza los nombres de columna correctos
        $this->con->consultasimple($sql); // Debes ejecutar la consulta utilizando tu conexión a la base de datos
    }
}
?>
