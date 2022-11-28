<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Resultados</title>
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
              <li class="nav-item active">
                <a class="nav-link" href="#">Resultados</a>
                <span class="visually-hidden">(current)</span>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Tabla de posiciones por grupo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Favoritos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Clasificaciones</a>
              </li>
            </ul>
            <a href="login.php"><button type="button" class="btn btn-secondary" style="margin: 0px 5px 0px 5px;">Login</button></a>
            <a href="registrar.php"><button type="button" class="btn btn-secondary" style="margin: 0px 5px 0px 5px;">Register</button></a>
          </div>
        </div>
    </nav>
    <br>
    <h1 style="margin-left: 20px">Resultados de partidos</h1>
    <form>
        <label for="fecha" style="margin-left: 20px">Buscar partidos por fecha:</label>
        <input type="date" id="fecha" name="Fecha" value="2022-11-29" min="2022-11-20" max="2022-12-18">
    </form>
   <?php
   $conn=mysqli_connect('localhost','root','','datos_mundial');
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
        $sql="SELECT * FROM partidos";
        $result=mysqli_query($conn,$sql);

        while($mostra=mysqli_fetch_array($result)){
        ?>
        <tbody>
            <tr class="table-danger">
            <th scope="row"><?php echo $mostra['estadio'] ?></th>
            <td><?php echo $mostra['hora'] ?></td>
            <td><?php echo $mostra['fecha'] ?></td>
            <td><?php echo $mostra['id_equipo1'] ?></td>
            <td><?php echo $mostra['gol_equipo1'] ?></td>
            <td>-</td>
            <td><?php echo $mostra['gol_equipo2'] ?></td>
            <td><?php echo $mostra['id_equipo2'] ?></td>
            </tr> 
            <?php
        }
            ?>
        </tbody>
    </table>
</body>
</html>