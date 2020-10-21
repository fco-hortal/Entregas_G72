<?php
  require("../config/conexion2.php");

  #En caso de ser necesario se crean variables desde inputs en index ---------------------EDITAR-->
  #$var1 = $_POST["nombre_var1"];

  #Se construye la consulta SQL como un string--------------------------------------------EDITAR-->
  
  $query = "
  SELECT * FROM puerto;
  ";

  #Se prepara y ejecuta la consulta. Se obtienen TODOS los resultados
  $result = $db -> prepare($query);
  $result -> execute();
  $resultados = $result -> fetchAll();
  ?>

  <!-- Se crea tabla -->
  <div class="container">
    <div class="row">
      <div class="col-12">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">Ver capacidad Instalacion</th>
              <th scope="col">Registrar Permisos</th>
            </tr>
          </thead>
          <tbody>
            <?php
            #Se itera echo en tabla para mostrar resultados segun las columnas de la tabla ---EDITAR-->
            foreach ($resultados as $r) {
              echo "<tr>
              <td>
                <button type=\"button\" class=\"btn btn-primary\"><i class=\"far fa-eye\"></i>Ver capacidad de instalaciones del puerto: $r[1]</button>
              </td>
              <td>
                <button type=\"button\" class=\"btn btn-primary\"><i class=\"far fa-eye\"></i>Registrar permiso en puerto: $r[1]</button>
              </td>
              </tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
