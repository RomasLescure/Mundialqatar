<?php
if (
    isset($_POST['user']) && !empty($_POST['user']) &&
    isset($_POST['pass']) && !empty($_POST['pass']) &&
    isset($_POST['tipo']) && !empty($_POST['tipo']) &&
    isset($_POST['adminPass']) && !empty($_POST['adminPass'])
) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $type = $_POST['tipo'];
    $adminPass = $_POST['adminPass'];
    $host = 'localhost';
    $db = 'datos_mundial';
    $pw = '';
    $userroot = 'root';

    $con = mysqli_connect($host, $userroot, $pw, $db) or die('no se pudo autentificar con la Bd');
    mysqli_select_db($con, $db) or die('no se puedo conectar a la BD');

    if ($type == "pred") {
        $sql = "INSERT INTO usuarios(user, pass, tipo, id_equipo)
        VALUES ('$user','$pass', '$type',NULL)";

        if ($con->query($sql) === TRUE) {
            echo 'Se ha registrado exitosamente<br><br>';
            echo '<a href=login.php> LOGIN </a>';
            echo $type;
        } else {
            echo 'error:' . $sql . '<br>' . $con->error;
        }
        $con->close();
    } else {

     
            if ($adminPass == "code") {
                $sql = "INSERT INTO usuarios(user, pass, tipo)
                VALUES ('$user','$pass','$type')";

                if ($con->query($sql) === TRUE) {
                    echo 'Se ha registrado exitosamente<br><br>';
                    echo '<a href=login.php> LOGIN </a>';
                    echo $type;
                } else {
                    echo 'error:' . $sql . '<br>' . $con->error;
                }
                
            } else {
                echo 'Contraseña incorrecta<br>';
                echo 'No tiene acceso a funciones administrativas y su información no fue almacenada<br>';
                echo '<a href=registrar.php>Puede volver a Registrar</a>';
            }
            $con->close();
    }
} else {
    echo 'debe de llenar los campos';
    echo '<a href=registrar.php> Volver a registrarse </a>';
}
