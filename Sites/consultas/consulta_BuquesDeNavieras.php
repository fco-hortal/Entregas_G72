<?php
  require("../config/conexion1.php");

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
  <table>
    <tr>
      <!-- Se crea columnas de tabla -----------------------------------------------------EDITAR-->
      <th>Nombre</th>
      <th>País</th>
      <th>Giro</th>
    </tr>
  
      <?php
        #Se itera echo en tabla para mostrar resultados segun las columnas de la tabla ---EDITAR-->
        foreach ($resultados as $r) {
          echo "<tr>
          <td>$r[1]</td>
          <td>$r[2]</td>
          <td>$r[3]</td>
          </tr>";
      }
      ?>
      
  </table>
