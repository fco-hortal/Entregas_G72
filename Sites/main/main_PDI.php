<?php session_start();
include('../templates/header.html');   ?>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>

<body>
  </br>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="../index.php">DATABASE OP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="main_miperfil.php">Mi Perfil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="main_navieras.php">Navieras</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="main_puertos.php">Puertos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="main_buscador_rut.php">Buscador</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="main_PDI.php">Funcionalidades PDI</a>
      </li>
    </div>
  </nav>
<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->

<div class="card pl-3 pr-3 pt-4 pb-3">
    <span class="border border-primary">
      <h5 class="card-header">Mapa:</h5>
      <div class="card-body">
        
        <!-- AQUI HACER BUSQUEDA POR API Y LECTURA DE JSON -->
        <?php 
          $lat = -33.5;
          $long = -70.5;
          $marker_list = [
              ["lat" => -33.4,
              "long" => -70.5],
              ["lat" => -33.6,
              "long" => -70.5],
              ["lat" => -33.5,
              "long" => -70.6],
          ];
        ?>
        
        <div id="mapid" style="height:400px">
        </div>
      </div>
    </span>
  </div>

<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
  <br>
</body>
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
  integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
  crossorigin=""></script>
<script>
  var map = L.map('mapid').setView([<?php echo $lat ?>, <?php echo $long ?>], 10);

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(map);

  <?php foreach($marker_list as $marker) {
      echo 
      'L.marker([' . $marker["lat"] . ',' . $marker["long"] . ']).addTo(map);';
  } ?>

</script>
</html>
