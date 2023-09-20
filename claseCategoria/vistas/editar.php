<?php
$controlador = new ControladorCategoria();
if(isset($_GET['IDCategoria'])){
    $row = $controlador->ver($_GET['IDCategoria']);
}else {
        header('Location: index.php');
    }
    if(isset($_POST['enviar'])){
        $controlador->editar($_GET['IDCategoria'], $_POST['N_Categoria']);
        header('Location: index.php');
    }?>

<form action="" method="POST" class="form-control form-control-lg">
<div class="mb-3">
    <label  class="form-label">IDCategoria</label>
    <input  class="form-control" type="Number" name="IDCategoria" value="<?php echo $row['IDCategoria'];   ?>" disabled>
    <br><br>
    <label  class="form-label">Nombre Categoria</label>
    <input  class="form-control" type="text" name="N_Categoria" value=<?php echo $row['N_Categoria'];   ?> required>
    <br><br>
    <input  class="btn btn-dark" type="submit" name="enviar" value="Editar">
</div>
</form>