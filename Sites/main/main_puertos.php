<?php include('../templates/header.html');   ?>

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
        <a class="nav-link active" href="main_puertos.php">Puertos</a>
      </li>
    </div>
  </nav>

  <div class="card pl-3 pr-3 pt-4 pb-3"s>
    <span class="border border-primary">
      <h5 class="card-header">Seleccione un puerto:</h5>
      <div class="card-body">
        <?php require('../consultas/test.php');   ?>
        <p class="card-text">Mostrar input de intervalos de fechas y entregar dias en el intervalo donde no esta agotada capacidad y ademas promedio de ocupacion en dicho intervalo</p>
        <p class="card-text">Mostrar input de tipo de instalacion y fechas (segun instalacion) y una patente de barco y entregar instalaciones que tienen capacidad para ese barco en esa fecha en ese puerto --> si existe, crear permiso</p>
      </div>s
    </span>
  </div>

<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
  <br>

</body>
</html>