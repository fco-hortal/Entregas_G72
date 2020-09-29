<?php include('../templates/header.html');   ?>

<body>
<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

  #Se obtiene el valor del input del usuario
  $altura = $_POST["altura"];
  $altura = intval($altura);

  #Se construye la consulta como un string
 	$query = "SELECT buques.bid, buques.nombre, buques.nid, buques.numero_personas, buques.patente, buques.pais, buques.tipo, buques.id_capitan FROM buques JOIN pesquero ON buques.bid = pesquero.bid WHERE buques.numero_personas = (SELECT MAX(buques.numero_personas) FROM buques);";

  #Se prepara y ejecuta la consulta. Se obtienen TODOS los resultados
	$result = $db -> prepare($query);
	$result -> execute();
	$pokemones = $result -> fetchAll();
  ?>

  <table>
  <table>
    <tr>
      <th>bid</th>
      <th>nombre</th>
      <th>nombrre naviera</th>
      <th>numero personas</th>
      <th>patente</th>
      <th>pais</th>
      <th>tipo</th>
      <th>id capitan</th>
    </tr>
  
      <?php
        // echo $pokemones;
        foreach ($navieras as $p) {
          echo "<tr><td>$p[0]</td><td>$p[1]</td><td>$p[2]</td><td>$p[3]</td><td>$p[4]</td><td>$p[5]</td><td>$p[6]</td><td>$p[7]</td></tr>";
      }
      ?>
      
  </table>

<?php include('../templates/footer.html'); ?>
