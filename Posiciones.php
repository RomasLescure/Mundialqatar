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
  <title>Posiciones</title>
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
            <a class="nav-link" href="resultados.php">Resultados</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="Posiciones.php">Tabla de posiciones por grupo</a>
            <span class="visually-hidden">(current)</span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="favoritos.php">Favoritos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="clasificaciones.php">Clasificaciones</a>
          </li>
          <?php
          $_SESSION['type'] = $tipo;
          if($_SESSION['type'] == 'admin'): ?>

            <li class="nav-item">
                <a class="nav-link" href="DatosPartido.php">Datos</a>
          </li>

          <?php endif;  ?>
        </ul>
        <?php
        if (empty($_SESSION['user'])):?>
          <a href="login.php"><button type="button" class="btn btn-secondary" style="margin: 0px 5px 0px 5px;">Login</button></a>
          <a href="registrar.php"><button type="button" class="btn btn-secondary" style="margin: 0px 5px 0px 5px;">Register</button></a>
       <?php  endif;?>
      </div>
    </div>

  </nav>
  <br>
  <h1 style="margin-left: 20px">Tabla de Posiciones</h1>


  <?php

  $conn = mysqli_connect('localhost', 'root', '', 'datos_mundial');
  ?>
  <table class="table table-hover" style="top: 50%; margin: 0px 20px 0px 20px;">
    <thead>
      <tr> GRUPO A
        <th scope="col">Pais</th>
        <th scope="col">Puntos</th>
        <th scope="col">Juegos Jugados </th>
        <th scope="col">Juegos Ganados</th>
        <th scope="col">Juegos Empatados</th>
        <th scope="col">Juegos Perdidos</th>
        <th scope="col">Goles a Favor</th>
        <th scope="col">Goles en Contra</th>
        <th scope="col">Diferencia de Goles</th>

      </tr>
    </thead>
    <?php
    /*
  Pais(equipos) /Puntos(equipos_juegos)  /Juegos /Jugados  /Juegos Ganados /Juegos Empatados 
  /Juegos Perdidos /Goles a favor /Goles En contra / Diferencia de goles
  */
    $sql = "SELECT * FROM (equipos_juegos ej,equipos e) WHERE e.grupo = 'A' AND ej.id_equipos = e.id_equipo";
    $result = mysqli_query($conn, $sql);
    while ($mostra = mysqli_fetch_array($result)) {

    ?>
      <tbody>
        <tr class="table-warning">
          <th scope="row"><?php echo $mostra['pais'] ?></th>
          <td><?php echo $mostra['puntos'] ?></td>
          <td><?php echo $mostra['jj'] ?></td>
          <td><?php echo $mostra['jg'] ?></td>
          <td><?php echo $mostra['je'] ?></td>
          <td><?php echo $mostra['jp'] ?></td>
          <td><?php echo $mostra['ga'] ?></td>
          <td><?php echo $mostra['gc'] ?></td>
          <td><?php echo $mostra['dif'] ?></td>
        </tr>
      <?php
    }
      ?>
  </table>

  <table class="table table-hover" style="top: 50%; margin: 0px 20px 0px 20px;">
    <thead>
      <tr> GRUPO B
        <th scope="col">Pais</th>
        <th scope="col">Puntos</th>
        <th scope="col">Juegos Jugados </th>
        <th scope="col">Juegos Ganados</th>
        <th scope="col">Juegos Empatados</th>
        <th scope="col">Juegos Perdidos</th>
        <th scope="col">Goles a Favor</th>
        <th scope="col">Goles en Contra</th>
        <th scope="col">Diferencia de Goles</th>

      </tr>
    </thead>
    <?php

    $sql = "SELECT * FROM (equipos_juegos ej,equipos e)  WHERE e.grupo = 'B' AND ej.id_equipos = e.id_equipo";
    $result = mysqli_query($conn, $sql);
    while ($mostra = mysqli_fetch_array($result)) {

    ?>
      <tbody>
        <tr class="table-warning">
          <th scope="row"><?php echo $mostra['pais'] ?></th>
          <td><?php echo $mostra['puntos']  ?></td>
          <td><?php echo $mostra['jj'] ?></td>
          <td><?php echo $mostra['jg'] ?></td>
          <td><?php echo $mostra['je'] ?></td>
          <td><?php echo $mostra['jp'] ?></td>
          <td><?php echo $mostra['ga'] ?></td>
          <td><?php echo $mostra['gc'] ?></td>
          <td><?php echo $mostra['dif'] ?></td>
        </tr>
      <?php
    }
      ?>
  </table>

  <table class="table table-hover" style="top: 50%; margin: 0px 20px 0px 20px;">
    <thead>
      <tr> GRUPO C
        <th scope="col">Pais</th>
        <th scope="col">Puntos</th>
        <th scope="col">Juegos Jugados </th>
        <th scope="col">Juegos Ganados</th>
        <th scope="col">Juegos Empatados</th>
        <th scope="col">Juegos Perdidos</th>
        <th scope="col">Goles a Favor</th>
        <th scope="col">Goles en Contra</th>
        <th scope="col">Diferencia de Goles</th>

      </tr>
    </thead>
    <?php

    $sql = "SELECT * FROM (equipos_juegos ej,equipos e)  WHERE e.grupo = 'C' AND ej.id_equipos = e.id_equipo";
    $result = mysqli_query($conn, $sql);
    while ($mostra = mysqli_fetch_array($result)) {

    ?>
      <tbody>
        <tr class="table-warning">
          <th scope="row"><?php echo $mostra['pais'] ?></th>
          <td><?php echo $mostra['puntos']  ?></td>
          <td><?php echo $mostra['jj'] ?></td>
          <td><?php echo $mostra['jg'] ?></td>
          <td><?php echo $mostra['je'] ?></td>
          <td><?php echo $mostra['jp'] ?></td>
          <td><?php echo $mostra['ga'] ?></td>
          <td><?php echo $mostra['gc'] ?></td>
          <td><?php echo $mostra['dif'] ?></td>
        </tr>
      <?php
    }
      ?>
  </table>

  <table class="table table-hover" style="top: 50%; margin: 0px 20px 0px 20px;">
    <thead>
      <tr> GRUPO D
        <th scope="col">Pais</th>
        <th scope="col">Puntos</th>
        <th scope="col">Juegos Jugados </th>
        <th scope="col">Juegos Ganados</th>
        <th scope="col">Juegos Empatados</th>
        <th scope="col">Juegos Perdidos</th>
        <th scope="col">Goles a Favor</th>
        <th scope="col">Goles en Contra</th>
        <th scope="col">Diferencia de Goles</th>

      </tr>
    </thead>
    <?php

    $sql = "SELECT * FROM (equipos_juegos ej,equipos e)  WHERE e.grupo = 'D' AND ej.id_equipos = e.id_equipo";
    $result = mysqli_query($conn, $sql);

    while ($mostra = mysqli_fetch_array($result)) {

    ?>
      <tbody>
        <tr class="table-warning">
          <th scope="row"><?php echo $mostra['pais'] ?></th>
          <td><?php echo $mostra['puntos']  ?></td>
          <td><?php echo $mostra['jj'] ?></td>
          <td><?php echo $mostra['jg'] ?></td>
          <td><?php echo $mostra['je'] ?></td>
          <td><?php echo $mostra['jp'] ?></td>
          <td><?php echo $mostra['ga'] ?></td>
          <td><?php echo $mostra['gc'] ?></td>
          <td><?php echo $mostra['dif'] ?></td>
        </tr>
      <?php
    }
      ?>
  </table>

  <table class="table table-hover" style="top: 50%; margin: 0px 20px 0px 20px;">
    <thead>
      <tr> GRUPO E
        <th scope="col">Pais</th>
        <th scope="col">Puntos</th>
        <th scope="col">Juegos Jugados </th>
        <th scope="col">Juegos Ganados</th>
        <th scope="col">Juegos Empatados</th>
        <th scope="col">Juegos Perdidos</th>
        <th scope="col">Goles a Favor</th>
        <th scope="col">Goles en Contra</th>
        <th scope="col">Diferencia de Goles</th>

      </tr>
    </thead>
    <?php

    $sql = "SELECT * FROM (equipos_juegos ej,equipos e)  WHERE e.grupo = 'E' AND ej.id_equipos = e.id_equipo";
    $result = mysqli_query($conn, $sql);
    while ($mostra = mysqli_fetch_array($result)) {

    ?>
      <tbody>
        <tr class="table-warning">
          <th scope="row"><?php echo $mostra['pais'] ?></th>
          <td><?php echo $mostra['puntos']  ?></td>
          <td><?php echo $mostra['jj'] ?></td>
          <td><?php echo $mostra['jg'] ?></td>
          <td><?php echo $mostra['je'] ?></td>
          <td><?php echo $mostra['jp'] ?></td>
          <td><?php echo $mostra['ga'] ?></td>
          <td><?php echo $mostra['gc'] ?></td>
          <td><?php echo $mostra['dif'] ?></td>
        </tr>
      <?php
    }
      ?>
  </table>

  <table class="table table-hover" style="top: 50%; margin: 0px 20px 0px 20px;">
    <thead>
      <tr> GRUPO F
        <th scope="col">Pais</th>
        <th scope="col">Puntos</th>
        <th scope="col">Juegos Jugados </th>
        <th scope="col">Juegos Ganados</th>
        <th scope="col">Juegos Empatados</th>
        <th scope="col">Juegos Perdidos</th>
        <th scope="col">Goles a Favor</th>
        <th scope="col">Goles en Contra</th>
        <th scope="col">Diferencia de Goles</th>

      </tr>
    </thead>
    <?php

    $sql = "SELECT * FROM (equipos_juegos ej,equipos e)  WHERE e.grupo = 'F' AND ej.id_equipos = e.id_equipo";
    $result = mysqli_query($conn, $sql);

    while ($mostra = mysqli_fetch_array($result)) {

    ?>
      <tbody>
        <tr class="table-warning">
          <th scope="row"><?php echo $mostra['pais'] ?></th>
          <td><?php echo $mostra['puntos']  ?></td>
          <td><?php echo $mostra['jj'] ?></td>
          <td><?php echo $mostra['jg'] ?></td>
          <td><?php echo $mostra['je'] ?></td>
          <td><?php echo $mostra['jp'] ?></td>
          <td><?php echo $mostra['ga'] ?></td>
          <td><?php echo $mostra['gc'] ?></td>
          <td><?php echo $mostra['dif'] ?></td>
        </tr>
      <?php
    }
      ?>
  </table>

  <table class="table table-hover" style="top: 50%; margin: 0px 20px 0px 20px;">
    <thead>
      <tr> GRUPO G
        <th scope="col">Pais</th>
        <th scope="col">Puntos</th>
        <th scope="col">Juegos Jugados </th>
        <th scope="col">Juegos Ganados</th>
        <th scope="col">Juegos Empatados</th>
        <th scope="col">Juegos Perdidos</th>
        <th scope="col">Goles a Favor</th>
        <th scope="col">Goles en Contra</th>
        <th scope="col">Diferencia de Goles</th>

      </tr>
    </thead>
    <?php

    $sql = "SELECT * FROM (equipos_juegos ej,equipos e)  WHERE e.grupo = 'G' AND ej.id_equipos = e.id_equipo";
    $result = mysqli_query($conn, $sql);
    while ($mostra = mysqli_fetch_array($result)) {

    ?>
      <tbody>
        <tr class="table-warning">
          <th scope="row"><?php echo $mostra['pais'] ?></th>
          <td><?php echo $mostra['puntos'] ?></td>
          <td><?php echo $mostra['jj'] ?></td>
          <td><?php echo $mostra['jg'] ?></td>
          <td><?php echo $mostra['je'] ?></td>
          <td><?php echo $mostra['jp'] ?></td>
          <td><?php echo $mostra['ga'] ?></td>
          <td><?php echo $mostra['gc'] ?></td>
          <td><?php echo $mostra['dif'] ?></td>
        </tr>
      <?php
    }
      ?>
      </tbody>
  </table>

  <table class="table table-hover" style="top: 50%; margin: 0px 20px 0px 20px;">
    <thead>
      <tr> GRUPO H
        <th scope="col">Pais</th>
        <th scope="col">Puntos</th>
        <th scope="col">Juegos Jugados </th>
        <th scope="col">Juegos Ganados</th>
        <th scope="col">Juegos Empatados</th>
        <th scope="col">Juegos Perdidos</th>
        <th scope="col">Goles a Favor</th>
        <th scope="col">Goles en Contra</th>
        <th scope="col">Diferencia de Goles</th>

      </tr>
    </thead>
    <?php

    $sql = "SELECT * FROM (equipos_juegos ej,equipos e)  WHERE e.grupo = 'H' AND ej.id_equipos = e.id_equipo";
    $result = mysqli_query($conn, $sql);
    while ($mostra = mysqli_fetch_array($result)) {

    ?>
      <tbody>
        <tr class="table-warning">
          <th scope="row"><?php echo $mostra['pais'] ?></th>
          <td><?php echo $mostra['puntos'] ?></td>
          <td><?php echo $mostra['jj'] ?></td>
          <td><?php echo $mostra['jg'] ?></td>
          <td><?php echo $mostra['je'] ?></td>
          <td><?php echo $mostra['jp'] ?></td>
          <td><?php echo $mostra['ga'] ?></td>
          <td><?php echo $mostra['gc'] ?></td>
          <td><?php echo $mostra['dif'] ?></td>
        </tr>
      <?php
    }
      ?>
      </tbody>
  </table>
</body>

</html>