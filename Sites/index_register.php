<?php include('templates/header.html');   ?>

<body>
  </br>
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">GRUPO 133+72</h1>
      <p class="lead">DEMO DEMO DEMO DEMO DEMO DEMO DEMO DEMO DEMO DEMO DEMO DEMO DEMO DEMO</p>
    </div>
  </div>

  <div class="mx-auto pl-5 pr-5 col-5">
    <div class="card text-center">
    <div class="card-header">
      <ul class="nav nav-pills card-header-pills justify-content-center">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Loguear</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Registrar</a>
        </li>
      </ul>
    </div>
    <div class="card-body">
      <form action="main/main_miperfil.php" method="post">
        <div class="form-group">
            <label>Para registrar un nuevo usuario, por favor complete con la siguiente información:<br>Nombre:</label>
            <input type="text" class="form-control" name="nombre">
        </div>
        <div class="form-group">
          <label>Edad:</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="edad">
        </div>
        <div class="form-group">
          <label>Sexo:</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="sexo">
        </div>
        <div class="form-group">
          <label>Número de pasaporte:</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="n_pas">
        </div>
        <div class="form-group">
          <label>Nacionalidad:</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="nac">
        </div>
        <div class="form-group">
            <label>Contraseña:</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
        </div>
        <button type="input" class="btn btn-primary">Registrar</button>
      </form>
    </div>
  </div>
</div>
<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->

<br>

</body>
</html>
