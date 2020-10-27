<?php include('../templates/header.html');   ?>

<body>
<?php
  require("../config/conexion2.php");

  #En caso de ser necesario se crean variables desde inputs en index ---------------------EDITAR-->
  $id = $_POST["id"];

  #Se construye la consulta SQL como un string--------------------------------------------EDITAR-->
  $query = "
  SELECT tnombre, edad, sexo FROM trabajador WHERE rut LIKE '$id';
  ";

  #Se prepara y ejecuta la consulta. Se obtienen TODOS los resultados
  $result = $db -> prepare($query);
  $result -> execute();
  $resultados = $result -> fetchAll();
  ?>

  <!-- Se crea tabla -->
  <div class="card pl-3 pr-3 pt-4 pb-3"s>
      <span class="border border-primary">
        <h5 class="card-header">Información personal:</h5>
        <div class="card-body">
  <table>
    <tr>
      <!-- Se crea columnas de tabla -----------------------------------------------------EDITAR-->
      <th>Nombre</th>
      <th>Edad</th>
      <th>Sexo</th>
    </tr>

      <?php
        #Se itera echo en tabla para mostrar resultados segun las columnas de la tabla ---EDITAR-->
        foreach ($resultados as $r) {
          echo "<tr>
          <td>
                <form action=\"../main/main_buscador_rut.php\" method=\"post\">
                  <input type=\"hidden\" class=\"form-control\" name=\"id\" value=\"$r[0]\">
                  <input type=\"hidden\" class=\"form-control\" name=\"name\" value=\"$r[1]\">
                  <input type=\"hidden\" class=\"form-control\" name=\"name\" value=\"$r[2]\">
                  <button type=\"input\" class=\"btn btn-primary\"><i class=\"far fa-eye\"></i>Ver buques de naviera</button>
                </form>
              </td>
          </tr>";
      }
      ?>
      <tbody>

  </table>


<br>
<br>
<form action="../main/main_buscador_rut.php" method="get">
    <button type="submit" class="btn btn-primary btn-lg">Volver</button>
</form>
</body>

</html>
