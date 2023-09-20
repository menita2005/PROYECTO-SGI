<?php
$controlador = new ControladorCategoria();
if(isset($_GET['IDCategoria'])){
    $row = $controlador->ver($_GET['IDCategoria']);
}else {
        header('Location: index.php');
    }?>
    <table class="table table-dark table-striped">
    <tr >
    <th>IDCategoria</th>
        
        <th>Nombre Categoria</th>
        </tr>
        <tr>
        <td><?php echo $row['IDCategoria']?></td>
            
            <td><?php echo $row['N_Categoria']?></td></tr>
    </table>
