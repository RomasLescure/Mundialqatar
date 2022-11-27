<?php
session_start();
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_db = 'qatar_2022';

$con_db = mysqli_connect($db_host, $db_user, $db_password, $db_db);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    $sql = "SELECT * FROM usuarios WHERE user = '$user' AND pass = '$pass'";
    $result = $con_db->query($sql);
    if ($result->num_rows > 0) {
        $_SESSION["user"] = $user;
        header("location: inicio.php");
    } else {
        echo "Usuario o contraseña invalidos";
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
</head>

<body>
    <div class="card text-white bg-primary mb-3" style="margin: 20px 20px 20px 20px">
        <div class="card-header">Inicio de sesión</div>
        <div class="card-body">
            <form action="login.php" method="post">
                <fieldset>
                    <div class="form-group">
                        <label for="user" class="form-label mt-4">Usuario</label>
                        <input type="text" class="form-control" name="user" placeholder="Insertar Usuario">
                    </div>
                    <div class="form-group">
                        <label for="pass" class="form-label mt-4">Contraseña</label>
                        <input type="password" class="form-control" name="pass" placeholder="Insertar Contraseña">
                    </div>
                    <br>
                    <input type="submit" value="conectar">
                    <a href="registrar.php"><button>registrarse</button></a>
                </fieldset>
            </form>
        </div>
    </div>
</body>

</html>