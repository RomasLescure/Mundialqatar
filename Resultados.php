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
  <title>Resultados</title>
</head>

<body class="bg-light bg-gradient">
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Qatar 2022</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="inicio.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="equipos.php">Equipos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Resultados</a>
            <span class="visually-hidden">(current)</span>
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

  <br>
  <h1 style="margin-left: 20px">Resultados de partidos</h1>
  <form action="Resultados.php" method="post">
    <label for="fecha" style="margin-left: 20px">Buscar partidos por fecha:</label>
    <input type="date" id="fecha" name="fechaform" value="2022-11-29" min="2022-11-20" max="2022-12-18">
    <input type="submit" value="Buscar">
  </form>

  <?php

  $con = mysqli_connect('localhost', 'root', '', 'datos_mundial');

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fechaform = $_POST['fechaform'];

  ?>
    <table class="table table-hover" style="position: absolute; top: 50%; margin: 0px 20px 0px 20px;">
      <thead>
        <tr>
          <th scope="col">Estadio</th>
          <th scope="col">Hora</th>
          <th scope="col">Fecha</th>
          <th scope="col">Equipo 1</th>
          <th scope="col">Goles Equipo 1</th>
          <th scope="col">Goles Equipo 2</th>
          <th scope="col">Equipo 2</th>

        </tr>
      </thead>
      <?php

      $sql = "SELECT * FROM (partidos_juegos pj, partidos p, equipos e)
    WHERE pj.id_partido = p.id_partido AND e.id_equipo = pj.id_equipo AND p.fecha = '$fechaform'";

      $q = $con->query($sql);
      if ($q->num_rows > 0) {
        $i = 0;
        $j = 1;
        $result = mysqli_query($con, $sql);
        foreach ($mostra = mysqli_fetch_all($result, MYSQLI_ASSOC) as $valor) {

          echo "<tr class='table-warning'>";
          echo "<th scope='row'>" . $mostra[$i]["estadio"] . "</td>";
          echo "<td>" . $mostra[$i]["hora"] . "</td>";
          echo "<td>" . $mostra[$i]["fecha"] . "</td>";
          echo "<td>" . $mostra[$i]["pais"] . "</td>";
          echo "<td>" . $mostra[$i]["gol_equipo"] . "</td>";
          echo "<td>" . $mostra[$j]["gol_equipo"] . "</td>";
          echo "<td>" . $mostra[$j]["pais"] . "</td>";
          echo "</tr>";

          $i = $i + 2;
          $j = $j + 2;

          ini_set('display_errors', 0);
          ini_set('display_startup_errors', 0);
        }
        echo "</table>";
        unset($valor);
      } else {
      ?>
        <label for="fecha" style="margin-left: 20px">Esta información aun no se encuentra registrada</label>
    <?php
      }
    }
    ?>


</body>

</html>