<?php
$controlador = new ControladorProveedor();
if(isset($_GET['IDProveedor'])){
    $row = $controlador->ver($_GET['IDProveedor']);
}else {
        header('Location: index.php');
    }
    if(isset($_POST['enviar'])){
        $controlador->editar($_GET['IDProveedor'], $_POST['Nombre'], $_POST['N_Contacto'], $_POST['Direccion'], $_POST)['Correo'];
        header('Location: index.php');
    }?>

<form action="" method="POST" class="form-control form-control-lg">
<div class="mb-3">
    <label  class="form-label">IDProveedor</label>
    <input  class="form-control" type="Number" name="IDProveedor" value="<?php echo $row['IDProveedor'];   ?>" disabled>
    <br><br>
    <label  class="form-label">Nombre</label>
    <input  class="form-control" type="text" name="Nombre"  value=<?php echo $row['Nombre'];   ?> required>
    <br><br>
    <label  class="form-label">Numero de contacto</label>
    <input  class="form-control"type="text" name="N_Contacto"  value=<?php echo $row['N_Contacto'];   ?> required>
    <br><br>
    <label  class="form-label">Direccion</label>
    <input  class="form-control" type="text" name="Direccion"  value=<?php echo $row['Direccion'];   ?> required>
    <br><br>
    <label  class="form-label">Correo</label>
    <input  class="form-control" type="text" name="Correo" value=<?php echo $row['Correo'];   ?> required>
    <br><br>
    <input  class="btn btn-dark" type="submit" name="enviar" value="Editar">
</div>
</form>