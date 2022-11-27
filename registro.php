<?php
if (
    isset($_POST['user']) && !empty($_POST['user']) && isset($_POST['pass']) &&
    !empty($_POST['pass'])
) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $db = 'qatar_2022';
    $host = 'localhost';
    $pw = '';
    $user = 'root';

    $con = mysqli_connect($host, $user, $pw, $db) or die('no se pudo autentificar con la Bd');
    mysqli_select_db($con, $db) or die('no se puedo conectar a la BD');
    $sql = "INSERT INTO usuarios(user,pass)
        VALUES ('$user','$pass')";
    if ($con->query($sql) === TRUE) {
        echo 'guardado corretamente <br>';
        echo '<a href=login.php> volver al inicio </a>';
    } else {
        echo 'error:' . $sql . '<br>' . $con->error;
    }
    $con->close();
} else {
    echo 'debe de llenar los campos';
    echo '<a href=registrar.php> Volver a registrarse </a>';
}
