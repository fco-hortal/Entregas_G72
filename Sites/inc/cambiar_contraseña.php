<?php
require "../config/conexion1.php";
require  "funciones_contraseña.php";

$pass_act = $_POST['pass_old'];
$pass_new1 = $_POST['pass_new1'];
$pass_new2 = $_POST['pass_new2'];
$pasaporte = $_SESSION['pasaporte'];

if (passExist($pass_act, $pasaporte, $db) == TRUE) {
    header('location: ../main/main_miperfil.php?error=wrongPassword');
    exit();


}

if ($pass_new1 != $pass_new2) {
    header('location: ../main/main_miperfil.php?error=passwordDontMatch');
    exit();
}

#cambio contraseña

$sql1 = 'UPDATE usuarios SET contraseña = '$pass_new1' WHERE pasaporte = '$pasaporte' AND contraseña = '$pass_act;' ';
$result = $db -> prepare($sql);
$result -> execute();


header('location: ../main/main_miperfil.php?error=wrongPassword?PasswordChange');












?>