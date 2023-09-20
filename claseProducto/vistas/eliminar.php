<?php
$controlador = new ControladorProductos();
if(isset($_GET['IDproducto'])){
    $row = $controlador->ver($_GET['IDproducto']);
}else {
        header('Location: index.php');
    }
    if(isset($_POST['enviar'])){
        $controlador->eliminar($_GET['IDproducto']);
        header('Location: index.php');
    }?>
    <div class="alert alert-danger" role="alert">
    <div class="mx-auto p-1" style="width: 400px;">
<h2><p class="fs-1">¿Usted de verdad quiere eliminar el Producto <?php echo $row['NombreP']; ?>?</p></h2>
<br><br></div></div>

<form action="" method="POST">
<div class="d-grid gap-2">
    <input type="submit" name="enviar" value="ELIMINAR" class="btn btn-danger btn-lg">
</div>
</form>