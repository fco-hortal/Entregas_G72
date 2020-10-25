<?php


$nombre = $_POST["nombre"];
$edad = $_POST["edad"];
$sexo = $_POST["sexo"];
$n_pass = $_POST["n_pas"];
$nac = $_POST["nac"];
$pass1 = $_POST["pass_1"];
$pass2 = $_POST["pass_2"];

require '../config/conexion1.php';
require 'funciones-inc.php';

if (emptyInputSignup($nombre, $edad, $sexo, $n_pass, $nac, $pass1, $pass2) !== FALSE) {
    header('location: ../index.php?error=emptyinput');
    exit();    
} 
if (pwdMatch($pass1, $pass2) !== FALSE) {
    header('location: ../index.php?error=match_pwd');
    exit();
}
if (uidExist($db, $n_pass) !== false) {
    header('location: ../index.php?error=uidExist');
    exit();
    }
   
userCreate($db, $nombre, $edad, $sexo, $n_pass, $nac, $pass1);

header('location: ../main/main_miperfil.php');


    
?>