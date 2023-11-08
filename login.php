<?php
session_start();

// Verificar límite de solicitudes por IP
$ip = $_SERVER['REMOTE_ADDR'];
$limit = 5; // Número máximo de solicitudes permitidas
$interval = 60; // Intervalo de tiempo en segundos (por ejemplo, 60 segundos = 1 minuto)

// Obtener el número de solicitudes realizadas por la IP en el último intervalo de tiempo
$requests = $_SESSION['requests'][$ip] ?? 0;

// Verificar si se ha excedido el límite de solicitudes
if ($requests >= $limit) {
    die("Has excedido el límite de solicitudes. Inténtalo de nuevo más tarde.");
}

// Incrementar el contador de solicitudes para esta IP
$_SESSION['requests'][$ip] = $requests + 1;

// Restablecer el contador de solicitudes después del intervalo de tiempo
if (!isset($_SESSION['reset_time']) || $_SESSION['reset_time'] < time() - $interval) {
    $_SESSION['requests'] = [];
    $_SESSION['reset_time'] = time();
}

// Verificar el formato de la contraseña
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["user"];
    $pass = $_POST["pass"];

    // Verificar si la contraseña cumple con los criterios (letras mayúsculas, minúsculas, números y al menos 8 caracteres)
    if (preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,50}$/", $pass)) {
        // La contraseña cumple con los criterios, proceder con la verificación en la base de datos
        $db_host = 'localhost';
        $db_user = 'root';
        $db_password = '';
        $db_db = 'datos_mundial';

        $con_db = mysqli_connect($db_host, $db_user, $db_password, $db_db);

        $sql = "SELECT * FROM usuarios WHERE user = '$user' AND pass = '$pass'";
        $result = $con_db->query($sql);

        if ($result->num_rows > 0) {
            $_SESSION["user"] = $user;
            header("location: inicio.php");
        } else {
            echo "Usuario o contraseña inválidos";
        }
    } else {
        echo "La contraseña no cumple con los requisitos mínimos de seguridad.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
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
            <a class="nav-link" href="favoritos.php">Favoritos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="clasificaciones.php">Clasificaciones</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="animate__animated animate__fadeInUp">
    <div class="card text-white bg-primary mx-auto" style="max-width: 40em; margin-top:100px;">
      <div class="card-header">Inicio de sesión</div>
      <div class="card-body">
        <form action="login.php" method="post">
          <div class="form-group">
            <label for="usesr" class="form-label mt-4">Usuario</label>
            <input type="text" class="form-control" name="user" placeholder="Insertar usuario">
          </div>
          <div class="form-group">
            <label for="pass" class="form-label mt-4">Contraseña</label>
            <input type="password" class="form-control" name="pass" placeholder="Insertar Contraseña">
          </div>
          <br>
          <input type="submit" value="Iniciar Sesión">
        </form>
        <p>¿No tiene cuenta? <a href="registrar.php" style="color: purple" ;>Registrarse</a></p>
      </div>
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