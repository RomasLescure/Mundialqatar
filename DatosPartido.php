<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Información del mundial</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Qatar 2022</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="inicio.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="equipos.php">Equipos</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="Resultados.php">Resultados</a>
                        <span class="visually-hidden">(current)</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Posiciones.php">Tabla de posiciones por grupo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="favoritos.php">Favoritos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="clasificaciones.php">Clasificaciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Datos</a>
                    </li>
                </ul>
                <a href="login.php"><button type="button" class="btn btn-secondary" style="margin: 0px 5px 0px 5px;">Login</button></a>
                <a href="registrar.php"><button type="button" class="btn btn-secondary" style="margin: 0px 5px 0px 5px;">Register</button></a>
            </div>
        </div>
    </nav>
    <br>
    <h1 style="margin-left: 20px; text-align: center;">Información del mundial</h1>
    <br>
    <br>
<div class="card border-danger mx-auto" style="width: 500px; margin: 0px 0px 100px 0px">
  <div class="card-header">LLENE LOS CAMPOS</div>
  <div class="card-body">
    <div>
        <form action="DaPartidoBD.php" method="post">
            <div class="form-group">
                <div class="form-group">
                    <label for="partido" class="form-label mt-4">Número de Partido</label>
                    <input type="text" class="form-control" name="partido" placeholder="Insertar Número de Partido">
                </div>
                <label for="pais1" class="form-label mt-4">Primer país</label><br>
                <!-- <input type="text" class="form-control" name="pais" placeholder="Insertar País"> -->
                <select name="pais1" id="pos" size="4">
                    <option value="1" selected>Qatar</option>
                    <option value="2">Ecuador</option>
                    <option value="3">Senegal</option>
                    <option value="4">Países Bajos</option>

                    <option value="5">Inglaterra</option>
                    <option value="6">Irán</option>
                    <option value="7">Estados Unidos</option>
                    <option value="8">Gales</option>

                    <option value="9">Polonia</option>
                    <option value="10">Argentina</option>
                    <option value="11">Arabia Saudí</option>
                    <option value="12">México</option>

                    <option value="13">Francia</option>
                    <option value="14">Australia</option>
                    <option value="15">Dinamarca</option>
                    <option value="16">Túnez</option>

                    <option value="17">España</option>
                    <option value="18">Japón</option>
                    <option value="19">Costa Rica</option>
                    <option value="20">Alemania</option>

                    <option value="21">Croacia</option>
                    <option value="22">Marruecos</option>
                    <option value="23">Bélgica</option>
                    <option value="24">Canada</option>

                    <option value="25">Brasil</option>
                    <option value="26">Suiza</option>
                    <option value="27">Camerún</option>
                    <option value="27">Serbia</option>

                    <option value="29">Portugal</option>
                    <option value="30">Ghana</option>
                    <option value="31">Uruguay</option>
                    <option value="32">Corea del Sur</option>
                </select>
            </div>

            <div class="form-group">
                <label for="goles1" class="form-label mt-4">Goles</label>
                <input type="text" class="form-control" name="goles1" placeholder="Insertar Goles Anotados">
            </div>
            <div class="form-group">
                <label for="pais2" class="form-label mt-4">Segundo País</label><br>
                <!-- <input type="text" class="form-control" name="pais" placeholder="Insertar País"> -->
                <select name="pais2" id="pos" size="4">
                    <option value="1" selected>Qatar</option>
                    <option value="2">Ecuador</option>
                    <option value="3">Senegal</option>
                    <option value="4">Países Bajos</option>

                    <option value="5">Inglaterra</option>
                    <option value="6">Irán</option>
                    <option value="7">Estados Unidos</option>
                    <option value="8">Gales</option>

                    <option value="9">Polonia</option>
                    <option value="10">Argentina</option>
                    <option value="11">Arabia Saudí</option>
                    <option value="12">México</option>

                    <option value="13">Francia</option>
                    <option value="14">Australia</option>
                    <option value="15">Dinamarca</option>
                    <option value="16">Túnez</option>

                    <option value="17">España</option>
                    <option value="18">Japón</option>
                    <option value="19">Costa Rica</option>
                    <option value="20">Alemania</option>

                    <option value="21">Croacia</option>
                    <option value="22">Marruecos</option>
                    <option value="23">Bélgica</option>
                    <option value="24">Canada</option>

                    <option value="25">Brasil</option>
                    <option value="26">Suiza</option>
                    <option value="27">Camerún</option>
                    <option value="27">Serbia</option>

                    <option value="29">Portugal</option>
                    <option value="30">Ghana</option>
                    <option value="31">Uruguay</option>
                    <option value="32">Corea del Sur</option>
                </select>
            </div>
            <div class="form-group">
                <label for="goles2" class="form-label mt-4">Goles</label>
                <input type="text" class="form-control" name="goles2" placeholder="Insertar Goles Anotados">
            </div>
            <br>
            <input type="submit" value="Guardar">
        </form>
        </div>
    </div>
</div>
</body>
</html>