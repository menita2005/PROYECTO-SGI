<?php 
session_start();
    if ( !empty($_POST["btningresar"]) ) {
        if ( !empty($_POST["usuario"]) and !empty($_POST["clave"])) {
            $usuario=$_POST["usuario"];
            $clave=$_POST["clave"];
            
            $sql=$conexion->query("SELECT * from usuarios where Nombre='$usuario' and Clave='$clave'");
            if ($datos=$sql->fetch_object()) {
                $_SESSION["IDusuario"]=$datos->IDusuario;
                $_SESSION["Nombre"]=$datos->Nombre;
                $_SESSION["Clave"]=$datos->Clave;
                header("location: inicio.php");
            }else{
                echo "<div  class='alert alert-danger'> acceso denegado</div>";
            }
        } else {
            echo "campos vacios";

}

}
?>