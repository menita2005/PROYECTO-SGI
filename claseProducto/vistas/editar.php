<?php
$controlador = new ControladorProductos();
if(isset($_GET['IDproducto'])){
    $row = $controlador->ver($_GET['IDproducto']);
}else {
        header('Location: index.php');
    }
    if(isset($_POST['enviar'])){
        $controlador->editar($_GET['IDproducto'], $_POST['NombreP'], $_POST['Descripcion'], $_POST['Precio'], $_POST['IDstock'], $_POST['IDProveedor'], $_POST['IDCategoria']);
        header('Location: index.php');
    }?>

<form action="" method="POST" class="form-control form-control-lg">
<div class="mb-3">
    <label  class="form-label">IDProducto</label>
    <input  class="form-control" type="Number" name="IDproducto" value="<?php echo $row['IDproducto'];   ?>" disabled>
    <br><br>
    <label  class="form-label">Nombre Producto</label>
    <input  class="form-control" type="text" name="NombreP"  value=<?php echo $row['NombreP'];   ?> required>
    <br><br>
    <label  class="form-label">Descripcion</label>
    <input  class="form-control"type="text" name="Descripcion"  value=<?php echo $row['Descripcion'];   ?> required>
    <br><br>
    <label  class="form-label">Precio</label>
    <input  class="form-control" type="number" name="Precio"  value=<?php echo $row['Precio'];   ?> required>
    <br><br>
    <label  class="form-label">IDstock</label>
    <input  class="form-control" type="number" name="IDstock" value=<?php echo $row['IDstock'];   ?> required>
    <br><br>
    <label  class="form-label">IDProveedor</label>
    <input  class="form-control" type="number" name="IDProveedor" value=<?php echo $row['IDProveedor'];   ?> required>
    <br><br>
    <label  class="form-label">IDCategoria</label>
    <input  class="form-control" type="number" name="IDCategoria" value=<?php echo $row['IDCategoria'];   ?> required>
    <br><br>
    <input  class="btn btn-dark" type="submit" name="enviar" value="Editar">
</div>
</form>