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
        <a class="nav-link active" href="main_miperfil.php">Mi Perfil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="main_navieras.php">Navieras</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="main_puertos.php">Puertos</a>
      </li>
    </div>
  </nav>

  
  <div class="card pl-3 pr-3 pt-4 pb-3">
    <span class="border border-primary">
      <h5 class="card-header">Información personal:</h5>
      <div class="card-body">
        <h5 class="card-title">Nombre:</h5>
        <p class="card-text">XXXXXXXXXXX</p>
        <h5 class="card-title">Edad:</h5>
        <p class="card-text">XXXXXXXXXXX</p>
        <h5 class="card-title">Sexo:</h5>
        <p class="card-text">XXXXXXXXXXX</p>
        <h5 class="card-title">Número de pasaporte:</h5>
        <p class="card-text">XXXXXXXXXXX</p>
        <h5 class="card-title">Nacionalidad:</h5>
        <p class="card-text">XXXXXXXXXXX</p>
      </div>
    </span>
  </div>

  <div class="card pl-3 pr-3 pt-4 pb-3">
    <span class="border border-primary">
      <h5 class="card-header">Información para capitanes:</h5>
      <div class="card-body">
        <h5 class="card-title">Nombre de su buque:</h5>
        <p class="card-text">XXXXXXXXXXX</p>
        <h5 class="card-title">Patente:</h5>
        <p class="card-text">XXXXXXXXXXX</p>
        <h5 class="card-title">Tipo de buque:</h5>
        <p class="card-text">XXXXXXXXXXX</p>
        <h5 class="card-title">Nombre de naviera a la que pertenece:</h5>
        <p class="card-text">XXXXXXXXXXX</p>
        <h5 class="card-title">Próximo itinerario:</h5>
        <p class="card-text">XXXXXXXXXXX</p>
        <h5 class="card-title">Últimos 5 lugares en los que ha estado el buque:</h5>
        <p class="card-text">XXXXXXXXXXX</p>
      </div>
    </span>
  </div>

  <div class="card pl-3 pr-3 pt-4 pb-3">
    <span class="border border-primary">
      <h5 class="card-header">Información para jefes de instalaciones:</h5>
      <div class="card-body">
        <h5 class="card-title">Puerto en el que trabaja:</h5>
        <p class="card-text">XXXXXXXXXXX</p>
        <h5 class="card-title">Tipo de instalación a cargo:</h5>
        <p class="card-text">XXXXXXXXXXX</p>
      </div>
    </span>
  </div>

  <div class="card pl-3 pr-3 pt-4 pb-3"s>
    <span class="border border-primary">
      <h5 class="card-header">Cambiar contraseña:</h5>
      
    <div class="card-body">
      <form action="main_miperfil.php" method="post">
        <div class="form-group">
          <label>Ingrese su actual contraseña</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="pass_old">
        </div>
        <div class="form-group">
          <label>Ingrese la que desea que sea su nueva contraseña:</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="pass_new1">
        </div>
        <div class="form-group">
          <label>Reescriba su nueva contraseña:</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="pass_new2">
        </div>
        <button type="input" class="btn btn-primary">Cambiar contraseña</button>
      </form>
    </div>
    </span>
  </div>

<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
  <br>

</body>
</html>