<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Equipos</title>
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
                <a class="nav-link active" href="#">Equipos
                    <span class="visually-hidden">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Resultados</a>
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
      <h1 style="margin-left: 20px">Tabla de equipos</h1>
      <table class="table table-hover" style="position: absolute; top: 50%; margin: 0px 20px 0px 20px;">
        <thead>
            <tr>
            <th scope="col">País</th>
            <th scope="col">Mundiales ganados</th>
            <th scope="col">Goles Mundiales</th>
            <th scope="col">Partidos Ganados</th>
            <th scope="col">Mundiales Jugados</th>
            </tr>
        </thead>
        <tbody>
            <tr class="table-danger">
            <th scope="row">Danger</th>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
            </tr>
            <tr class="table-warning">
            <th scope="row">Warning</th>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
            </tr>
        </tbody>
    </table>
</body>
</html>