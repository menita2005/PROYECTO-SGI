<?php 


$controlador = new ControladorProductos();
$proveedores = "SELECT * FROM proveedor";

if(isset($_POST['enviar'])){
    $r = $controlador->crear($_POST['IDproducto'],
    $_POST['NombreP'],$_POST['Descripcion'],
    $_POST['Precio'],$_POST['stock'],
    $_POST['IDProveedor'],$_POST['IDCategoria']);
    if($r){
        echo "se ha ingresado el Producto";
    }else{
        
}}
  
?>
<h3>Registro de un Producto</h3>
<hr>
<form action="" method="POST" class="form-control form-control-lg">
<div class="container">
<div class="container-sm">
<div class="mb-3">
    <label class="form-label">IDproducto</label>
    <input class="form-control"type="Number" name="IDproducto" maxlength="20" required>
    <br><br>
    <label class="form-label">Nombre Producto</label>
    <input class="form-control"type="text" name="NombreP"  required>
    <br><br>
    <label class="form-label">Descripcion</label>
    <input class="form-control" type="text" name="Descripcion"  required>
    <br><br>
    <label class="form-label">Precio</label>
    <input class="form-control"type="number" name="Precio"  required>
    <br><br>
    <label class="form-label">stock</label>
    <input class="form-control"type="number" name="stock" required>
    <br><br>
    <label class="form-label">IDProveedor</label>
       <select name="IDProveedor" >
       <php while ($row = mysqli_fetch_array($resultado)) { 
           echo '<option value="'.$row[IDProveedor].'">'.$row[Nombre].'</option>';
       }?>
      
      
    </select>
    <br><br>
    <label class="form-label">IDCategoria</label>
    <input class="form-control"type="number" name="IDCategoria" required>
    <br><br>
    <input class="form-control btn btn-dark" type="submit" name="enviar" >
</div>
</div>
</div>
</form>