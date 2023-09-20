<?php
$controlador = new ControladorProductos();
if(isset($_GET['IDproducto'])){
    $row = $controlador->ver($_GET['IDproducto']);
}else {
        header('Location: index.php');
    }?>
    <table class="table table-dark table-striped">
    <tr >
    <th>IDProducto</th>
        <th>Nombre Producto</th>
        <th>Descripcion</th>
        <th>Precio</th>
        <th>IDstock</th>
        <th>IDProveedor</th>
        <th>IDCategoria</th>
        </tr>
        <tr>
        <td><?php echo $row['IDproducto']?></td>
            <td><?php echo $row['NombreP']?></td>
            <td><?php echo $row['Descripcion']?></td>
            <td><?php echo $row['Precio']?></td>
            <td><?php echo $row['IDstock']?></td>
            <td><?php echo $row['IDProveedor']?></td>
            <td><?php echo $row['IDCategoria']?></td></tr>
    </table>
