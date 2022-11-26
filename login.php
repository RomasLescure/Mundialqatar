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
        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contraseña = '$contraseña'";
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
    <div class="card text-white bg-primary mb-3" style="">
        <div class="card-header">Inicio de sesión</div>
        <div class="card-body">
        <form action="login.php" method="post">
            <fieldset>
                <div class="form-group">
                    <label for="usuario" class="form-label mt-4">Usuario</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="usuario" placeholder="Insertar usuario">
                </div>
                <label for="apellido">Contraseña</label>
                <input type="text" name="contraseña" placeholder="Contraseña" require>
                <br><br>
                <input type="submit" value="conectar">
            </fieldset>
        </form>
        </div>
    </div>
    <br><br>
    <a href="registrar.php"><button>registrar</button></a>
</body>
</html>