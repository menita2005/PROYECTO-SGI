<?php 
$controlador = new ControladorCategoria();
if(isset($_POST['enviar'])){
    $r = $controlador->crear($_POST['IDCategoria'],
    $_POST['N_Categoria']
    );
    if($r){
        echo "se ha ingresado la categoria";
    }else{
        
}}
    
?>
<h3>Registro de una Categoria</h3>
<hr>
<form action="" method="POST" class="form-control form-control-lg">
<div class="container">
<div class="container-sm">
<div class="mb-3">
    <label class="form-label">IDCategoria</label>
    <input class="form-control"type="number" name="IDCategoria" required>
    <br><br>
    <label class="form-label">Nombre Categoria</label>
    <input class="form-control"type="text" name="N_Categoria" required>
    <br><br>
    <input class="form-control btn btn-dark" type="submit" name="enviar" >
</div>
</div>
</div>
</form>