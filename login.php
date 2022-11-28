<?php
    session_start();
    $db_host = 'localhost';
    $db_user = 'root';
    $db_password ='';
    $db_db = 'qatar_2022';

    $con_db = mysqli_connect($db_host, $db_user, $db_password, $db_db);
    
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $usuario = $_POST["usuario"];
        $contraseña = $_POST["contraseña"];
        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contraseña = '$contraseña'";
        $result = $con_db -> query($sql);
        if ($result -> num_rows > 0){
            $_SESSION["usuario"] = $usuario;
            header("location: inicio.php");
        }else{
            echo "nombre o contraseña invalidos";
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
    <div class="card text-white bg-primary mx-auto" style="max-width: 40em; margin-top:100px;">
        <div class="card-header">Inicio de sesión</div>
        <div class="card-body">
        <form action="login.php" method="post">
                <div class="form-group">
                    <label for="usuario" class="form-label mt-4">Usuario</label>
                    <input type="text" class="form-control" name="usuario" placeholder="Insertar usuario">
                </div>
                <div class="form-group">
                    <label for="contraseña" class="form-label mt-4">Contraseña</label>
                    <input type="password" class="form-control" name="contraseña" placeholder="Insertar Contraseña">
                </div>
                <br>
                <input type="submit" value="conectar">
        </form>
        <a href="registrar.php"><button style="margin-top:10px;">registrarse</button></a>
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