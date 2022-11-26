<?php
if(isset($_POST['nombre']) && !empty($_POST['nombre']) && isset($_POST['apellido']) &&
!empty($_POST['apellido'])){
    $nombreReg= $_POST['nombre'];
    $apellidoReg=$_POST['apellido'];

    $db='qatar_2022';
    $host='localhost';
    $pw='';
    $user='root';

    $con=mysqli_connect($host,$user,$pw,$db) or die ('no se pudo autentificar con la Bd');
    mysqli_select_db($con,$db) or die ('no se puedo conectar a la BD');
    if($capitalReg >= 100){
        $sql="INSERT INTO cliente(nombre,apellido,capital)
        VALUES ('$nombreReg','$apellidoReg','$capitalReg')";
        if($con->query($sql) === TRUE){
            echo 'guardado corretamente <br>';
            echo '<a href=login.php> volver al inicio </a>';
        }else{
            echo 'error:'.$sql.'<br>'.$con->error;
        }
        $con->close();
    }else{
        echo '<br> El minimo a ingresar en una nueva capital es de 100';
    }
}else{
    echo 'debe de llenar los campos';
    echo '<a href=registrar.php> Volver a registrarse </a>';
}
?>