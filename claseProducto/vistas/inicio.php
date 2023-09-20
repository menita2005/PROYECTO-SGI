<?php
$controlador = new ControladorProductos();
$resultado = $controlador->index();
?>

<div class="mx-auto p-1" style="width: 900px;"><p class="fs-1">Página inicio</p></div>
<table border=1 class="table table-dark ">
    <thead>
        <th>IDProducto</th>
        <th>NombreP</th>
        <th>Descripcion</th>
        <th>Precio</th>
        <th>IDstock</th>
        <th>IDProveedor</th>
        <th>IDCategoria</th>
        <th>Acción</th>
    </thead>
    <tbody>
    <?php while ($row = mysqli_fetch_array($resultado)) { ?>
        <tr>
            <td><?php echo $row['IDproducto']?></td>
            <td><?php echo $row['NombreP']?></td>
            <td><?php echo $row['Descripcion']?></td>
            <td><?php echo $row['Precio']?></td>
            <td><?php echo $row['CantidadStock']?></td>
            <td><?php echo $row['NombreProveedor']?></td>
            <td><?php echo $row['Categoria']?></td>
            <td>
                <a class="btn btn-dark" href="?cargar=ver&IDproducto=<?php echo $row['IDproducto']; ?>">Ver</a>
                <a class="btn btn-info"href="?cargar=editar&IDproducto=<?php echo $row['IDproducto']; ?>">Editar</a>
                <a class="btn btn-danger"href="?cargar=eliminar&IDproducto=<?php echo $row['IDproducto']; ?>">Eliminar</a>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>

