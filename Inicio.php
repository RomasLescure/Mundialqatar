<?php

session_start();
if (!empty($_SESSION['user'])) {

  $user = $_SESSION['user'];

  $con = mysqli_connect('localhost', 'root', '', 'datos_mundial');

  $sql = "SELECT * FROM usuarios WHERE user = '$user'";

  $result = mysqli_query($con, $sql);
  $mostra = mysqli_fetch_all($result, MYSQLI_ASSOC);

  $tipo = $mostra[0]["tipo"];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap.min.css">
  <title>Inicio</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Qatar 2022</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link active" href="#">Inicio
              <span class="visually-hidden">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="equipos.php">Equipos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Resultados.php">Resultados</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Posiciones.php">Tabla de posiciones por grupo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="favoritos.php">Favoritos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="clasificaciones.php">Clasificaciones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="API.php">API</a>
          </li>
          <?php

          if (!empty($tipo)) {
            $_SESSION['type'] = $tipo;
          }
          if (isset($_SESSION['type']) && $_SESSION['type'] == 'admin') : ?>

            <li class="nav-item">
              <a class="nav-link" href="DatosPartido.php">Datos</a>
            </li>

          <?php endif; ?>
        </ul>
        <?php
        if (empty($_SESSION['user'])) : ?>
          <a href="login.php"><button type="button" class="btn btn-secondary" style="margin: 0px 5px 0px 5px;">Login</button></a>
          <a href="registrar.php"><button type="button" class="btn btn-secondary" style="margin: 0px 5px 0px 5px;">Register</button></a>
        <?php endif; ?>
        <?php
        if (!empty($_SESSION['user'])) : ?>
          <a href="logout.php"><button type="button" class="btn btn-secondary" style="margin: 0px 5px 0px 5px;">Logout</button></a>
        <?php endif; ?>

      </div>
    </div>
  </nav>

  <div class="d-flex justify-content-between">

    <div class="animate__animated animate__fadeInUp">
      <div class="card border-dark" style="max-width: 20rem; margin: 150px 0px 0px 80px">
        <div class="card-header">FIFA WORLD CUP</div>
        <div class="card-body">
          <h4 class="card-title">¡LLEGÓ QATAR 2022!</h4>
          <p class="card-text">El Mundial Qatar 2022 se está llevando a cabo de noviembre a diciembre.
            Se trata del torneo que paraliza al planeta y que hace que solo se hable de fútbol durante un
            mes en todos los rincones de cada uno de los países participantes.</p>
        </div>
      </div>
    </div>

    <div class="animate__animated animate__fadeInUp">
      <div class="card border-dark" style="max-width: 20rem; margin: 150px 80px 0px 0px">
        <div class="card-header">QATAR 2022</div>
        <div class="card-body">
          <h4 class="card-title">¿ESTÁS LISTO?</h4>
          <p class="card-text ">A continuación, podrás navegar a través de la información más completa del torneo para
            aquellos interesados en planear el futuro y estar preparados durante la cita mundialista del 2022.</p>
        </div>
      </div>
    </div>

  </div>

  <style>
    body {
      background: url(https://images5.alphacoders.com/128/1288612.jpg) no-repeat center center fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }

    .card {
      border: 3px solid white;
    }
  </style>

</body>

</html>