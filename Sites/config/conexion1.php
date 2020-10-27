<?php
  try {
    #Pide las variables para conectarse a la base de datos.
    require('data.php'); 
    # Se crea la instancia de PDO
    $db = new PDO("pgsql:dbname=$databaseName1;host=localhost;port=5432", $user1, $password1, array(PDO::ATTR_PERSISTENT => true));
  } catch (Exception $e) {
    echo "No se pudo conectar a la base de datos: $e";
  }
?>
