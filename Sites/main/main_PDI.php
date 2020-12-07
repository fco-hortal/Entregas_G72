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
        <?php
        $lat = -33.5;
        $long = -70.5;
        $marker_list = [
          ["lat" => -33.4,
          "long" => -70.5],
          ["lat" => -33.4,
          "long" => -70.8]
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
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
  integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
  crossorigin=""></script>
<script>
  var mymap = L.map('mapid').setView([<?php echo $lat ?>, <?php echo $long ?>], 10);
  L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'your.mapbox.access.token'
    }).addTo(mymap);

  <?php foreach($marker_list as $marker) {
    echo
    'L.marker(['$marker['lat']','$marker['long']']).addTo(mymap);';
  } ?>

</script>
</html>
