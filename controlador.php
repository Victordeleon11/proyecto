<?php
session_start();
if (!empty($_POST["submit"])) {
        if (!empty($_POST["usuario"]) and !empty($_POST["password"])) {
            $usuario = $_POST["usuario"];
            $password = $_POST["password"];
            $sql=$conector->query(" select * from usuarios where usuario='$usuario' and contraseña='$password'");
            if ($datos=$sql->fetch_object()) {
                $_SESSION["id"]=$datos->id;
                $_SESSION["nombre"]=$datos->nombre;
                $_SESSION["apellido"]=$datos->apellido;
                header("location:class.php");
            } else {
                echo "ACCESO DENEGADO";
            }
        } else {
            echo "CAMPOS VACIOS";
        }
    }
?>