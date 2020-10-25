<?php
    $usuario_login = $_POST['user'];
    $contraseña_login = $_POST['pass'];
    $errores = array()

    require("../config/conexion1.php");
    if (empty($usuario_login)){
        array_push($errores, 'Usuario es requerido');
    }
    if (empty($contraseña_login)){
        array_push($errores, 'Contraseña es requerida');
    }
    
    

?>