<?php
$controlador = new ControladorCategoria();
$resultado = $controlador->index();
?>

<div class="mx-auto p-1" style="width: 900px;"><p class="fs-1">Página inicio</p></div>
<table border=1 class="table table-dark ">
    <thead>
        
        <th>IDCategoria</th>
        <th>Nombre Categoria</th>
        <th>Acción</th>
    </thead>
    <tbody>
    <?php while ($row = mysqli_fetch_array($resultado)) { ?>
        <tr>
            <td><?php echo $row['IDCategoria']?></td>
            
            <td><?php echo $row['N_Categoria']?></td>
            <td>
                <a class="btn btn-dark" href="?cargar=ver&IDCategoria=<?php echo $row['IDCategoria']; ?>">Ver</a>
                <a class="btn btn-info"href="?cargar=editar&IDCategoria=<?php echo $row['IDCategoria']; ?>">Editar</a>
                <a class="btn btn-danger"href="?cargar=eliminar&IDCategoria=<?php echo $row['IDCategoria']; ?>">Eliminar</a>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>

