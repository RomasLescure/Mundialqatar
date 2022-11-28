<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro con Base de Datos</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
    <div class="card text-white bg-dark mb-3" style="margin: 20px 20px 20px 20px;">
        <div class="card-header">IRegistro</div>
        <div class="card-body">
            <form action="registro.php" method="post">
                <fieldset>
                    <div class="form-group">
                        <label for="user" class="form-label mt-4">Usuario</label>
                        <input type="text" class="form-control" name="user" placeholder="Insertar Usuario">
                    </div>
                    <div class="form-group">
                        <label for="pass" class="form-label mt-4">Contraseña</label>
                        <input type="password" class="form-control" name="pass" placeholder="Insertar Contraseña">
                    </div>
                    <!-- Dependiendo del tipo de usuario se lleva a una pagina u a otra -->
                    <div class="form-group">
                        <label for="exampleSelect1" class="form-label mt-4">Tipo de usuario</label>
                        <!-- Si es predeterminado se registra automaticamente -->
                        <br><input type="radio" value="pred" id="pred" name="tipo">
                        <label for="pred">Opcion Predeterminado</label>
                        <!-- Si es Administrativo se debe llevar a una pagina en la cual debe colocar
                        una contraseña que solo los administrativos saben osea nosotros, elijan ustedes la 
                        contraseña -->
                        <br><input type="radio" value="admin" id="admin" name="tipo">
                        <label for="admin">Opcion Administrativo</label>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="adminPass" class="form-label mt-4">Contraseña administrativa</label>
                        <input type="text" class="form-control" name="adminPass" placeholder="Insertar Contraseña">
                    </div>
                    <input type="submit" value="Registrarse">
                </fieldset>
            </form>
        </div>
    </div>
</body>

</html>