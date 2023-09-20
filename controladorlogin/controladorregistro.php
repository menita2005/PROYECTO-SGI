<?php
if ( !empty($_POST["registrobutton"]) ) {
    if ( !empty($_POST["Nombre"]) and !empty($_POST["Correo"]) and !empty($_POST["Clave"])) {
        $Nombre=$_POST["Nombre"];
        $Correo=$_POST["Correo"];
        $clave=$_POST["Clave"];
        
        $sql=$conexion->query("INSERT INTO usuarios (Nombre,Email,Clave) VALUES ('$Nombre','$Correo','$clave')");
        header("localhost: ../index.php");
    } else {
        echo "<div  class='alert alert-danger'> Campos Vacios</div>";

}

}

?>