<?php
    session_start();
    $db_host = 'localhost';
    $db_user = 'root';
    $db_password ='';
    $db_db = 'qatar_2022';

    $con_db = mysqli_connect($db_host, $db_user, $db_password, $db_db);
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $usuario = $_POST["usuario"];
        $contraseña = $_POST["contraseña"];
        $sql = "SELECT * FROM usuarios WHERE usuaeio = '$usuario' AND contraseña = '$contraseña'";
        $result = $con_db -> query($sql);
        if($result -> num_rows > 0){
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
    <form action="login.php" method="post">
        <label for="nombre">Usuario</label>
        <input type="text" name="usuario" placeholder="nombre" require>
        <br><br>
        <label for="apellido">Contraseña</label>
        <input type="text" name="contraseña" placeholder="Contraseña" require>
        <br><br>
        <input type="submit" value="conectar">
    </form>
    <br><br>
    <a href="registrar.php"><button>registrar</button></a>
</body>
</html>