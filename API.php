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

  $con = mysqli_connect('localhost', 'root', '', 'datos_mundial');

      $sql = "SELECT * FROM (partidos_juegos pj, partidos p, equipos e)
    WHERE pj.id_partido = p.id_partido AND e.id_equipo = pj.id_equipo";

      $q = $con->query($sql);
      if ($q->num_rows > 0) {
        $i = 0;
        $j = 1;
        $rows = array();
        $result = mysqli_query($con, $sql);
        foreach ($mostra = mysqli_fetch_all($result, MYSQLI_ASSOC) as $valor) {
            $rows[] = $mostra;
          $i = $i + 2;
          $j = $j + 2;

        }
        print json_encode($rows);
        unset($valor);
      }
    ?>