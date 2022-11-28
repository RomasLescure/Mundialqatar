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
                <a class="nav-link" href="Resultados.php">Resultados</a>
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
      <h1 style="margin-left: 20px">Equipos</h1>
      <div class="card text-white bg-success" style="margin: 0px 300px 20px 300px;">
      <div class="card-header"><h2>Qatar  <img src="https://i.pinimg.com/originals/ef/3c/16/ef3c16f2d4b8d856f49fafa7e7b947c1.png"></h2></div>
      <table>
        <thead>
          <tr>
            <th>
        <div class="card-body">
          <h4 class="card-title">Historial</h4>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Ganados
              <span class="badge bg-primary rounded-pill">14</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Goles en mundiales
              <span class="badge bg-primary rounded-pill">2</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Partidos Ganados
              <span class="badge bg-primary rounded-pill">1</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Jugados
              <span class="badge bg-primary rounded-pill">1</span>
            </li>
          </ul>
        </div>
        </th>
        <th>
          <h4 class="card-title">Jugadores</h4>
          <ol class="list-group">
            <li>Almoez Ali</li>
            <li>Ró-Ró</li>
            <li>Akram Afif</li>
            <li>Hassan Al-Haidos</li>
            <li>Abdelkarim Hassan</li>
            <li>Mohammed Muntari</li>
            <li>Bassam Al-Rawi</li>
            <li>Abdulaziz Hatem</li>
            <li>Boualem Khoukhi</li>
            <li>Saad Al Sheeb</li>
            <li>Karim Boudiaf</li>
          </ol>
        </th>
        </tr>
        </thead>
      </table>
      </div>
</body>
<style>
  img{
    max-width: 50px; 
    max-height: 50px;
  }
  ul{
    max-width: 400px;
  }
</html>