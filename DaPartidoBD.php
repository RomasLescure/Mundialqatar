<?php

if (
    isset($_POST['partido']) && !is_null($_POST['partido']) &&
    isset($_POST['goles1']) && !is_null($_POST['goles1']) &&
    isset($_POST['goles2']) && !is_null($_POST['goles2'])
) {
    $partido = $_POST['partido'];
    $pais1 = $_POST['pais1'];
    $goles1 = $_POST['goles1'];
    $pais2 = $_POST['pais2'];
    $goles2 = $_POST['goles2'];

    //declaración de las variables para conexión
    $host = 'localhost';
    $db = 'datos_mundial';
    $pw = '';
    $userroot = 'root';

    //conexión con la BD
    $con = mysqli_connect($host, $userroot, $pw, $db) or die("No se pudo autentificar con la BD");
    mysqli_select_db($con, $db) or die("no se pudo con la BD");

    //query para insertar los valores en la tabla de la bd
    $sql1 = "INSERT INTO partidos_juegos(id_partido, id_equipo, gol_equipo)
    VALUES ('$partido', '$pais1', '$goles1')";

    $sql2 = "INSERT INTO partidos_juegos(id_partido, id_equipo, gol_equipo)
    VALUES ('$partido', '$pais2', '$goles2')";

    if ($con->query($sql1) === TRUE && $con->query($sql2) === TRUE) {
        echo "Guardado correctamente <br>";
        // echo "<a href=index.php> volver a Formulario</a>";
        // echo '<br><br><a href= "mostrar.php"> MOSTRAR TABLA</a>';
    } else {
        echo "Error: " . $sql1 . "<br>" . $con->error;
        echo "Error: " . $sql2 . "<br>" . $con->error;
    }

    //--------------------------------------PRIMER PAÍS---------------------------------------------------------
    //Sacar información de la tabla de equipos_juegos para el primer país
    $sql3 = "SELECT * FROM equipos_juegos WHERE id_equipos = '$pais1'";
    $q = $con->query($sql3);
    if ($q->num_rows > 0) {
        //Colocamos aqui el código que se quiere ejecutar en caso que la consulta no devuelva vacío.
        $result = mysqli_query($con, $sql3);

        while ($mostra = mysqli_fetch_array($result)) {
            $id_equipos = $mostra['id_equipos'];
            $jugado = $mostra['jj'];
            $ganado = $mostra['jg'];
            $empate = $mostra['je'];
            $perdido = $mostra['jp'];
            $afavor = $mostra['ga'];
            $contra = $mostra['gc'];
            $diferencia = $mostra['dif'];
        }

        //Sumarle o restarle lo necesario u operaciones necesarias 
        $puntos = 0;
        $jugado = $jugado + 1;
        if ($goles1 > $goles2) {
            $ganado = $ganado + 1;
        } elseif ($goles1 < $goles2) {
            $perdido = $perdido + 1;
        } else {
            $empate = $empate + 1;
        }
        $puntos = $puntos + ($ganado * 3 + $empate * 1 + $perdido * 0);
        $afavor = $afavor + $goles1;
        $contra = $contra + $goles2;
        $diferencia = $afavor - $contra;

        $sql4 = "UPDATE equipos_juegos SET puntos = $puntos, 
    jj = '$jugado',
    jg='$ganado',
    je = '$empate',
    jp = '$perdido',
    ga = '$afavor',
    gc = '$contra',
    dif = '$diferencia'
    WHERE id_equipos = '$pais1'";

        if ($con->query($sql4) === TRUE) {
            echo "Se actualizó la tabla <br>";
            // echo "<a href=index.php> volver a Formulario</a>";
            // echo '<br><br><a href= "mostrar.php"> MOSTRAR TABLA</a>';
        } else {
            echo "Error: " . $sql4 . "<br>" . $con->error;
        }
    } else {
        $jugado = 0;
        $ganado = 0;
        $empate = 0;
        $perdido = 0;
        $afavor = 0;
        $contra = 0;
        $diferencia = 0;
        $puntos = 0;

        //Sumarle o restarle lo necesario u operaciones necesarias 
        $jugado = $jugado + 1;
        if ($goles1 > $goles2) {
            $ganado = $ganado + 1;
        } elseif ($goles1 < $goles2) {
            $perdido = $perdido + 1;
        } else {
            $empate = $empate + 1;
        }
        $puntos = $puntos + ($ganado * 3 + $empate * 1 + $perdido * 0);

        $afavor = $afavor + $goles1;
        $contra = $contra + $goles2;
        $diferencia = $afavor - $contra;

        $sql4 = "INSERT INTO equipos_juegos (id_equipos,puntos,jj,jg,je,jp,ga,gc,dif)
        VALUES ('$pais1','$puntos', '$jugado','$ganado','$empate','$perdido','$afavor','$contra', '$diferencia')";

        if ($con->query($sql4) === TRUE) {
            echo "Se ingreso la tabla <br>";
            // echo "<a href=index.php> volver a Formulario</a>";
            // echo '<br><br><a href= "mostrar.php"> MOSTRAR TABLA</a>';
        } else {
            echo "Error: " . $sql4 . "<br>" . $con->error;
        }
    }

    //Volver a ingresar a la tabla de equipos_juegos



    //--------------------------------------SEGUNDO PAÍS---------------------------------------------------------
    //Sacar información de la tabla de equipos_juegos para el segundo país
    $sql5 = "SELECT * FROM equipos_juegos WHERE id_equipos = '$pais2'";
    $q = $con->query($sql5);
    if ($q->num_rows > 0) {
        //Colocamos aqui el código que se quiere ejecutar en caso que la consulta no devuelva vacío.
        $result = mysqli_query($con, $sql5);

        while ($mostra = mysqli_fetch_array($result)) {
            $id_equipos = $mostra['id_equipos'];
            $jugado = $mostra['jj'];
            $ganado = $mostra['jg'];
            $empate = $mostra['je'];
            $perdido = $mostra['jp'];
            $afavor = $mostra['ga'];
            $contra = $mostra['gc'];
            $diferencia = $mostra['dif'];
        }

        //Sumarle o restarle lo necesario u operaciones necesarias 
        $puntos = 0;
        $jugado = $jugado + 1;
        if ($goles2 > $goles1) {
            $ganado = $ganado + 1;
        } elseif ($goles2 < $goles1) {
            $perdido = $perdido + 1;
        } else {
            $empate = $empate + 1;
        }
        $puntos = $puntos + ($ganado * 3 + $empate * 1 + $perdido * 0);
        $afavor = $afavor + $goles2;
        $contra = $contra + $goles1;
        $diferencia = $afavor - $contra;

        $sql6 = "UPDATE equipos_juegos SET puntos = $puntos, 
    jj = '$jugado',
    jg = '$ganado',
    je = '$empate',
    jp = '$perdido',
    ga = '$afavor',
    gc = '$contra',
    dif = '$diferencia'
    WHERE id_equipos = '$pais2'";

        if ($con->query($sql6) === TRUE) {
            echo "Se actualizó la tabla <br>";
            // echo "<a href=index.php> volver a Formulario</a>";
            // echo '<br><br><a href= "mostrar.php"> MOSTRAR TABLA</a>';
        } else {
            echo "Error: " . $sql6 . "<br>" . $con->error;
        }
    } else {
        $jugado = 0;
        $ganado = 0;
        $empate = 0;
        $perdido = 0;
        $afavor = 0;
        $contra = 0;
        $diferencia = 0;
        $puntos = 0;

        //Sumarle o restarle lo necesario u operaciones necesarias 
        $puntos = 0;
        $jugado = $jugado + 1;
        if ($goles2 > $goles1) {
            $ganado = $ganado + 1;
        } elseif ($goles2 < $goles1) {
            $perdido = $perdido + 1;
        } else {
            $empate = $empate + 1;
        }
        $puntos = $puntos + ($ganado * 3 + $empate * 1 + $perdido * 0);
        $afavor = $afavor + $goles2;
        $contra = $contra + $goles1;
        $diferencia = $afavor - $contra;

        $sql6 = "INSERT INTO equipos_juegos (id_equipos,puntos,jj,jg,je,jp,ga,gc,dif)
        VALUES ('$pais2','$puntos', '$jugado','$ganado','$empate','$perdido','$afavor','$contra', '$diferencia')";

        if ($con->query($sql6) === TRUE) {
            echo "Se ingreso la tabla <br>";
            // echo "<a href=index.php> volver a Formulario</a>";
            // echo '<br><br><a href= "mostrar.php"> MOSTRAR TABLA</a>';
        } else {
            echo "Error: " . $sql6 . "<br>" . $con->error;
        }
    }

    //Volver a ingresar a la tabla de equipos_juegos




    $con->close();
} else {
    echo "Debe de llenar los campos";
}
