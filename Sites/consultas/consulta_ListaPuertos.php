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
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" id=\"dropdownMenu2\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"far fa-eye\"></i>
                  Registrar permiso para
                  </button>

                  <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu2\">

                    <form action=\"../main/main_PuertosPermisosAstilleros.php\" method=\"post\">
                      <input type=\"hidden\" class=\"form-control\" name=\"id\" value=\"$r[0]\">
                      <input type=\"hidden\" class=\"form-control\" name=\"name\" value=\"$r[1]\">
                      <button type=\"input\" class=\"btn btn-primary\"><i class=\"far fa-eye\"></i>Astillero</button>
                    </form>  

                    <form action=\"../main/main_PuertosPermisosMuelles.php\" method=\"post\">
                      <input type=\"hidden\" class=\"form-control\" name=\"id\" value=\"$r[0]\">
                      <input type=\"hidden\" class=\"form-control\" name=\"name\" value=\"$r[1]\">
                      <button type=\"input\" class=\"btn btn-primary\"><i class=\"far fa-eye\"></i>Muelle</button>
                   </form>  

                  </div>
                </div>
              </td>
              </tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  
