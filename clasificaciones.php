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
    <title>CLASIFICACIONES</title>
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
                <a class="nav-link" href="Posiciones.php">Tabla de posiciones por grupo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="favoritos.php">Favoritos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">Clasificaciones</a>
                <span class="visually-hidden">(current)</span>
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
  
  <h1 style="text-align: center; ">LLAVES Y CRUCES DE CLASIFICADOS</h1>
    <table class="table mx-auto">
        <tr>
            <th>
                <div class="card border-secondary mb-3" style="max-width: 45rem; margin: 0px 0px 0px 20px">
                    <div class="card-header">Grupo A</div>
                    <div class="card-body">
                    <?php
                    $conn = mysqli_connect('localhost', 'root', '', 'datos_mundial');
                    ini_set('display_errors', 0);
                    ini_set('display_startup_errors', 0);
                    $sql = "SELECT ep.puntos, e.pais FROM (equipos_juegos ep, equipos e)
                    WHERE e.grupo = 'A' AND ep.id_equipos = e.id_equipo ORDER BY ep.puntos DESC";

                    $result = mysqli_query($conn, $sql);
                    while ($mostra = mysqli_fetch_all($result, MYSQLI_ASSOC)) {

                    $pais1 = $mostra[0]["pais"];
                    $punto1 = $mostra[0]["puntos"];
                    $pais2 = $mostra[1]["pais"];
                    $punto2 = $mostra[1]["puntos"];
                    $pais3 = $mostra[2]["pais"];
                    $punto3 = $mostra[2]["puntos"];
                    $pais4 = $mostra[3]["pais"];
                    $punto4 = $mostra[3]["puntos"];
                    }
                    ?>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                            <th scope="col">Pais</th>
                            <th scope="col">puntos</th>
                            </tr>
                        </thead>
                            <tr class="table-success">
                            <th scope="row"> <?php echo $pais1 ?> </th>
                                <td> <?php echo $punto1 ?>  </th>
                            </tr>
                            <tr class="table-success">
                            <th scope="row"> <?php echo $pais2 ?> </th>
                                <td> <?php echo $punto2 ?>  </th>
                            </tr>
                            <tr class="table-danger">
                            <th scope="row"> <?php echo $pais3 ?> </th>
                                <td> <?php echo $punto3 ?>  </th>
                            </tr>
                            <tr class="table-danger">
                            <th scope="row"> <?php echo $pais4 ?> </th>
                                <td> <?php echo $punto4 ?>  </th>
                            </tr>
                        </table>
                    </div>
                </div>
            </th>
            <th>
                <div class="card border-secondary mb-3" style="max-width: 45rem;">
                    <div class="card-header">Grupo B</div>
                    <div class="card-body">
                    <?php
                    $sql = "SELECT ep.puntos, e.pais FROM (equipos_juegos ep, equipos e)
                    WHERE e.grupo = 'B' AND ep.id_equipos = e.id_equipo ORDER BY ep.puntos DESC";

                    $result = mysqli_query($conn, $sql);
                    $pais1 = NULL;
                    $punto1 = NULL;
                    $pais2 = NULL;
                    $punto2 = NULL;
                    $pais2 = NULL;
                    $punto2 = NULL;
                    $pais2 = NULL;
                    $punto2 = NULL;
                    while ($mostra = mysqli_fetch_all($result, MYSQLI_ASSOC)) {    
                    $pais1 = $mostra[0]["pais"];
                    $punto1 = $mostra[0]["puntos"];
                    $pais2 = $mostra[1]["pais"];
                    $punto2 = $mostra[1]["puntos"];
                    $pais3 = $mostra[2]["pais"];
                    $punto3 = $mostra[2]["puntos"];
                    $pais4 = $mostra[3]["pais"];
                    $punto4 = $mostra[3]["puntos"];
                    }
                    ?>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                            <th scope="col">Pais</th>
                            <th scope="col">puntos</th>
                            </tr>
                        </thead>
                            <tr class="table-success">
                            <th scope="row"> <?php echo $pais1 ?> </th>
                                <td> <?php echo $punto1 ?>  </th>
                            </tr>
                            <tr class="table-success">
                            <th scope="row"> <?php echo $pais2 ?> </th>
                                <td> <?php echo $punto2 ?>  </th>
                            </tr>
                            <tr class="table-danger">
                            <th scope="row"> <?php echo $pais3 ?> </th>
                                <td> <?php echo $punto3 ?>  </th>
                            </tr>
                            <tr class="table-danger">
                            <th scope="row"> <?php echo $pais4 ?> </th>
                                <td> <?php echo $punto4 ?>  </th>
                            </tr>
                        </table>
                    </div>
                </div>
            </th>
        </tr>
        <tr>
            <th>
                <div class="card border-secondary mb-3" style="max-width: 45rem; margin: 0px 0px 0px 20px">
                    <div class="card-header">Grupo C</div>
                    <div class="card-body">
                    <?php
                    $sql = "SELECT ep.puntos, e.pais FROM (equipos_juegos ep, equipos e)
                    WHERE e.grupo = 'C' AND ep.id_equipos = e.id_equipo ORDER BY ep.puntos DESC";

                    $result = mysqli_query($conn, $sql);
                    $pais1 = NULL;
                    $punto1 = NULL;
                    $pais2 = NULL;
                    $punto2 = NULL;
                    $pais3 = NULL;
                    $punto3 = NULL;
                    $pais4 = NULL;
                    $punto4 = NULL;
                    while ($mostra = mysqli_fetch_all($result, MYSQLI_ASSOC)) {    
                    $pais1 = $mostra[0]["pais"];
                    $punto1 = $mostra[0]["puntos"];
                    $pais2 = $mostra[1]["pais"];
                    $punto2 = $mostra[1]["puntos"];
                    $pais3 = $mostra[2]["pais"];
                    $punto3 = $mostra[2]["puntos"];
                    $pais4 = $mostra[3]["pais"];
                    $punto4 = $mostra[3]["puntos"];
                    }
                    ?>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                            <th scope="col">Pais</th>
                            <th scope="col">puntos</th>
                            </tr>
                        </thead>
                            <tr class="table-success">
                            <th scope="row"> <?php echo $pais1 ?> </th>
                                <td> <?php echo $punto1 ?>  </th>
                            </tr>
                            <tr class="table-success">
                            <th scope="row"> <?php echo $pais2 ?> </th>
                                <td> <?php echo $punto2 ?>  </th>
                            </tr>
                            <tr class="table-danger">
                            <th scope="row"> <?php echo $pais3 ?> </th>
                                <td> <?php echo $punto3 ?>  </th>
                            </tr>
                            <tr class="table-danger">
                            <th scope="row"> <?php echo $pais4 ?> </th>
                                <td> <?php echo $punto4 ?>  </th>
                            </tr>
                        </table>
                    </div>
                </div>
            </th>
            <th>
                <div class="card border-secondary mb-3" style="max-width: 45rem;">
                    <div class="card-header">Grupo D</div>
                    <div class="card-body">
                    <?php
                    $sql = "SELECT ep.puntos, e.pais FROM (equipos_juegos ep, equipos e)
                    WHERE e.grupo = 'D' AND ep.id_equipos = e.id_equipo ORDER BY ep.puntos DESC";

                    $result = mysqli_query($conn, $sql);
                    $pais1 = NULL;
                    $punto1 = NULL;
                    $pais2 = NULL;
                    $punto2 = NULL;
                    $pais3 = NULL;
                    $punto3 = NULL;
                    $pais4 = NULL;
                    $punto4 = NULL;
                    while ($mostra = mysqli_fetch_all($result, MYSQLI_ASSOC)) {    
                    $pais1 = $mostra[0]["pais"];
                    $punto1 = $mostra[0]["puntos"];
                    $pais2 = $mostra[1]["pais"];
                    $punto2 = $mostra[1]["puntos"];
                    $pais3 = $mostra[2]["pais"];
                    $punto3 = $mostra[2]["puntos"];
                    $pais4 = $mostra[3]["pais"];
                    $punto4 = $mostra[3]["puntos"];
                    }
                    ?>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                            <th scope="col">Pais</th>
                            <th scope="col">puntos</th>
                            </tr>
                        </thead>
                            <tr class="table-success">
                            <th scope="row"> <?php echo $pais1 ?> </th>
                                <td> <?php echo $punto1 ?>  </th>
                            </tr>
                            <tr class="table-success">
                            <th scope="row"> <?php echo $pais2 ?> </th>
                                <td> <?php echo $punto2 ?>  </th>
                            </tr>
                            <tr class="table-danger">
                            <th scope="row"> <?php echo $pais3 ?> </th>
                                <td> <?php echo $punto3 ?>  </th>
                            </tr>
                            <tr class="table-danger">
                            <th scope="row"> <?php echo $pais4 ?> </th>
                                <td> <?php echo $punto4 ?>  </th>
                            </tr>
                        </table>
                    </div>
                </div>
            </th>
        </tr>
        <tr>
            <th>
                <div class="card border-secondary mb-3" style="max-width: 45rem; margin: 0px 0px 0px 20px">
                    <div class="card-header">Grupo E</div>
                    <div class="card-body">
                    <?php
                    $sql = "SELECT ep.puntos, e.pais FROM (equipos_juegos ep, equipos e)
                    WHERE e.grupo = 'E' AND ep.id_equipos = e.id_equipo ORDER BY ep.puntos DESC";
                    $result = mysqli_query($conn, $sql);
                    $pais1 = NULL;
                    $punto1 = NULL;
                    $pais2 = NULL;
                    $punto2 = NULL;
                    $pais3 = NULL;
                    $punto3 = NULL;
                    $pais4 = NULL;
                    $punto4 = NULL;
                    while ($mostra = mysqli_fetch_all($result, MYSQLI_ASSOC)) {    
                    $pais1 = $mostra[0]["pais"];
                    $punto1 = $mostra[0]["puntos"];
                    $pais2 = $mostra[1]["pais"];
                    $punto2 = $mostra[1]["puntos"];
                    $pais3 = $mostra[2]["pais"];
                    $punto3 = $mostra[2]["puntos"];
                    $pais4 = $mostra[3]["pais"];
                    $punto4 = $mostra[3]["puntos"];
                    }
                    ?>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                            <th scope="col">Pais</th>
                            <th scope="col">puntos</th>
                            </tr>
                        </thead>
                            <tr class="table-success">
                                <th scope="row"> <?php echo $pais1 ?> </th>
                                <td> <?php echo $punto1 ?>  </th>
                            </tr>
                            <tr class="table-success">
                            <th scope="row"> <?php echo $pais2 ?> </th>
                                <td> <?php echo $punto2 ?>  </th>
                            </tr>
                            <tr class="table-danger">
                            <th scope="row"> <?php echo $pais3 ?> </th>
                                <td> <?php echo $punto3 ?>  </th>
                            </tr>
                            <tr class="table-danger">
                            <th scope="row"> <?php echo $pais4 ?> </th>
                                <td> <?php echo $punto4 ?>  </th>
                            </tr>
                        </table>
                    </div>
                </div>
            </th>
            <th>
                <div class="card border-secondary mb-3" style="max-width: 45rem;">
                    <div class="card-header">Grupo F</div>
                    <div class="card-body">
                    <?php
                    $sql = "SELECT ep.puntos, e.pais FROM (equipos_juegos ep, equipos e)
                    WHERE e.grupo = 'F' AND ep.id_equipos = e.id_equipo ORDER BY ep.puntos DESC";

                    $result = mysqli_query($conn, $sql);
                    $pais1 = NULL;
                    $punto1 = NULL;
                    $pais2 = NULL;
                    $punto2 = NULL;
                    $pais3 = NULL;
                    $punto3 = NULL;
                    $pais4 = NULL;
                    $punto4 = NULL;
                    while ($mostra = mysqli_fetch_all($result, MYSQLI_ASSOC)) {    
                    $pais1 = $mostra[0]["pais"];
                    $punto1 = $mostra[0]["puntos"];
                    $pais2 = $mostra[1]["pais"];
                    $punto2 = $mostra[1]["puntos"];
                    $pais3 = $mostra[2]["pais"];
                    $punto3 = $mostra[2]["puntos"];
                    $pais4 = $mostra[3]["pais"];
                    $punto4 = $mostra[3]["puntos"];
                    }
                    ?>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                <th scope="col">Pais</th>
                                <th scope="col">puntos</th>
                                </tr>
                            </thead>
                                <tr class="table-success">
                                <th scope="row"> <?php echo $pais1 ?> </th>
                                <td> <?php echo $punto1 ?>  </th>
                            </tr>
                            <tr class="table-success">
                            <th scope="row"> <?php echo $pais2 ?> </th>
                                <td> <?php echo $punto2 ?>  </th>
                            </tr>
                            <tr class="table-danger">
                            <th scope="row"> <?php echo $pais3 ?> </th>
                                <td> <?php echo $punto3 ?>  </th>
                            </tr>
                            <tr class="table-danger">
                            <th scope="row"> <?php echo $pais4 ?> </th>
                                <td> <?php echo $punto4 ?>  </th>
                                </tr>
                        </table>
                    </div>
                </div>
            </th>
        </tr>
        <tr>
            <th>
                <div class="card border-secondary mb-3" style="max-width: 45rem; margin: 0px 0px 0px 20px">
                    <div class="card-header">Grupo G</div>
                    <div class="card-body">
                    <?php
                    $sql = "SELECT ep.puntos, e.pais FROM (equipos_juegos ep, equipos e)
                    WHERE e.grupo = 'G' AND ep.id_equipos = e.id_equipo ORDER BY ep.puntos DESC";

                    $result = mysqli_query($conn, $sql);
                    $pais1 = NULL;
                    $punto1 = NULL;
                    $pais2 = NULL;
                    $punto2 = NULL;
                    $pais3 = NULL;
                    $punto3 = NULL;
                    $pais4 = NULL;
                    $punto4 = NULL;
                    while ($mostra = mysqli_fetch_all($result, MYSQLI_ASSOC)) {    
                    $pais1 = $mostra[0]["pais"];
                    $punto1 = $mostra[0]["puntos"];
                    $pais2 = $mostra[1]["pais"];
                    $punto2 = $mostra[1]["puntos"];
                    $pais3 = $mostra[2]["pais"];
                    $punto3 = $mostra[2]["puntos"];
                    $pais4 = $mostra[3]["pais"];
                    $punto4 = $mostra[3]["puntos"];
                    }
                    ?>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                <th scope="col">Pais</th>
                                <th scope="col">puntos</th>
                                </tr>
                            </thead>
                                <tr class="table-success">
                                <th scope="row"> <?php echo $pais1 ?> </th>
                                <td> <?php echo $punto1 ?>  </th>
                            </tr>
                            <tr class="table-success">
                            <th scope="row"> <?php echo $pais2 ?> </th>
                                <td> <?php echo $punto2 ?>  </th>
                            </tr>
                            <tr class="table-danger">
                            <th scope="row"> <?php echo $pais3 ?> </th>
                                <td> <?php echo $punto3 ?>  </th>
                            </tr>
                            <tr class="table-danger">
                            <th scope="row"> <?php echo $pais4 ?> </th>
                                <td> <?php echo $punto4 ?>  </th>
                                </tr>
                        </table>
                    </div>
                </div>
            </th>
            <th>
                <div class="card border-secondary mb-3" style="max-width: 45rem; ">
                    <div class="card-header">Grupo H</div>
                    <div class="card-body">
                    <?php
                    $sql = "SELECT ep.puntos, e.pais FROM (equipos_juegos ep, equipos e)
                    WHERE e.grupo = 'H' AND ep.id_equipos = e.id_equipo ORDER BY ep.puntos DESC";

                    $result = mysqli_query($conn, $sql);
                    $pais1 = NULL;
                    $punto1 = NULL;
                    $pais2 = NULL;
                    $punto2 = NULL;
                    $pais3 = NULL;
                    $punto3 = NULL;
                    $pais4 = NULL;
                    $punto4 = NULL;
                    while ($mostra = mysqli_fetch_all($result, MYSQLI_ASSOC)) {    
                    $pais1 = $mostra[0]["pais"];
                    $punto1 = $mostra[0]["puntos"];
                    $pais2 = $mostra[1]["pais"];
                    $punto2 = $mostra[1]["puntos"];
                    $pais3 = $mostra[2]["pais"];
                    $punto3 = $mostra[2]["puntos"];
                    $pais4 = $mostra[3]["pais"];
                    $punto4 = $mostra[3]["puntos"];
                    }
                    ?>
                        <table class="table table-hover">
                        <thead>
                            <tr>
                            <th scope="col">Pais</th>
                            <th scope="col">puntos</th>
                            </tr>
                        </thead>
                            <tr class="table-success">
                            <th scope="row"> <?php echo $pais1 ?> </th>
                                <td> <?php echo $punto1 ?>  </th>
                            </tr>
                            <tr class="table-success">
                            <th scope="row"> <?php echo $pais2 ?> </th>
                                <td> <?php echo $punto2 ?>  </th>
                            </tr>
                            <tr class="table-danger">
                            <th scope="row"> <?php echo $pais3 ?> </th>
                                <td> <?php echo $punto3 ?>  </th>
                            </tr>
                            <tr class="table-danger">
                            <th scope="row"> <?php echo $pais4 ?> </th>
                                <td> <?php echo $punto4 ?>  </th>
                            </tr>
                        </table>
                    </div>
            </th>
        </tr>
    </table>
    <section>
    <div class="card border-info " style="margin: 70px 65px 70px 65px">
    <div class="card-header" style="text-align: center; font-weight: bold; font-size: 25px;">ESQUEMA DE LLAVES DE CLASIFICADOS</div>
    <div class="card-body">
      <div class='tournament' style="margin: 0px 60px 0px 60px">
        <ul class='round round-2'>
          <li class='spacer'>&nbsp;</li>
          <li class='game-left game-top'>
          <!--1A-->
          <?php
            $sql = "SELECT ep.puntos, e.pais FROM (equipos_juegos ep, equipos e)
            WHERE e.grupo = 'A' AND ep.id_equipos = e.id_equipo ORDER BY ep.puntos DESC";
            $result = mysqli_query($conn, $sql);
            $pais1 = NULL;
            while ($mostra = mysqli_fetch_all($result, MYSQLI_ASSOC)) {    
                $pais1 = $mostra[0]["pais"];}
            echo $pais1; ?> </li>
          <li class='game-left spacer'>&nbsp;</li>
          <li class='game-left game-bottom'>
          <!--2B-->
          <?php
            $sql = "SELECT ep.puntos, e.pais FROM (equipos_juegos ep, equipos e)
            WHERE e.grupo = 'B' AND ep.id_equipos = e.id_equipo ORDER BY ep.puntos DESC";
            $result = mysqli_query($conn, $sql);
            $pais2 = NULL;
            while ($mostra = mysqli_fetch_all($result, MYSQLI_ASSOC)) {    
                $pais2 = $mostra[1]["pais"];}
            echo $pais2; ?> 
          </li>
          <li class='spacer'>&nbsp;</li>
          <li class='game-left game-top'>
        <!--1C-->
          <?php
            $sql = "SELECT ep.puntos, e.pais FROM (equipos_juegos ep, equipos e)
            WHERE e.grupo = 'C' AND ep.id_equipos = e.id_equipo ORDER BY ep.puntos DESC";
            $result = mysqli_query($conn, $sql);
            $pais1 = NULL;
            while ($mostra = mysqli_fetch_all($result, MYSQLI_ASSOC)) {    
                $pais1 = $mostra[0]["pais"];}
            echo $pais1; ?> 
          </li>
          <li class='game-left spacer'>&nbsp;</li>
          <li class='game-left game-bottom'>
          <!--2D-->
          <?php
            $sql = "SELECT ep.puntos, e.pais FROM (equipos_juegos ep, equipos e)
            WHERE e.grupo = 'D' AND ep.id_equipos = e.id_equipo ORDER BY ep.puntos DESC";
            $result = mysqli_query($conn, $sql);
            $pais2 = NULL;
            while ($mostra = mysqli_fetch_all($result, MYSQLI_ASSOC)) {    
                $pais2 = $mostra[1]["pais"];}
            echo $pais2; ?></li>
          <li class='spacer'>&nbsp;</li>
          <li class='game-left game-top'>
          <!--1E-->
          <?php
            $sql = "SELECT ep.puntos, e.pais FROM (equipos_juegos ep, equipos e)
            WHERE e.grupo = 'E' AND ep.id_equipos = e.id_equipo ORDER BY ep.puntos DESC";
            $result = mysqli_query($conn, $sql);
            $pais1 = NULL;
            while ($mostra = mysqli_fetch_all($result, MYSQLI_ASSOC)) {    
                $pais1 = $mostra[0]["pais"];}
            echo $pais1; ?>
          </li>
          <li class='game-left spacer'>&nbsp;</li>
          <li class='game-left game-bottom'>
          <!--2F-->
          <?php
            $sql = "SELECT ep.puntos, e.pais FROM (equipos_juegos ep, equipos e)
            WHERE e.grupo = 'F' AND ep.id_equipos = e.id_equipo ORDER BY ep.puntos DESC";
            $result = mysqli_query($conn, $sql);
            $pais2 = NULL;
            while ($mostra = mysqli_fetch_all($result, MYSQLI_ASSOC)) {    
                $pais2 = $mostra[1]["pais"];}
            echo $pais2; ?> 
          </li>
          <li class='spacer'>&nbsp;</li>
          <li class='game-left game-top'>
            <!--1G-->
          <?php
            $sql = "SELECT ep.puntos, e.pais FROM (equipos_juegos ep, equipos e)
            WHERE e.grupo = 'G' AND ep.id_equipos = e.id_equipo ORDER BY ep.puntos DESC";
            $result = mysqli_query($conn, $sql);
            $pais1 = NULL;
            while ($mostra = mysqli_fetch_all($result, MYSQLI_ASSOC)) {    
                $pais1 = $mostra[0]["pais"];}
            echo $pais1; ?> 
          </li>
          <li class='game-left spacer'>&nbsp;</li>
          <li class='game-left game-bottom'>
             <!--2H-->
          <?php
            $sql = "SELECT ep.puntos, e.pais FROM (equipos_juegos ep, equipos e)
            WHERE e.grupo = 'H' AND ep.id_equipos = e.id_equipo ORDER BY ep.puntos DESC";
            $result = mysqli_query($conn, $sql);
            $pais2 = NULL;
            while ($mostra = mysqli_fetch_all($result, MYSQLI_ASSOC)) {    
                $pais2 = $mostra[1]["pais"];}
            echo $pais2; ?> 
          </li>
          <li class='spacer'>&nbsp;</li>
        </ul>
        <ul class='round round-3'>
          <li class='spacer'>&nbsp;</li>
          <li class='game-left game-top'></li>
          <li class='game-left spacer region region-right'></li>
          <li class='game-left game-bottom'></li>
          <li class='spacer'>&nbsp;</li>
          <li class='game-left game-top'></li>
          <li class='game-left spacer region region-right'></li>
          <li class='game-left game-bottom'></li>
          <li class='spacer'>&nbsp;</li>
        </ul>
        <ul class='round round-4'>
          <li class='spacer'>&nbsp;</li>
          <li class='game-left game-top'></li>
          <li class='game-left spacer'>&nbsp;</li>
          <li class='game-left game-bottom'></li>
          <li class='spacer'>&nbsp;</li>
        </ul>
        <ul class='round semi-final'>
          <li class='spacer'>&nbsp;</li>
          <li class='game-left game-top'></li>
          <li class='spacer'>&nbsp;</li>
        </ul>
        <ul class='round finals'>
          <li class='spacer'>&nbsp;</li>
          <li class='game final'></li>
          <li class='spacer'>&nbsp;</li>
        </ul>
        <ul class='round semi-final'>
          <li class='spacer'>&nbsp;</li>
          <li class='game-right game-top'></li>
          <li class='spacer'>&nbsp;</li>
        </ul>
        <ul class='round round-4'>
          <li class='spacer'>&nbsp;</li>
          <li class='game-right game-top'></li>
          <li class='game-right spacer'>&nbsp;</li>
          <li class='game-right game-bottom'></li>
          <li class='spacer'>&nbsp;</li>
        </ul>
        <ul class='round round-3'>
          <li class='spacer'>&nbsp;</li>
          <li class='game-right game-top'></li>
          <li class='game-right spacer region region-left'></li>
          <li class='game-right game-bottom'></li>
          <li class='spacer'>&nbsp;</li>
          <li class='game-right game-top'></li>
          <li class='game-right spacer region region-left'></li>
          <li class='game-right game-bottom'></li>
          <li class='spacer'>&nbsp;</li>
        </ul>
        <ul class='round round-2'>
          <li class='spacer'>&nbsp;</li>
          <li class='game-right game-top'>
        <!--1B-->
          <?php
            $sql = "SELECT ep.puntos, e.pais FROM (equipos_juegos ep, equipos e)
            WHERE e.grupo = 'B' AND ep.id_equipos = e.id_equipo ORDER BY ep.puntos DESC";
            $result = mysqli_query($conn, $sql);
            $pais1 = NULL;
            while ($mostra = mysqli_fetch_all($result, MYSQLI_ASSOC)) {    
                $pais1 = $mostra[0]["pais"];}
            echo $pais1; ?>
          </li>
          <li class='game-right spacer'>&nbsp;</li>
          <li class='game-right game-bottom'>
        <!--2A-->
          <?php
            $sql = "SELECT ep.puntos, e.pais FROM (equipos_juegos ep, equipos e)
            WHERE e.grupo = 'A' AND ep.id_equipos = e.id_equipo ORDER BY ep.puntos DESC";
            $result = mysqli_query($conn, $sql);
            $pais2 = NULL;
            while ($mostra = mysqli_fetch_all($result, MYSQLI_ASSOC)) {    
                $pais2 = $mostra[1]["pais"];}
            echo $pais2; ?> 
          </li>
          <li class='spacer'>&nbsp;</li>
          <li class='game-right game-top'>
            <!--1D-->
          <?php
            $sql = "SELECT ep.puntos, e.pais FROM (equipos_juegos ep, equipos e)
            WHERE e.grupo = 'D' AND ep.id_equipos = e.id_equipo ORDER BY ep.puntos DESC";
            $result = mysqli_query($conn, $sql);
            $pais1 = NULL;
            while ($mostra = mysqli_fetch_all($result, MYSQLI_ASSOC)) {    
                $pais1 = $mostra[0]["pais"];}
            echo $pais1; ?>
          </li>
          <li class='game-right spacer'>&nbsp;</li>
          <li class='game-right game-bottom'>
            <!--2C-->
            <?php
            $sql = "SELECT ep.puntos, e.pais FROM (equipos_juegos ep, equipos e)
            WHERE e.grupo = 'C' AND ep.id_equipos = e.id_equipo ORDER BY ep.puntos DESC";
            $pais2 = NULL;
            $result = mysqli_query($conn, $sql);
            $pais2 = NULL;
            while ($mostra = mysqli_fetch_all($result, MYSQLI_ASSOC)) {    
                $pais2 = $mostra[1]["pais"];}
            echo $pais2; ?>          
        </li>
          <li class='spacer'>&nbsp;</li>
          <li class='game-right game-top'>
            <!--1F-->
            <?php
            $sql = "SELECT ep.puntos, e.pais FROM (equipos_juegos ep, equipos e)
            WHERE e.grupo = 'F' AND ep.id_equipos = e.id_equipo ORDER BY ep.puntos DESC";
            $result = mysqli_query($conn, $sql);
            $pais1 = NULL;
            while ($mostra = mysqli_fetch_all($result, MYSQLI_ASSOC)) {    
                $pais1 = $mostra[0]["pais"];}
            echo $pais1; ?>       
          </li>
          <li class='game-right spacer'>&nbsp;</li>
          <li class='game-right game-bottom'>
          <!--2E-->
          <?php
            $sql = "SELECT ep.puntos, e.pais FROM (equipos_juegos ep, equipos e)
            WHERE e.grupo = 'E' AND ep.id_equipos = e.id_equipo ORDER BY ep.puntos DESC";
            $result = mysqli_query($conn, $sql);
            $pais2 = NULL;
            while ($mostra = mysqli_fetch_all($result, MYSQLI_ASSOC)) {    
                $pais2 = $mostra[1]["pais"];}
            echo $pais2; ?>             
          </li>
          <li class='spacer'>&nbsp;</li>
          <li class='game-right game-top'>
           <!--1H-->
           <?php
            $sql = "SELECT ep.puntos, e.pais FROM (equipos_juegos ep, equipos e)
            WHERE e.grupo = 'H' AND ep.id_equipos = e.id_equipo ORDER BY ep.puntos DESC";
            $result = mysqli_query($conn, $sql);
            $pais1 = NULL;
            while ($mostra = mysqli_fetch_all($result, MYSQLI_ASSOC)) {    
                $pais1 = $mostra[0]["pais"];}
            echo $pais1; ?>           
          </li>
          <li class='game-right spacer'>&nbsp;</li>
          <li class='game-right game-bottom'>
            <!--2G-->
            <?php
            $sql = "SELECT ep.puntos, e.pais FROM (equipos_juegos ep, equipos e)
            WHERE e.grupo = 'G' AND ep.id_equipos = e.id_equipo ORDER BY ep.puntos DESC";
            $result = mysqli_query($conn, $sql);
            $pais2 = NULL;
            while ($mostra = mysqli_fetch_all($result, MYSQLI_ASSOC)) {    
                $pais2 = $mostra[1]["pais"];}
            echo $pais2; ?>    
        </li>
          <li class='spacer'>&nbsp;</li>
        </ul>
      </div>
    </section>
  </div>
  </div>
</div>
</body>
<style>
    body {
  background-color: #eee;
  font-family: Tahoma, Arial, sans-serif;
  margin: 0;
}
section {
  margin: 0 8px;
}

.tournament {
    display: flex;
    flex-direction: row;
}
.tournament .round {
  font-size: .75em;
  display: flex;
  flex-direction: column;
  justify-content: center;
  width: 200px;
  list-style: none;
  padding: 0;
}
.tournament .round .spacer {
  flex-grow: 2;
}
.tournament .round .spacer:first-child,
.tournament .round .spacer:last-child {
  flex-grow: 1;
}

.first-four {
  border: 1px solid #888;
  border-radius: 1em;
  background-color: lightcyan;
  padding: 0 1em;
}
.tournament-header {
  text-align: center;
  font-weight: bold;
  border-radius: 1em;
  border: 1px solid black;
  background-color: #f54e00;
  color: white;
}

.first-four-winner li.game-left,
.round-1 li.game-left,
.round-2 li.game-left,
.round-3 li.game-left,
.round-4 li.game-left,
.semi-final li.game-left {
    padding-left: 0.5em;
}

.first-four-winner li.game-right,
.round-1 li.game-right,
.round-2 li.game-right,
.round-3 li.game-right,
.round-4 li.game-right,
.semi-final li.game-right {
    padding-right: 0.5em;
}

.region {
    font-size: 1.5em;
    font-weight:bold;
}
.region-right {
    text-align:right;
  padding-right: 5px;
}
.region-left {
    text-align:left;
  padding-left: 5px;
}

ul.seed li.game-left span:first-child,
ul.seed li.game-right span:last-child {
    font-size: 0.5em;
}

li.game-right {
  text-align: right;
  border-left: 1px solid #aaa;
}
li.game-left {
    border-right: 1px solid #aaa;
}
li.game-bottom {
  border-bottom: 1px solid #aaa;
  background-color: #e95420;
}
li.game-top {
  border: none;
  border-bottom: 1px solid #aaa;
  background-color: #e95420;
}
li.game-left.spacer {
    border-right: 1px solid #aaa;
    min-height: 5px;
    padding-right:.25em;
}
li.game-right.spacer {
    border-left: 1px solid #aaa;
    min-height: 5px;
    padding-left:.25em;
    text-align: left;
}

.final {
    text-align: center;
    padding-top: 1em;
    padding-bottom: 1em;
    border: 1px solid #aaa;
    margin-top: 1em;
    margin-bottom: 1em;
    font-weight:bold;
}
.finals .centered {
    text-align:center;
    font-weight:bold;
}
.finals .centered > input {
    display:block;
    width:4em;
    margin: 0 auto 0 auto;
    text-align:center;
}

.body-first-child {
  margin-top: -45px;
}
.extra-padding {
  padding-top: 45px;
}
</style>
</html>