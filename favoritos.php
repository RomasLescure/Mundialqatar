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
  <title>FAVORITOS</title>
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
            <a class="nav-link" href="inicio.php">Inicio</a>
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
            <a class="nav-link active" href="favoritos.php">Favoritos</a>
            <span class="visually-hidden">(current)</span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="clasificaciones.php">Clasificaciones</a>
          </li>
          <?php

          if (!empty($tipo)) {
            $_SESSION['type'] = $tipo;
          }
          if ($_SESSION['type'] == 'admin') : ?>

            <li class="nav-item">
              <a class="nav-link" href="DatosPartido.php">Datos</a>
            </li>

          <?php endif;  ?>
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

  <p><a href="equipos.php"></a>
    <br>
  <h4>¡APOYA A TU EQUIPO!</h4>
  <table class="table table-hover " style="position: left" ;>
    <thead>
      <tr>
      <tr class="table-dark">
        <th scope="col">ESTADIO</th>
        <th scope="col">FECHA</th>
        <th scope="col">HORA</th>
        <th scope="row">EQUIPO FAVORITO</th>
        <th scope="col">GOLES A FAVOR</th>
        <th scope="col">GOLES EN CONTRA</th>
      </tr>
    </thead>

    <?php
    $con = mysqli_connect('localhost', 'root', '', 'datos_mundial');
    $id_equipo = 0;

    if (isset($_GET['id_equipo'])) {
      $id_equipo = $_GET['id_equipo'];
    }

    $_SESSION['id_equipo'] = $id_equipo;
    $sql = "SELECT * FROM (partidos_juegos pj, partidos p, equipos e, equipos_juegos ej)
    WHERE pj.id_partido = p.id_partido AND e.id_equipo = pj.id_equipo AND e.id_equipo = ej.id_equipos AND e.id_equipo ='$id_equipo'";
    $q = $con->query($sql);
    $i = 0;

    if ($q->num_rows > 0) {
      $result = mysqli_query($con, $sql);
      foreach ($mostra = mysqli_fetch_all($result, MYSQLI_ASSOC) as $valor) {
        echo "<tr class='table-warning'>";
        echo "<th scope='row'>" . $mostra[$i]["estadio"] . "</td>";
        echo "<td>" . $mostra[$i]["hora"] . "</td>";
        echo "<td>" . $mostra[$i]["fecha"] . "</td>";
        echo "<td>" . $mostra[$i]["pais"] . "</td>";
        echo "<td>" . $mostra[$i]["ga"] . "</td>";
        echo "<td>" . $mostra[$i]["gc"] . "</td>";
        echo "</tr>";

        $i = $i + 1;
      }

    ?>
  </table>
<?php
    } else {
?>
  <label for="usesr" class="form-label mt-4">No has seleccionado un favorito</label>
<?php
    }
?>

</body>

<style>
  body {
    background: url(https://i.pinimg.com/originals/b9/0b/5f/b90b5f7323cceb6ae20b96fee5019da4.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
  }

  h4 {
    font-size: 70px;
    font-weight: 600;
    background-image: linear-gradient(to right, #553c9a 10%, #ee4b2b);
    color: transparent;
    background-clip: text;
    -webkit-background-clip: text;
    text-align: right;
    margin: 0 30 0 0
  }
</style>

</html>