<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro con Base de Datos</title>
    <link rel="stylesheet" href="bootstrap.min.css">
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
                <a class="nav-link" href="#">Inicio</a>
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
                <a class="nav-link" href="#">Favoritos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Clasificaciones</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
<div class="card text-white bg-dark mx-auto" style="max-width: 40em; margin-top:100px;">
        <div class="card-header">Registrar usuario</div>
        <div class="card-body">
        <form action="login.php" method="post">
            <fieldset>
                <div class="form-group">
                    <label for="usuario" class="form-label mt-4">Usuario</label>
                    <input type="text" class="form-control" name="usuario" placeholder="Insertar usuario">
                </div>
                <div class="form-group">
                    <label for="contraseña" class="form-label mt-4">Contraseña</label>
                    <input type="password" class="form-control" name="contraseña" placeholder="Insertar Contraseña">
                </div>
                 <!-- Dependiendo del tipo de usuario se lleva a una pagina u a otra -->
                <div class="form-group">
                    <label for="exampleSelect1" class="form-label mt-4">Tipo de usuario</label>
                    <select class="form-select" name="Tipo_Usuario">
                        <!-- Si es predeterminado se registra automaticamente -->
                        <option>Predeterminado</option>
                        <!-- Si es Administrativo se debe llevar a una pagina en la cual debe colocar
                        una contraseña que solo los administrativos saben osea nosotros, elijan ustedes la 
                        contraseña -->
                        <option>Administrativo</option>
                    </select>
                </div>
                <br>
                <input type="submit" value="Registrarse">
            </fieldset>
        </form>
        </div>
    </div>
</body>
<style>
body { 
    background: url(https://st1.uvnimg.com/17/f5/c192e2834569bfcd52b59207f543/c3b9ce8e97424f0ebb0a94b921a9dac1) no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
.card {
  border: 3px solid white;
}
</style>

</html>