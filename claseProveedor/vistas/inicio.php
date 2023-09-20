<?php
$controlador = new ControladorProveedor();
$resultado = $controlador->index();
?>

<div class="mx-auto p-1" style="width: 400px;"><p class="fs-1">Página inicio</p></div>
<table border=1 class="table table-dark table-striped">
    <thead>
        <th>IDProveedor</th>
        <th>Nombre</th>
        <th>N_Contacto</th>
        <th>Dirección</th>
        <th>Correo</th>
        <th>Acción</th>
    </thead>
    <tbody>
    <?php while ($row = mysqli_fetch_array($resultado)) { ?>
        <tr>
            <td><?php echo $row['IDProveedor']?></td>
            <td><?php echo $row['Nombre']?></td>
            <td><?php echo $row['N_Contacto']?></td>
            <td><?php echo $row['Direccion']?></td>
            <td><?php echo $row['Correo']?></td>
            <td>
                <a class="btn btn-dark" href="?cargar=ver&IDProveedor=<?php echo $row['IDProveedor']; ?>">Ver</a>
                <a class="btn btn-info"href="?cargar=editar&IDProveedor=<?php echo $row['IDProveedor']; ?>">Editar</a>
                <a class="btn btn-danger"href="?cargar=eliminar&IDProveedor=<?php echo $row['IDProveedor']; ?>">Eliminar</a>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>

