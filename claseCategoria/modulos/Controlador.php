<?php
include_once("clases/categoria.php");

class ControladorCategoria {

    private $Categoria;

    public function __construct(){
        $this->Categoria = new Categoria();
    }

    public function index(){
        $resultado = $this->Categoria->listar();
        return $resultado;
    }

    public function crear($IDCategoria,$N_Categoria){
        // Validar y sanitizar datos aquí si es necesario

        
        $this->Categoria->set("IDCategoria", $IDCategoria);
        $this->Categoria->set("N_Categoria", $N_Categoria);

        $resultado = $this->Categoria->crear();
        return $resultado;
    }

    public function eliminar($IDCategoria){
        // Validar y sanitizar datos aquí si es necesario

        $this->Categoria->set("IDCategoria", $IDCategoria);
        $this->Categoria->eliminar();
    }

    public function ver($IDCategoria){
        // Validar y sanitizar datos aquí si es necesario

        $this->Categoria->set("IDCategoria", $IDCategoria);
        $datos = $this->Categoria->ver();
        return $datos;
    }

    public function editar($IDCategoria,$N_Categoria){
        // Validar y sanitizar datos aquí si es necesario

        
        $this->Categoria->set("IDCategoria", $IDCategoria);
        $this->Categoria->set("N_Categoria", $N_Categoria);

        $this->Categoria->editar();
    }
}
?>
