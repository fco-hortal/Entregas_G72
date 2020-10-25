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
                <form action=\"../main/main_PuertosCapacidad.php\" method=\"post\">
                  <input type=\"hidden\" class=\"form-control\" name=\"id\" value=\"$r[0]\">
                  <input type=\"hidden\" class=\"form-control\" name=\"name\" value=\"$r[1]\">
                  <button type=\"input\" class=\"btn btn-primary\"><i class=\"far fa-eye\"></i>Ver capacidad de instalaciones</button>
                </form>
              </td>
              <td>
                <form action=\"../main/main_PuertosPermisos.php\" method=\"post\">
                  <input type=\"hidden\" class=\"form-control\" name=\"id\" value=\"$r[0]\">
                  <input type=\"hidden\" class=\"form-control\" name=\"name\" value=\"$r[1]\">

                  <div class=\"btn-group\">
                    <button type=\"input\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"far fa-eye\"></i>Registrar permiso para</button>
                    <div class=\"dropdown-menu\">
                      <a class=\"dropdown-item\" href=\"#\">Astillero</a>
                      <a class=\"dropdown-item\" href=\"#\">Muelle</a>
                    </div>
                  </div>

                  <button type=\"input\" class=\"btn btn-primary\"><i class=\"far fa-eye\"></i>Registrar Permiso</button>
                </form>              
              </td>
              </tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  
