<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wall-Inventary</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <header>
        <h1 class="display-1">PRODUCTOS</h1>
    </header>
    <div class="container-sm">
    <nav  >
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active"href="../inicio.php">Inicio</a></li>
            <li class="nav-item"><a class="nav-link active"href="../claseProveedor/index.php">PROVEEDORES</a></li>
            <li class="nav-item"><a class="nav-link active"href="../claseCategoria/index.php">CATEGORIA</a></li>
            <li class="nav-item"><a class="nav-link active" href="?cargar=crear">Registrar Producto</a></li>
        </ul>
    </nav>
    
        <!-- El contenido de la vista se carga dinámicamente arriba -->
    
<section><?php
include("modulos/Enrutador.php");
include("modulos/Controlador.php");

$enrutador = new Enrutador();

// Verificar si se proporciona una vista específica en $_GET['cargar']
if (isset($_GET['cargar'])) {
    $vista = $_GET['cargar'];
    
    // Cargar la vista solicitada
    $enrutador->cargarVista($vista);
} else {
    $enrutador->cargarVista('inicio');
    

}
?></section>
    </div>
    </body>
</html>



