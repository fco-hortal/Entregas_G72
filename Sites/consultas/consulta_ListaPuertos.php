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
              <th scope="col">Puertos</th>
              <th scope="col">Capacidadd de Instalación</th>
              <th scope="col">Registro de Permisos</th>
            </tr>
          </thead>
          <tbody>
            <?php
            #Se itera echo en tabla para mostrar resultados segun las columnas de la tabla ---EDITAR-->
            foreach ($resultados as $r) {
              echo "<tr>
              <td>$r[1]</td>
              <td>
                <button type=\"button\" class=\"btn btn-primary\"><i class=\"far fa-eye\"></i>Ver capacidad de instalaciones</button>
              </td>
              <td>
                <button type=\"button\" class=\"btn btn-primary\"><i class=\"far fa-eye\">Registrar Permiso</i></button>
              </td>
              </tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
