<?php
  require("../config/conexion1.php");

  echo "ID: $id NAME: $name ";
  #En caso de ser necesario se crean variables desde inputs en index ---------------------EDITAR-->
  #$id = $_POST["nombre_var1"];

  #Se construye la consulta SQL como un string--------------------------------------------EDITAR-->
  $query = "
  SELECT SELECT * FROM navieras WHERE navieras.nid = $id;
  ";

  #Se prepara y ejecuta la consulta. Se obtienen TODOS los resultados
  $result = $db -> prepare($query);
  $result -> execute();
  $resultados = $result -> fetchAll();
  ?>

  <!-- Se crea tabla -->
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">País</th>
        <th scope="col">Giro</th>
      </tr>
    </thead>
    <tbody>
      <?php
        foreach ($resultados as $r) {
          echo "<tr>
          <td>$r[1]</td>
          <td>$r[2]</td>
          <td>$r[3]</td>
          </tr>";
      }
      ?>
    </tbody>
  </table>
