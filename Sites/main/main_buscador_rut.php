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
        <a class="nav-link" href="main_puertos.php">Puertos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="main_buscador_rut.php">Buscador</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="main_PDI.php">Funcionalidades PDI</a>
      </li>
    </div>
  </nav>

<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->

  <div class="card pl-3 pr-3 pt-4 pb-3"s>
    <span class="border border-primary">
      <h5 class="card-header">Buscador de personal</h5>
      <div class="card-body">
        <form action="../consultas/consulta_buscador_rut.php" method="post">
          <div class="form-group">
            <label>Ingrese RUT:</label>
            <input type="text" class="form-control" name="id">
          </div>
          <button type="input" class="btn btn-primary">Buscar</button>
        </form>
      </div>
    </span>
  </div>


  <div class="card pl-3 pr-3 pt-4 pb-3"s>
    <span class="border border-primary">
      <h5 class="card-header">Revisar mensajes recibidos</h5>
      <div class="card-body">
        <form action="../consultas/consulta_mensaje_recibidos.php" method="post">
          <button type="input" class="btn btn-primary">Buscar</button>
        </form>
      </div>
    </span>
  </div>

  <div class="card pl-3 pr-3 pt-4 pb-3"s>
    <span class="border border-primary">
      <h5 class="card-header">Revisar mensajes enviados</h5>
      <div class="card-body">
        <form action="../consultas/consulta_mensaje_enviados.php" method="post">
          <button type="input" class="btn btn-primary">Buscar</button>
        </form>
      </div>
    </span>
  </div>

  <div class="card pl-3 pr-3 pt-4 pb-3"s>
    <span class="border border-primary">
      <h5 class="card-header">Enviar mensaje a:</h5>
      <div class="card-body">
        <form action="../consultas/consulta_mensaje_enviar.php" method="post">
          <div class="form-group">
            <label>Ingrese usuario:</label>
            <input type="text" class="form-control" name="usuario">
          </div>
          <div class="form-group">
            <label>Ingrese mensaje:</label>
            <input type="text" class="form-control" name="mensaje">
          </div>
          <button type="input" class="btn btn-primary">Buscar</button>
        </form>
      </div>
    </span>
  </div>
  
  <?php $id_usuario = $_GET['ID']; ?>
        <h1>Aquí hacemos Requests a la API</h1>
        <h3>Ingrese los campos que desea</h3>
        <div class="api-requester">
            <form align="center" action="../consultas/consulta_mensaje_buscar.php" method="get">
                <input type="hidden" name="ID" value="<?php echo $id_usuario ?>">
                <label for="desired">Busqueda Simple:</label><br>
                <input id="desired"> type="text" name="desired">
                <label for="required">Busqueda Exacta:</label><br>
                <input id="required" type="text" name="required">
                <label for="forbidden">No buscar:</label><br>
                <input id="forbidden" type="text" name="forbidden">
            <input type="submit" value="Buscar">
            </form>
        </div>
    </body>



<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->

<br>

</body>

<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
  <br>

</body>
</html>
