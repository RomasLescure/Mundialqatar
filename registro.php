<?php
session_start();

if (!isset($_SESSION['last_request_time'])) {
    $_SESSION['last_request_time'] = time();
    $_SESSION['request_count'] = 1;
} else {
    $elapsed_time = time() - $_SESSION['last_request_time'];
    if ($elapsed_time < 1) { // Limitar a una solicitud por segundo
        $_SESSION['request_count']++;
        if ($_SESSION['request_count'] > 5) { // Limitar a 5 solicitudes por segundo
            die("Demasiadas solicitudes. Inténtalo de nuevo más tarde.");
        }
    } else {
        $_SESSION['last_request_time'] = time();
        $_SESSION['request_count'] = 1;
    }
}

if (
    isset($_POST['user']) && !empty($_POST['user']) &&
    isset($_POST['pass']) && !empty($_POST['pass']) &&
    isset($_POST['tipo']) && !empty($_POST['tipo']) 
    )
{
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $type = $_POST['tipo'];

    // Validar el formato y longitud de la contraseña
    if (strlen($pass) <= 50 && preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,50}$/', $pass)) {
        // La contraseña cumple con los criterios y no excede la longitud máxima

        $host = 'localhost';
        $db = 'datos_mundial';
        $pw = '';
        $userroot = 'root';

        $con = mysqli_connect($host, $userroot, $pw, $db) or die('No se pudo autentificar con la Bd');
        mysqli_select_db($con, $db) or die('No se pudo conectar a la BD');

        if ($type == "pred") {
            $sql = "INSERT INTO usuarios(user, pass, tipo, id_equipo)
            VALUES ('$user','$pass', '$type', NULL)";

            if ($con->query($sql) === TRUE) {
                echo 'Se ha registrado exitosamente<br><br>';
                echo '<a href=login.php> LOGIN </a>';
                echo $type;
            } else {
                echo 'Error: ' . $sql . '<br>' . $con->error;
            }
            $con->close();
        } else {
            if (isset($_POST['adminPass']) && !empty($_POST['adminPass'])) {
                $adminPass = $_POST['adminPass'];
                if ($adminPass == "code") {
                    $sql = "INSERT INTO usuarios(user, pass, tipo)
                    VALUES ('$user','$pass','$type')";

                    if ($con->query($sql) === TRUE) {
                        echo 'Se ha registrado exitosamente<br><br>';
                        echo '<a href=login.php> LOGIN </a>';
                        echo $type;
                    } else {
                        echo 'Error: ' . $sql . '<br>' . $con->error;
                    }
                } else {
                    echo 'Contraseña incorrecta<br>';
                    echo 'No tiene acceso a funciones administrativas y su información no fue almacenada<br>';
                    echo '<a href=registrar.php>Puede volver a Registrar</a>';
                }
            } else {
                echo 'Debe llenar todos los campos';
                echo '<a href=registrar.php> Volver a registrarse </a>';
            }
            $con->close();
        }
    } else {
        die("La contraseña debe contener al menos una letra mayúscula, una letra minúscula, un número y tener entre 8 y 50 caracteres de longitud.");
    }
} else {
    echo 'Debe llenar todos los campos';
    echo '<a href=registrar.php> Volver a registrarse </a>';
}
?>