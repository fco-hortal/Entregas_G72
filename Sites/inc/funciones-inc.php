<?php

function emptyInputSignup($nombre, $edad, $sexo, $n_pass$n_pass, $nac, $pass1, $pass2) {

    $result;
    if (empty($nombre) || empty($edad) || empty($sexo) || empty($n_pass) || empty($nac) || empty($pass1) || empty($pass2) || ){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function pwdMatch($pass1, $pass2) {

    $result;
    if ($pass1 !== $pass2)) {
        $result= true;
    }
    else{
        $result = false;
    }
    return $result;
}

function uidExist($db, $n_pass) {
    $state = true;
    $sql = 'SELECT * FROM us;';
    $result = $db -> prepare($sql);
    $result -> execute();
    $resultados = $result -> fetchAll();
    foreach ($resultados as $r) {
        if ($r[3] == $n_pass){
            $state = true;
            return $state;
            exit()
        }
        else {
            $state = false;
            return $state;
        }
    }

}

function userCreate($db, $nombre, $edad, $sexo, $n_pass, $nac, $pass1) {
    $sql = 'INSERT INTO usuarios (nombre, edad, sexo, pasaporte, nacionalidad, contraseña) VALUES ($nombre, $edad, $sexo,$n_pass, $nac, $pass1);'
    $result = $db -> prepare($sql);
    $result -> execute();
    
}