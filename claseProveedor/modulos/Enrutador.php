<?php

class Enrutador {

    public function cargarVista($vista) {
        switch ($vista) {
            case "crear":
                include_once('vistas/' . $vista . '.php');
                break;

            // Agrega más casos para otras vistas aquí
            case "ver":
                include_once('vistas/' . $vista . '.php');
                break;
            case "editar":
                include_once('vistas/' . $vista . '.php');
                break;
            case "eliminar":
                    include_once('vistas/' . $vista . '.php');
                    break;
            

            default:
                include_once('vistas/inicio.php');
                break;
        }
    }

    public function validarGET($variable) {
        if (empty($variable)) {
            // Cargar la vista de inicio si $variable está vacío
            include_once('vistas/inicio.php');
        }
    }
}
?>
