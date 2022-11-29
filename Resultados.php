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
          <li class="nav-item">
            <a class="nav-link" href="DatosPartido.php">Datos</a>
          </li>
        </ul>
        <a href="login.php"><button type="button" class="btn btn-secondary" style="margin: 0px 5px 0px 5px;">Login</button></a>
        <a href="registrar.php"><button type="button" class="btn btn-secondary" style="margin: 0px 5px 0px 5px;">Register</button></a>
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
  $fechaform = $_POST['fechaform'];

  $conn = mysqli_connect('localhost', 'root', '', 'datos_mundial');
  ?>
  <table class="table table-hover" style="position: absolute; top: 50%; margin: 0px 20px 0px 20px;">
    <thead>
      <tr>
        <th scope="col">Estadio</th>
        <th scope="col">Hora</th>
        <th scope="col">Fecha</th>
        <th scope="col">Equipo 1</th>
        <th scope="col">Goles Equipo 1</th>
        <th scope="col"></th>
        <th scope="col">Goles Equipo 2</th>
        <th scope="col">Equipo 2</th>

      </tr>
    </thead>
    <?php

    //$sql = "SELECT * FROM partidos WHERE (fecha = '$fechaform')";
    $sql = "SELECT * FROM (partidos_juegos pj, partidos p, equipos e)
    WHERE pj.id_partido = p.id_partido AND e.id_equipo = pj.id_equipo AND e.grupo = 'A'";
    //and p.fecha = '$fechaform'

    $result = mysqli_query($conn, $sql);

    while ($mostra = mysqli_fetch_all($result, MYSQLI_ASSOC)) {

      $estadio = $mostra[0]["estadio"];
      $hora = $mostra[0]["hora"];
      $fecha = $mostra[0]["fecha"];
      $id_equipo1 = $mostra[0]["pais"];
      $gol_equipo1 = $mostra[0]["gol_equipo"];

      $id_equipo2 = $mostra[1]["gol_equipo"];
      $gol_equipo2 = $mostra[1]["pais"];
    }
    ?>
    <tbody>
      <tr class="table-danger">
        <th scope="row"><?php echo $estadio  ?></th>
        <td><?php echo $hora ?></td>
        <td><?php echo $fecha ?></td>
        <td><?php echo $id_equipo1 ?></td>
        <td><?php echo $gol_equipo1  ?></td>
        <td>-</td>
        <td><?php echo $id_equipo2 ?></td>
        <td><?php echo $gol_equipo2 ?></td>
      </tr>

      <?php

      ?>
    </tbody>
  </table>
</body>
<style>
</style>

</html>