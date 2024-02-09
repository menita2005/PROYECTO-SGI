<?php
include_once("clases/productos.php");
include_once("../claseProveedor/clases/proveedor.php");

class ControladorProductos {

    private $Productos;

    public function __construct(){
        $this->Productos = new Productos();
    }

    public function index(){
        $resultado = $this->Productos->listar();
        return $resultado;
    }

    public function crear($IDproducto, $NombreP, $Descripcion, $Precio, $stock, $IDProveedor, $IDCategoria){
        // Validar y sanitizar datos aquí si es necesario

        $this->Productos->set("IDproducto", $IDproducto);
        $this->Productos->set("NombreP", $NombreP);
        $this->Productos->set("Descripcion", $Descripcion);
        $this->Productos->set("Precio", $Precio);
        $this->Productos->set("stock", $stock);
        $this->Productos->set("IDProveedor", $IDProveedor);
        $this->Productos->set("IDCategoria", $IDCategoria);

        $resultado = $this->Productos->crear();
        return $resultado;
    }

    public function eliminar($IDproducto){
        // Validar y sanitizar datos aquí si es necesario

        $this->Productos->set("IDproducto", $IDproducto);
        $this->Productos->eliminar();
    }

    public function ver($IDproducto){
        // Validar y sanitizar datos aquí si es necesario

        $this->Productos->set("IDproducto", $IDproducto);
        $datos = $this->Productos->ver();
        return $datos;
    }

    public function editar($IDproducto, $NombreP, $Descripcion, $Precio, $IDstock, $IDProveedor, $IDCategoria){
        // Validar y sanitizar datos aquí si es necesario

        $this->Productos->set("IDproducto", $IDproducto);
        $this->Productos->set("NombreP", $NombreP);
        $this->Productos->set("Descripcion", $Descripcion);
        $this->Productos->set("Precio", $Precio);
        $this->Productos->set("IDstock", $IDstock);
        $this->Productos->set("IDProveedor", $IDProveedor);
        $this->Productos->set("IDCategoria", $IDCategoria);

        $this->Productos->editar();
    }
}
?>
