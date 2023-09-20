<?php 
$controlador = new ControladorProveedor();
if(isset($_POST['enviar'])){
    $r = $controlador->crear($_POST['IDProveedor'],
    $_POST['Nombre'],$_POST['N_Contacto'],
    $_POST['Direccion'],$_POST['Correo']);
    if($r){
        echo "se ha ingresado el Proveedor";
    }else{
        
}}
    
?>
<h3>Registro de un proveedor</h3>
<hr>
<form action="" method="POST" class="form-control form-control-lg">
<div class="container">
<div class="container-sm">
<div class="mb-3">
    <label class="form-label">IDProveedor</label>
    <input class="form-control"type="Number" name="IDProveedor" maxlength="20" required>
    <br><br>
    <label class="form-label">Nombre</label>
    <input class="form-control"type="text" name="Nombre"  required>
    <br><br>
    <label class="form-label">Numero de contacto</label>
    <input class="form-control"type="text" name="N_Contacto"  required>
    <br><br>
    <label class="form-label">Direccion</label>
    <input class="form-control"type="text" name="Direccion"  required>
    <br><br>
    <label class="form-label">Correo</label>
    <input class="form-control"type="text" name="Correo" required>
    <br><br>
    <input class="form-control btn btn-dark" type="submit" name="enviar" >
</div>
</div>
</div>
</form>