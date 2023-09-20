<?php
$controlador = new ControladorProveedor();
if(isset($_GET['IDProveedor'])){
    $row = $controlador->ver($_GET['IDProveedor']);
}else {
        header('Location: index.php');
    }?>
    <table class="table table-dark table-striped">
    <tr >
    <th>IDProveedor</th> 
    <th>Nombre</th>
    <th>Direccion</th> 
    <th>Correo</th>
    <th>Número de contacto</th></tr><tr>
        <td><?php echo $row['IDProveedor']; ?></td>
    
        <td> <?php echo $row['Nombre']; ?></td>
    
        <td><?php echo $row['Direccion']; ?></td>
     
        <td><?php echo $row['Correo']; ?></td>
    
     <td><?php echo $row['N_Contacto']; ?></td></tr>
    </table>
