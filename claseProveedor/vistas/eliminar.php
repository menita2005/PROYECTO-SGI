<?php
$controlador = new ControladorProveedor();
if(isset($_GET['IDProveedor'])){
    $row = $controlador->ver($_GET['IDProveedor']);
}else {
        header('Location: index.php');
    }
    if(isset($_POST['enviar'])){
        $controlador->eliminar($_GET['IDProveedor']);
        header('Location: index.php');
    }?>
    <div class="alert alert-danger" role="alert">
    <div class="mx-auto p-1" style="width: 400px;">
<h2><p class="fs-1">¿Usted de verdad quiere eliminar el proveedor <?php echo $row['Nombre']; ?>?</p></h2>
<br><br></div></div>

<form action="" method="POST">
<div class="d-grid gap-2">
    <input type="submit" name="enviar" value="ELIMINAR" class="btn btn-danger btn-lg">
</div>
</form>