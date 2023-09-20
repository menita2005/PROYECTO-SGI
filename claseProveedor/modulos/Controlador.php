<?php
include_once("clases/proveedor.php");

class ControladorProveedor {

    private $Proveedor;

    public function __construct(){
        $this->Proveedor = new Proveedor();
    }

    public function index(){
        $resultado = $this->Proveedor->listar();
        return $resultado;
    }

    public function crear($IDProveedor, $Nombre, $N_Contacto, $Direccion, $Correo){
        // Validar y sanitizar datos aquí si es necesario

        $this->Proveedor->set("IDProveedor", $IDProveedor);
        $this->Proveedor->set("Nombre", $Nombre);
        $this->Proveedor->set("N_Contacto", $N_Contacto);
        $this->Proveedor->set("Direccion", $Direccion);
        $this->Proveedor->set("Correo", $Correo);

        $resultado = $this->Proveedor->crear();
        return $resultado;
    }

    public function eliminar($IDProveedor){
        // Validar y sanitizar datos aquí si es necesario

        $this->Proveedor->set("IDProveedor", $IDProveedor);
        $this->Proveedor->eliminar();
    }

    public function ver($IDProveedor){
        // Validar y sanitizar datos aquí si es necesario

        $this->Proveedor->set("IDProveedor", $IDProveedor);
        $datos = $this->Proveedor->ver();
        return $datos;
    }

    public function editar($IDProveedor, $Nombre, $N_Contacto, $Direccion, $Correo){
        // Validar y sanitizar datos aquí si es necesario

        $this->Proveedor->set('IDProveedor', $IDProveedor);
        $this->Proveedor->set('Nombre', $Nombre);
        $this->Proveedor->set('N_Contacto', $N_Contacto);
        $this->Proveedor->set('Direccion', $Direccion);
        $this->Proveedor->set('Correo', $Correo);

        $this->Proveedor->editar();
    }
}
?>
