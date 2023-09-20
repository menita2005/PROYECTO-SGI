<?php
include_once('conexionproducto.php');

class Productos {
    private $IDproducto;
    private $NombreP;
    private $Descripcion;
    private $Precio;
    private $IDstock;
    private $IDProveedor;
    private $IDCategoria;
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
        $sql = "SELECT p.IDproducto, p.NombreP, p.Descripcion, p.Precio,
        pr.Nombre AS NombreProveedor,
        s.Cantidad AS CantidadStock,
        c.N_Categoria AS Categoria
 FROM Productos p
 JOIN Categoria c ON p.IDCategoria = c.IDCategoria
 JOIN Proveedor pr ON p.IDProveedor = pr.IDProveedor
 JOIN Stock s ON p.IDstock = s.IDstock
 ";
        $resultado = $this->con->consultaRetorno($sql);
        return $resultado;
    }
    

    public function crear() {
        $sql2 = "SELECT * FROM productos WHERE IDproducto = '{$this->IDproducto}'";
        $resultado = $this->con->consultaRetorno($sql2);
        $num = mysqli_num_rows($resultado); // Utiliza mysqli en lugar de mysql

        if ($num != 0) {
            return false;
        } else {
            $sql = "INSERT INTO productos (IDproducto, NombreP, Descripcion, Precio, IDstock,IDProveedor, IDcategoria) VALUES (
                '{$this->IDproducto}', '{$this->NombreP}', '{$this->Descripcion}', '{$this->Precio}', '{$this->IDstock}', '{$this->IDProveedor}', '{$this->IDCategoria}')"; // Corregido el problema de sintaxis
            $this->con->consultasimple($sql);
        }
    }

    public function eliminar() {
        $sql = "DELETE FROM productos WHERE IDproducto = '{$this->IDproducto}'"; // Utiliza el nombre de columna correcto
        $this->con->consultasimple($sql);
    }

    
    public function ver() {
        $sql = "SELECT * FROM productos WHERE IDproducto = '{$this->IDproducto}' LIMIT 1";
        $resultado = $this->con->consultaRetorno($sql);
        $row = mysqli_fetch_assoc($resultado); // Utiliza mysqli en lugar de mysql

        $this->IDproducto = $row["IDproducto"];
        $this->NombreP = $row["NombreP"];
        $this->Descripcion = $row["Descripcion"];
        $this->Precio = $row["Precio"];
        $this->IDstock = $row["IDstock"];
        $this->IDProveedor= $row["IDProveedor"];
        $this->IDCategoria = $row["IDCategoria"];

        return $row;
    }

    public function editar() {
        $sql = "UPDATE productos SET NombreP = '{$this->NombreP}', Descripcion = '{$this->Descripcion}', Precio = '{$this->Precio}', IDstock = '{$this->IDstock}', IDProveedor = '{$this->IDProveedor}', IDCategoria = '{$this->IDCategoria }' WHERE IDproducto = '{$this->IDproducto}'"; // Utiliza los nombres de columna correctos
        $this->con->consultasimple($sql); // Debes ejecutar la consulta utilizando tu conexión a la base de datos
    }
}
?>
