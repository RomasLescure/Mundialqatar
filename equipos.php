<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Equipos</title>
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
                <a class="nav-link active" href="#">Equipos
                    <span class="visually-hidden">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Resultados.php">Resultados</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Tabla de posiciones</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Favoritos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Clasificaciones</a>
              </li>
            </ul>
            <a href="login.php"><button type="button" class="btn btn-secondary" style="margin: 0px 5px 0px 5px;">Login</button></a>
            <a href="registrar.php"><button type="button" class="btn btn-secondary" style="margin: 0px 5px 0px 5px;">Register</button></a>
          </div>
        </div>
    </nav>
      <br>
      <h1 style="margin-left: 20px">Equipos</h1>
      <div class="card text-white bg-success grupos" >
      <div class="card-header"><h2>Qatar  <img src="https://i.pinimg.com/originals/ef/3c/16/ef3c16f2d4b8d856f49fafa7e7b947c1.png"></h2></div>
      <table>
        <thead>
          <tr>
            <th>
        <div class="card-body">
          <h4 class="card-title">Historial</h4>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Ganados
              <span class="badge bg-primary rounded-pill">0</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Goles en mundiales
              <span class="badge bg-primary rounded-pill">0</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Partidos Ganados
              <span class="badge bg-primary rounded-pill">0</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Jugados
              <span class="badge bg-primary rounded-pill">1</span>
            </li>
          </ul>
        </div>
        </th>
        <th>
          <h4 class="card-title">Jugadores</h4>
          <ol class="list-group">
          <table class="jugadores">
            <tr>
              <th>
                <li>Almoez Ali</li>
                <li>Ró-Ró</li>
                <li>Akram Afif</li>
                <li>Hassan Al-Haidos</li>
                <li>Abdelkarim Hassan</li>
                <li>Mohammed Muntari</li>
                <li>Bassam Al-Rawi</li>
                <li>Abdulaziz Hatem</li>
                <li>Boualem Khoukhi</li>
              </th>
              <th>
                <li>Saad Al Sheeb</li>
                <li>Karim Boudiaf</li>
                <li>Meshaal Barsham</li>
                <li>Ismaeel Mohammad</li>
                <li>Tarek Salman</li>
                <li>Yousef Hassan</li>
                <li>Assim Madibo</li>
                <li>Homan Ahmed</li>
                <li>Ahmed Alaaeldin</li>
              </th>
            </tr>
          </table>
          </ol>
        </th>
        </tr>
        </thead>
      </table>
      </div>
      <div class="card text-white bg-success grupos" >
      <div class="card-header"><h2>Ecuador  <img src="data:image/png;base64,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"></h2></div>
      <table>
        <thead>
          <tr>
            <th>
        <div class="card-body">
          <h4 class="card-title">Historial</h4>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Ganados
              <span class="badge bg-primary rounded-pill">0</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Goles en mundiales
              <span class="badge bg-primary rounded-pill">12</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Partidos Ganados
              <span class="badge bg-primary rounded-pill">1</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Jugados
              <span class="badge bg-primary rounded-pill">4</span>
            </li>
          </ul>
        </div>
        </th>
        <th>
          <h4 class="card-title">Jugadores</h4>
          <ol class="list-group">
          <table class="jugadores">
            <tr>
              <th>
                <li>Enner Valencia</li>
                <li>Moisés Caicedo</li>
                <li>Gonzalo Plata</li>
                <li>Piero Hincapié</li>
                <li>Jeremy Sarmiento</li>
                <li>Pervis Estupiñán</li>
                <li>Romario Ibarra</li>
                <li>Michael Estrada</li>
                <li>Ángel Mena</li>
              </th>
              <th>
                <li>Alexander Dominguez</li>
                <li>Jackson Porozo</li>
                <li>Alan Franco Palma</li>
                <li>José Cifuentes</li>
                <li>THernan Galíndez</li>
                <li>Jhegson Méndez</li>
                <li>Carlos Gruezo</li>
                <li>Robert Arboleda</li>
                <li>Angelo Preciado</li>
              </th>
            </tr>
          </table>
          </ol>
        </th>
        </tr>
        </thead>
      </table>
      </div>
      <div class="card text-white bg-success grupos" >
      <div class="card-header"><h2>Senegal <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARMAAAC3CAMAAAAGjUrGAAAAflBMVEUAhT/jGyP970L/9EIAgj9vqUD+9kPrcS3iDCIAiD/+70IAfj//8kIAgT8AfD8Afz/S2UHI1EF/r0CHskDm5EL37UJ5rEDX3EGTuEAojj+Gs0C+z0FiokDE0UGvyUEAdj85lj9XnkClwkEeiz/u6EKPt0BrpkBLmkCbvUC0ykG5C74IAAADhElEQVR4nO3b3XLaMBCGYRcptFiSwYR/kpaEhMD932CFYRwnCMtMy8nq3UNGHzN5RisLWcmyu5V+UL17Vf/nrx93q/uRYIIJJphgggkmmGCCCSaYYIIJJphgggkmmGCCCSaYYIIJJphgggkmmGCCCSaYYIIJJphgggkmmGCCCSaYYIIJJphgggkmmGCCCSaYYIIJJv/XxGJyQfL7FpQkTHLrbI7Jl7Lln/KGiZKEiZqZ2Q3D0zDRmcbkS9nSZOaG5knBRI1d5sbdxydgkquBDwxU5ydPAiZ2ZHzAjDo3TwIm6tH5gHvsHEjBZFAlBpjUZeemSph51+aRb6LeXZVw710TCZhsz5EtJuey8+IcKbo2j3gTtXDniFt0jMg3WdaZJSZV5ZOizhSTbltZ6SZq7+qM23fLiDdZNkIdm0eQiVWBmphGyExCQy6eRmJM8slGDy7rWywwQm++LzNiTHq5WhX69u8pVheHCHJMPMoouxVFZ+XluYogE7+iTF9MPNoo8zIN7G1Fmfip8mq6TxVtXoOHb7JM/LN3snXxdFVuOwl/hzSTnrWzIh73VTzYK78JxZn4/lm7eP9ot766gZNn4vvnbRNbaoebt+t5iSZ+qiza+6d4b3uzIdLET5VRdn2pddmo9WWPUBO/VXm61j/hTUkCJv4v+x1eafVrP3KMItek138KoeinfjQo12QaXlGG03RN7GEYNjnEju/lmqhg6xybJ7oSiTXphaeJnyixoFgTu776LF5Hmkesidpd+9Gjd5GoVJPcNp86etgEil2WlWpinxut45ajTWN1Mc9p7mPVw+fMKMbKqnHROSvUJLc1iXbP/hdfrkr9+VF78wg1OV6JPZX5OP/is9OP+rP2y7JCTdTsPCmKfX0skKv9GUW33zSXaZKrE4kbzJvD1HxwehrpBM9PTldis2L37Rja2l211LZflpVpcrxN7jclh8sx6nDcqrTfNBdq4kcMl8HXN+qt2qokZ3JsnWJ1eYmiquO79vbmEWmiVib0brxGKTPTdtNcpon+aD2G9luVtv9xkmhiy0XkGDrvL1q2bRJNepF3FZVby6msSJN/LEwwwQQTTDDBBBNMMMEEE0wwwQQTTDDBBBNMMMEEE0wwwQQTTDDBBBNMMMEEE0wwwQQTTDDBBBNMMMEEE0wwwQQTTDDBBBNMMMEEE0wwwQQTTDDBBBNMEjH5CzBZ5fnsg0twAAAAAElFTkSuQmCC"></h2></div>
      <table>
        <thead>
          <tr>
            <th>
        <div class="card-body">
          <h4 class="card-title">Historial</h4>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Ganados
              <span class="badge bg-primary rounded-pill">0</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Goles en mundiales
              <span class="badge bg-primary rounded-pill">11</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Partidos Ganados
              <span class="badge bg-primary rounded-pill">2</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Jugados
              <span class="badge bg-primary rounded-pill">2</span>
            </li>
          </ul>
        </div>
        </th>
        <th>
          <h4 class="card-title">Jugadores</h4>
          <ol class="list-group">
          <table class="jugadores">
            <tr>
              <th>
                <li>Kalidou Koulibaly</li>
                <li>Édouard Mendy</li>
                <li>Idrissa Gana</li>
                <li>Ismaila Sarr</li>
                <li>Abdou Diallo</li>
                <li>Boulaye Día</li>
                <li>Nampalys Mendy</li>
                <li>Krépin Diatta</li>
                <li>Cheikhou Kouyaté</li>
              </th>
              <th>
                <li>Bamba Dieng</li>
                <li>Formose Mendy</li>
                <li>Pape Gueye</li>
                <li>Ismail Jakobs</li>
                <li>Pathé Ciss</li>
                <li>Pape Matar Sarr</li>
                <li>Lliman Ndiaye</li>
                <li>Fodé Ballo-Toure</li>
                <li>Nicolas Jackson</li>
              </th>
            </tr>
          </table>
          </ol>
        </th>
        </tr>
        </thead>
      </table>
      </div>
      <div class="card text-white bg-success grupos" >
      <div class="card-header"><h2>Holanda <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARMAAAC3CAMAAAAGjUrGAAAAElBMVEWuHCj///8hRouuGSb99/j3+fxjPD24AAABC0lEQVR4nO3RsQ2DABDAwCfA/iunf0u0UNyNYM8AAAAAAAAAAAAAAAAAAAAAj062t5d80sU2B5smpUlpUpqUJqVJaVKalCalSWlSmpQmpUlpUpqUJqVJaVKalCalSWlSmpQmpUlpUpqUJqVJaVKalCalSWlSmpQmpUlpUpqUJqVJaVKalCalSWlSmpQmpUlpUpqUJqVJaVKalCalSc3NNj82TUqT0qQ0KU1Kk9KkNClNSpPSpDQpTUqT0qQ0KU1Kk9KkNClNSpPSpDQpTUqT0qQ0KU1Kk9KkNClNSpPSpDQpTUqT0qQ0KU1Kk9KkNClNSpPSpDQpTUqT0qQ0KU1Kk9KkNClNSpPSpDSpP0Blz1R39PPpAAAAAElFTkSuQmCC"></h2></div>
      <table>
        <thead>
          <tr>
            <th>
        <div class="card-body">
          <h4 class="card-title">Historial</h4>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Ganados
              <span class="badge bg-primary rounded-pill">0</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Goles en mundiales
              <span class="badge bg-primary rounded-pill">88</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Partidos Ganados
              <span class="badge bg-primary rounded-pill">22</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Jugados
              <span class="badge bg-primary rounded-pill">12</span>
            </li>
          </ul>
        </div>
        </th>
        <th>
          <h4 class="card-title">Jugadores</h4>
          <ol class="list-group">
          <table class="jugadores">
            <tr>
              <th>
                <li>Virgil van Djik</li>
                <li>Memphis Depay</li>
                <li>Frenkie de Jong</li>
                <li>Steven Bergwjin</li>
                <li>Cody Gakpo</li>
                <li>Wout Weghorst</li>
                <li>Vincent Janssen</li>
                <li>Andries Noppert</li>
                <li>Remko Pasveer</li>
              </th>
              <th>
                <li>Matthijs de Ligt</li>
                <li>Nathan Aké</li>
                <li>Tyrell Malacia</li>
                <li>Teun Koopmeiners</li>
                <li>Davy Klaassen</li>
                <li>Kenneth Taylor</li>
                <li>Steven Berghuis</li>
                <li>Noa Lang</li>
                <li>Luuk de Jong</li>
              </th>
            </tr>
          </table>
          </ol>
        </th>
        </tr>
        </thead>
      </table>
      </div>
      <div class="card text-white bg-success grupos" >
      <div class="card-header"><h2>Inglaterra <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASIAAACuCAMAAAClZfCTAAAAFVBMVEX////PFCvNABPtvcDuwcTOAB7ijZMXROVhAAABiUlEQVR4nO3asQ3DMBAEQVqk1H/JdgcTPgTvVHDY+Naata8PXHt44rQSUYmoRFQiKhGViEpEJaISUYmoRFQiKhGViEpEJaISUYmoRFQiKhGViEpEJaISUYmoRFQiKhGViEpEJaISUYmoRFQiKhGViEpEJaISUYmoRFQiKhGViEpEJaISUYmoRFQiKhGViEpEJaISUYmoRFQiKhGViEpEJaISUYmoRHSc6Exv3KPOcyvR/ZzZjeuaxUK/RsMTlyf+uxJRiahEVCIqEZWISkQlohJRiahEVCIqEZWISkQlohJRiahEVCIqEZWISkQlohJRiahEVCIqEZWISkRdsKgjH01fLd9wBx3WqZhKRCWiElGJqERUIioRlYhKRCWiElGJqERUIioRlYhKRCWiElGJqERUIioRlYhKRCWiElGJqERUIioRlYhKRCWiElGJqERUIioRlYhKRCWiElGJqERUIioRlYhKRCWiElGJqERUIioRlYhKRCWiElGJqERUIioRlYhKRCWiFyT6AlXQRZ39U6PdAAAAAElFTkSuQmCC"></h2></div>
      <table>
        <thead>
          <tr>
            <th>
        <div class="card-body">
          <h4 class="card-title">Historial</h4>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Ganados
              <span class="badge bg-primary rounded-pill">1</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Goles en mundiales
              <span class="badge bg-primary rounded-pill">97</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Partidos Ganados
              <span class="badge bg-primary rounded-pill">29</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Jugados
              <span class="badge bg-primary rounded-pill">16</span>
            </li>
          </ul>
        </div>
        </th>
        <th>
          <h4 class="card-title">Jugadores</h4>
          <ol class="list-group">
          <table class="jugadores">
            <tr>
              <th>
                <li>Harry Kane</li>
                <li>Buyako Saka</li>
                <li>Harry Maguire</li>
                <li>Jack Grealish</li>
                <li>Jude Bellingham</li>
                <li>Phil Foden</li>
                <li>Mason Mount</li>
                <li>Raheem Sterling</li>
                <li>Jordan Pickford</li>
              </th>
              <th>
                <li>Trent Alexander</li>
                <li>Marcus Rashford</li>
                <li>Nick Pope</li>
                <li>Kalvin Phillips</li>
                <li>Aaron Ramsdale</li>
                <li>Declan Rice</li>
                <li>Luke Shaw</li>
                <li>Ben White</li>
                <li>Jordan Henderson</li>
              </th>
            </tr>
          </table>
          </ol>
        </th>
        </tr>
        </thead>
      </table>
      </div>
      <div class="card text-white bg-success grupos" >
      <div class="card-header"><h2>Iran <img src="data:image/png;base64,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"></h2></div>
      <table>
        <thead>
          <tr>
            <th>
        <div class="card-body">
          <h4 class="card-title">Historial</h4>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Ganados
              <span class="badge bg-primary rounded-pill">0</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Goles en mundiales
              <span class="badge bg-primary rounded-pill">11</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Partidos Ganados
              <span class="badge bg-primary rounded-pill">3</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Jugados
              <span class="badge bg-primary rounded-pill">5</span>
            </li>
          </ul>
        </div>
        </th>
        <th>
          <h4 class="card-title">Jugadores</h4>
          <ol class="list-group">
          <table class="jugadores">
            <tr>
              <th>
                <li>Medhi Taremi</li>
                <li>Sardar Azmoun</li>
                <li>Alireza Beiranvand</li>
                <li>Alireza Jahanbakhsh</li>
                <li>Ramin Rezaeian</li>
                <li>Ehsan Hajsafi</li>
                <li>Ali Karimi</li>
                <li>Saeid Ezatolahi</li>
                <li>Amir Abedzadeh</li>
              </th>
              <th>
                <li>Karim Ansarifard</li>
                <li>Shoja Khalilzadeh</li>
                <li>Saman Ghoddos</li>
                <li>Vahid Amiri</li>
                <li>Hossein Hosseini</li>
                <li>Rouzbeh Cheshmi</li>
                <li>Mehdi Torabi</li>
                <li>Sadegh Moharrami</li>
                <li>Ahmad Nourollahi</li>
              </th>
            </tr>
          </table>
          </ol>
        </th>
        </tr>
        </thead>
      </table>
      </div>
      <div class="card text-white bg-success grupos" >
      <div class="card-header"><h2>Estados Unidos <img src="data:image/png;base64,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"></h2></div>
      <table>
        <thead>
          <tr>
            <th>
        <div class="card-body">
          <h4 class="card-title">Historial</h4>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Ganados
              <span class="badge bg-primary rounded-pill">0</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Goles en mundiales
              <span class="badge bg-primary rounded-pill">38</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Partidos Ganados
              <span class="badge bg-primary rounded-pill">8</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Jugados
              <span class="badge bg-primary rounded-pill">11</span>
            </li>
          </ul>
        </div>
        </th>
        <th>
          <h4 class="card-title">Jugadores</h4>
          <ol class="list-group">
          <table class="jugadores">
            <tr>
              <th>
                <li>Christian Pulisic</li>
                <li>Giovanni Reyna</li>
                <li>Sergiño Dest</li>
                <li>Brenden Aaronson</li>
                <li>Weston McKennie</li>
                <li>Timothy Weah</li>
                <li>Matt Turner</li>
                <li>Yunus Musah</li>
                <li>John Sargeant</li>
              </th>
              <th>
                <li>Tyler Adams</li>
                <li>Antonee Robinson</li>
                <li>Jesús Ferreira</li>
                <li>Walker Zimmerman</li>
                <li>Haji Wright</li>
                <li>Tim Ream</li>
                <li>Luca de la Torre</li>
                <li>Joe Scally</li>
                <li>Aaron Long</li>
              </th>
            </tr>
          </table>
          </ol>
        </th>
        </tr>
        </thead>
      </table>
      </div>
      <div class="card text-white bg-success grupos" >
      <div class="card-header"><h2>Gales <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxITEhUTEhIVFRUVGBYZFRYYGBcVFhgYGxUYGBYYFxcYHSgiGRomHRcXITEiJykrLi4vFx8zODMtNygtLi8BCgoKDg0OGxAQGislICYtLS0tLy0tLzUvLy0tLS0tLS0tLS0tLS0vLS0tLS0tLS4tLS0tLS0tLS0tLS0tLS0tLf/AABEIALYBFQMBIgACEQEDEQH/xAAcAAEAAQUBAQAAAAAAAAAAAAAAAQMEBQYHAgj/xABHEAACAQIDAwYJCQcDBAMAAAABAgADEQQSITFBUQUGImFxgQcTMkJSYpGh8ENygoOSorHBwhQWIzOy0uFU0dNTY/HyFSTi/8QAGwEBAAIDAQEAAAAAAAAAAAAAAAEEAgUGAwf/xAA9EQABAwEGAggDBgUEAwAAAAABAAIRAwQFEiExQVFhBhMiMnGBkbEUocEVUmLR4fA0QoLS8SMkksIHM1P/2gAMAwEAAhEDEQA/AO4xEQiREQiREQiREQiREQiREQiREQiREQiREQiREQiREQiREQiREQiREQiREQiREQiREQiREQiREQiREQiREQiREQiREQiREQiRE1XnFz6wmELJm8ZVG2mhuQfXbYnZt6pBIGZWdOk+o7CwEngFtUTU8NzzpDCU8RiLU2qZitNDndgHZQVGhIsAb6DWbTTcEAjYdRAcDopqUn0+8IzI5SMjB0Mcl7iIkrzSIiESIiESJTWoDsIOpHeDYj2ypCJERCJERCJERCJERCJERCJERCJERCJERCJERCJExvLfKQw9FqzIzqli4SxYLcBmsSLhQcx6gduyY1uddKpTvgx+1VN1JXSm466i1CGQdxPVIJhZBjiJAymJ2nx0HmtkmPxvLGHo/wA2vSQ8GdVPsJuZzflqly5iCc1N1Q+ZSdKa99nzN3kjqmjco4Gth6hSrTKMALqWA0OoN1uDKz7QRo0+eS31juOnX71ds8GEOPyPtK6nzl8IlKlZcMFrMb5muwReA2dInq4TXR4UcZf+VQtw8XUv7fG/lNBp4fMAMoLE6ELmIN9AOM9VqDC6lMhGh1y27hqD3Su6u8nIwugs9x2Km3C9mJ0TmTPoNI9PNbzyp4ScRUoVKS0lR3FhVRmUqL62XiRcXzC17zRGU2IHx1yVUfDEymt72zN/R9n0pg57n946LYULFQsgLaTIxcDPzOfvCyPIqE4il0HrWIZ6YvmdQfJCgHQ9k+i6L3UEgrcA2O0XGw23zmPgx5bwdFPEt/DruxzVCBlbWyJnvpYW0awuTbbOpCXbO0Bsgri7/rOfacDmFuHITOY2Inbw134CYiJYWjSJj+VuVqOHTPWqBF3X1LHgqjVj1ATmHOPwmVqt0wi+KTZ4w2NQ/iqd2Y9amYPqNZqVcslgr2p0Um+e3r9BJ5Lo3LvOTDYRb16gUnyUHSdt2iDW19+zrnL+cXhCxGJ6FEnDUmNrqf4zDrcfy+xdfWmm1HLMXdszMbszEsxPEk3JMlL3HbKVS0uOTcl2N39GqNKH1+2eG36+eXJd85lYVaWBwyqLA01fvf8AiN33YzPTmXIvhMwlPD06brVerSRUKoEYEqoAIYsAL2vraWfKnhSrHShRWmPSc+Mf2LZVPewlrrmNaM1yrbrtleq4NpnU56D1OXpmuqu4AuSABtJ0Amtcp8+8DR0FXxrcKQz/AHyQg9s49yly1iMSbVqrP1EnLfdZRZQewTovMfmMEy4jFrepoadM+ZvBcb36ti9uzzFd1QwweZV6vc9Gw0+stdSSdGt3PiduJjLzhbXyByjWrqalWiKKN/LViTUK+m4sMt9y6mZqIloLn3EEkgRy/wA5pE1/nNy+uGFJFsatV0VVO5SwDueoA27SOubBIBBMLIscGhxGR08kiIkrBIiIRIiIRIiIRIiIRIiIRUq1IMpVgCrAgg6ggixB6pwrnlzaqYOtYAtSJvQc67OlkY7nX3gX4gdm5dr4hKRbDU0q1Br4tmKZl3hTszcL2E1rkznVheUKVSliaWQqhd6bXcFFIu6EANdTY7AwNrcZ41WNf2TrstpdlrrWRxrMEsyDxy2nhyOk5brSOafPVsLUbxzPWRlAVWrt0LG5KpUJBvccLW65fc6Oc+Cxqi+HrK67H/hbN6t0jmX8N2+/Q+bHJNKlh/Fo61qDMz02OVrq5z2LDR7EmzcLcLnxzj5Kw64bEVVw9HOlKqyk0kJBCEg6jiJj1bgzCXZeH6r2feFmdaeup0i0zlheG8hlhIEjXONVyPBc5kwlzh6VKnUNwa1RvHPY+gLIlL2G++8xWLx9TE1DUq1arNY3ZiWUi2iop0BJ4AAa9huKuGr1QKniyyl8ittHjCAQigaBiCNg1l5zp5MTCMlG7VKwUGuQRlUsLqiLa5sNSxOtxpuFTESMtB4b8guoZRs7Kon/ANjjqCXuGHU4nd0bGGjXIbrBmUwOnrm0+z2jt/KUqp6vK/hr0W2N6Wm3Z8GVlS084hbbH1zwOBk5/v8Afy27mXheT6t6WKzJVZgKLhmUai2U65c1zpmGtx1Cdf5Hwb0aSUnqGqUBAdhZioJyZtTdgtgTvtfS9pyXmTzOXGo7tVy5Gy5QoY+SGuSTs1ta27bOqc3qFenSFKuwdqfRFUa+MTzWNySGtoQb6i9zeXrMCG6ef5rhukD6bq5ayoXQc2nRpj+UxpsR4HPbLzSeefPunhL0qVqlfeNqp8621vVHeRpe58IvOE4TDdA2qVSUQ+jpct2+SB1sJw931JNy51JGpJvqSTsF4r1i3st1U3LdAtX+tV7gMRxP5e+myu+UuUK2IcvXqMxPXrbhpoB1CwlqWA+Pynluv7K/mf8AxPOUbyq+r/c20yjzXcMw0m4aYgD5fl4a8kNQ7l9sGjfyzm9Xzf8AM9GoB8W/HSefG8B8d0Z7KCaZPbdi5beg+qqAAbNIni78FHb/AIgI58+3Yshewq5Q1h9APchZrmpiKVPF0alb+Wj3Y22GxysRwDZT3TvuGxCVFDoyurC6spDKRxBGhnEea3MKvi7Oz1KdL02Nr8fFqts3aTbtnV+bXNXD4IHxIcs3lu7szN1keSNm4CXrM0gclwvSOtQrVgWu7YEEDMDPjoDnoJ5xCz8x/LHKdPDUnrVDZVHeTuVRvJOkr4zFJSRqlRgqKLsx0AE4jz350nF1CRcUad8idm1mHpH3DTiT61aoYOa1t2Xc+21cOjR3jwH5lUa3LVTE40V6p89bAahVDjKg6hr2kk7532fMVIm9t4CnvJM+l8NXDorjYyhh2EXnhZSTinktv0kospijgECCAOEEfmq0REuLl0iIhEiIhEiIhEiIhEmuc5eQqldS1LGV6DAEjK5FLZ566G3YRNjiQRKkEgyP35aeq5R4OedWKxDvh2rZy1EvTdxnNJ7LYMdC4Oa9ib9HrmP8GmDqf/IHxz9KklUlbbSClNgx36uT3TxQxKcncqvplpJUcMAPMqDMtgPRVlPE5ZgKPLNVKlSrTORqoqBzvAqatY7j17pR62MOLYldiLufV67qGgNq02FuwBJ09JJHhlst28FvKp/aKtCmf/rur1KS7ktUFso3BlcXHFeJM6bXoh1ZWFwwII4gixmieDHmr+zg4mopV6i5UQ6FKZIJuNxYqptuAGwkidBlujIYJXN3kaRtLuqMjITxIABPmRrvqtb5C5LTBYPJVIYUy9R2te+Vi6tY7wqr2WnF+cPKbYjEVK7KAXN8o3WAUC+82UX679k6T4U+cNSii4ambeNRjUNrnxZ6OUX9LpXO0W65yW7eqR7JUtDxlTboF1HR6yvIdbKur5g+ZxGOZj0VGs+rdE3Vej87a36ZcAa2vrLent9Zswb1VbpLKuHOi2ng4ZLoLM8ueZ3+n1zjlELcub3NzlNPF4nDJYFQ6HPTGYMAdULC6kW0NvznWuRMea1FXZDTfUVKbaFHGjLY7t4O8EHfOd8xedeKW1OrTqVaCWXOlNmNIWAFyg1UDcdQNd1p1NLbRv38Zes4bEtJ81wV91K7q+G0BuIbt4cDntzAI8FyPwyYq+Jopup0i4HrM5H4LOfmyjVsvpN1zYufmNFfHVnBuqkIvCyXU27Tm9s1129b3X/p8mVKrsVQkLr7qomhYWYtYn1z4hU0A3e12/Su3vlVKXD7vQ/pngEcW+03wO+ezSHX7bzAq5SZIyAPnH095XpaYGxZN5S8V6zfHZJs/FTI1VgPLB3CPCF7m2+Dvm6uLrXqD+FSAZxuYnyEPVoSey2+ad40ecpX3r7Z1LwPY5LVqVxmOWovrLbK1uwlftT0otBeAVq76tjm2J7qJzyB4gEwTx5ea6VTQAAAWA0AGwdQmv47nrgKLFHxALDaFV6gB3glFIB6rzXPCrzgamFwtO48Yuaow0JQkqEHUSGv1C28zROQebuJxhPil6K6M7HKgNrgX1JNtwB3XtcS1UruDsLBJXLWC56T7P8AE2p+Bm0R4bzvoIJK3nnDjsLykVSnymtJFtem9N1zPfQ5nZATqLDXX3YjnnzNoYPCrUD1HqGoFF7BfIqNooHq7yZh+XOZuLwqeMdVamPKekxcL84FQwHXaw3kTEVOUarU0oM7GmhJVDqFJFtN4Ft2wXPGV3v1xtzhbuxWOer+CtE0g7tNyB4mSACZ4EDLkrjC8hVGw74tFzIjBagA1WwL5+tRcX4aHZe3ZeYmN8bgaHFF8WeN0OQX7QAe+UPB3yd4nA07ixqXqH6Qsv3AszHJvJVKhn8UmQO2cqPJzWAJVdi3AGg00lmhSww7iM1oL2vL4kupESGvJafw6EfUFZGIiWFpEiIhEiIhEicr/f8Axf8A2/s/5j9/8X/2/s/5lf4lnNav7Ys3P0/VdUicq/f7F8U+yI/f3F8U+yI+JYp+17Nz9F1WJyr9/cXxT7Ij9/MXxT7Ij4lnNR9sWbn6fqsb4WMHkxme2lVEa/Ei6EdwC+0TGcwK9JcbS8agYMQqltQrk/w2A45rAcM19onrnVzgrYrKHCnJ5OVRmuxtlvw0Xq1HCYHCuQ6kNY9FgeGtwfbaU3OHWY2r6hdDxbrpbSJguYYByOE4gx0agGMuIHBfS0TktLn9jCqnMmqq3krvEirz7xoBysminzV4S58SzmvmNO9aFR4Y2ZJgZbkxGvFazz05UfE4uqzNYKSqcFQOQB36k9ZMwFYtla2WXGJdmd3vcksdRvJubAWtqZbVF1pqT5TbhbzG65RxS6SvslOiKNnbSaIgBuWk6e/JealtfQGVvnkNr7rf+JUpNlJDeVn8nt6X57ZSU3y9S5f0n43Sr4rj8dvpd8HRRRxF+Jn7399OEZySSusc2OfeEpYWlTqBkemuUqEABK6ZgVNrnbu1JmK5yeEl6imnhkakp0NQkGrb1baU+25PYdZzqoi3HRT/APXm/m3dPTNbr7v6e+eprviFraVxWKnVNRzS7PciBvpA+cqob7ZRR+7N0vj1Z6I87f7recJKDS3xoZ47LduLnOEZFSy32zwQRs+O3+6ENuifoyrIWQDaoxaH5rypvJE8Fd696zzUqLZfRbyvwy+0xErHr8AIfqPQ8/DjwWxchc1MVirGmhyem90T22u30QZuPJXgxq0XWtTxniqqG65Kd16wwzjMp2EWGk0bA84sXR/l4iogGwZroOym9190yq+ELlAfLgjgaVMH2gW90sU3Um6gyudvWhe9UEMDXN+63DMeL491nfCzyXUz0sTtXIKbkA2DBmYEjWwOc+y19RNY5tc7K+CzBMrI5uyODa9rZgQbqbADeNNkv6vPzE1EyO2cMLMpTDspB2ggqLjumvV2S5IzC+4+LCf7gTF7+3jYVr7BbHiiLDbbHVgaEMka7lpMEbEHT57Jzk8INbE0GpeLWkjC1TKTUZgfNBIGUHYdCeyacu0ds85d5N+zZ7JVorcgjdb3m083vc7UyuqsdkoWJhLG4W6mTw1JJJ08YGfFd25hVGbAYfNtCkdyuyr90CbFOM4DnRi6VJKa17BFC2yUjsGu1byueemP/wCuPsU/7JcbaGgAL41Wv2zPqOe1roJJGQ0JniuvxOQfvnj/APrj7FL+yR++eO/1H3KX/HJ+KZzXl9tUPuu+X9y7BE4/++WO/wBR9yl/xzz++WO/1H3KX/HHxTeBT7bofdd6D+5diic55rc4MTV8Z4ysWy5LdCmLXzX2IOAkz0bVa4Sr1G1sqsDwDn4eHFaLIkyJrVxSSYiSiSG/MSZELFwkEKhQp2Yk6gMw+kTcn8ftzH8oUNQco01HYxJt7Oj9GZemoXZ5zM30mN2lvjqVwTwGvYAb+w695kLvLm6Rg311tXs06gbTjZoAAZygOHgMTjsrDDYptLCw33ub/Rvp27Zd1MQHU7tMrDtIDWttXYLzHVKZB26+cvpQji2XZwUm2zhxkyu7vPo1ZbZaGWjCG1Wva6dnw4EtcNDOk94cxquw29L2SliRsJ8lWvl9LQyp4wet9lpB10GyQMiuirND2FodPJeV6PlHpHU+reVrTyw0YDg0tK7B1vpYBWUcdfK+OqSBKwfV+GbETlI+sn9PJXIHT9UL97Mfjvg+V8eaL/iwnpm1IHS4/HGeFcXY/Nt9n/EhZvLQQJ1d9D+UeKqWlOgej3z30hw+PxlHDm4Pzn6X0mtl7o2WTqg61vGD9FWq07i3skLU0DelKlHC5tl77tTcC4BZvbIbDZL3Ouuuuisx8k7xpGyp/HURbfhw5oqFskTtsds4nLhB0Xm7eqPfKBTp9e0r5raZvy+NZWvw9p/tnmpTU9Fu70vbJaYXvXp9YAW7Gczry/YjbNU6FTLodmnc1iWzS5lvWpmzedx3ebl9slKtjlP0dLaf2/h2STnmFhQqmierfkNp/f8AjRVYlRF1Fwdd5NgO07peUsGNuYW4p0vvMLe6YQq169IbBdhi0vIJ0AaST4ZR88t1ZJTJ6huNifwmRwuFAsTt4bxs6R00Okr06IG7X0vOHaw2T3JAXy/pD00rXjTNns7SymdZ7zhwMZNHEAkncxkokxElcOkREIkREIto5kD+b9X+uI5kfK/V/riWqfdC6a7f4Zvn7lavIkyJUXMqYiJKJERCJFoiFBE5FY7G4e2o2fnqcuzQcJZmZx0BBBFwdCJjcRh7MBxN79RvYnr0mJC+w9C+kptbBYLSf9Ro7JP8zRsfxNH/ACGesq2uZ5bXfrMlTwgy7TqMx8kW90xrcCCfWsLa/hAC6a77/sd5vqU7OScEYpEDMkCDvocxlpxCo12N1Xbfu8q6j84anfMFawK5S3o5dmUSvgsHnOa2UNuN9VXLbTzbaab7y5GEOay2sM3qjKr5b7DxGzjMpjReL7xsjK1Rtd8YWh7tYa0nCJOxdsD2jsNCbRjpp6v9ULRyl3N7MeHk9EZvfMmmAXzj3C34ka+6XNOiBsVb+kBc/aPSkBc7eHTy76bos7HVCND3W7jftb/djmsTRw7WXRr6eaxHtAlAMANNnUrMNelumaxtwmgNiSCNdhQm32gB3zEvUttPdC3HRm97VelB1pqhjWA4WgSTkATJJ5iIE/JVcLXs19gGh6xpfu/zMn0XGy/b5Qa3Vouh2iYMG23tl3hK9rG9xpqDtFxcAbL2iVS6SdGhbwbXZyW2hokRlijQZZh2zXDPQHLSricHvUm2+6gt3WHS3bpaCjbYb8TqD38Jl0rKdh19Hzvs7ZL0lbylB+coP4xAXKXd02t1gPU26mahH3pa8eMjPzAPMrCqDtsddnZIvmuNqzMthlO72XHuBlM4BLWsbdpPuYxAW/Z/5DsMAOpVN57h/wC30WITZmVsvb5OWXGGxLG3HeNvu39u2e8bhLdKxYG2wgW0JsQBY7NstqROcdYH3f8A2hdPZLRYr3swc0B9J2RBG/MHIEZacZnRZjD4kMFv0b7LgqrfNDSrKdOkGRQwuMq7dmwW75UhfCbw6nr3Ck3DDnAiZGRiWzmAeBJjYxkJiIkqikREIkREIto5kfK/V/qiOY/yv1f64lqmOyF012/wzfP3K1eRJkSouZUxESUSIiESRExtbFMx8lxbzNFb5za5vZ79skCVdsNhNrqYOsYwbue4NH5k8AAfIZrJSlUo5jdhYAKOtgLsewG9u6WuEruotUBJ10IbMOAU1T010PxpLz9pT01v2jN7Nt+qQtk6x3hdNXHSGLEC1r2doEHI4SJh0ZQe0JyG68Yx7KRszXX2gj85iWBZiCdpux7T5MuMVVLmw67A3sBc6ZdkuOT8IAF4eaPYcxuNBw9vCQu8u2mzoxdJq2qMdTMNEgk4Rhp8DGZc6MsxnkTXwtG2p8o+7gs9rSAZiOGzt8o99l9nXPZkRK+X2i32ivVq1qju1U73MSDEcBAgcghgGWWIp7Q9VLt5IbRdptZWbU9e2UsL0GYjLq2oDF1sFUX6OqHo7SN8yhbOy3NStNn6ynaW9Z91zXNaTwFV0NLuUa77rJOgIIOoOhlk+AA8kDvOUntsLNK64xdmt+HR/G9vfKdbHIBpcHdmKBT3gzHNXrpodIbvqE2SjUbJghzOySOOKB/VI8Tvj6lMqekcvo30v1ltkt8yk7M2Y9Er6PpZpXesXN1XMNhzCwHCw4a/5l1hMDvPeePYpFgPjWF9RfeXwVjbWvN7Gu3wgkE8GAklxjhkMyYAXnC0WOlzbaL6CwI2lRMhRDDQlSNxuxbsJO3tnpKYUWsbfG2eMRiVTyjqdFGlyeAzSQvld93/AGi+q4pspjBoxsAu8cUSCdwDhjjEqpJlhSx7F7WVhbXLrbUW1O07dw2S9WoGF73HVEQtReF0Wy78JtNPCDoZBB5YgSJ5TPBeMWOi19yse8aiYelbxos2bytvasvsfXOwW097agju/HslrhKbFrkbh16XDP8A02hfS+iVnqXZdNS12jJrpqAfha3U8C4DLlhWWoeQvUq+5Z6kCepC+Rlznkudqcz4nMpERJUJERCJERCLaOY/yv1f64jmP8r9X+uJap90ZLprt/hm+fuVq8iTIlRcypiIkokREIqOKDkBU3npHMVsltcpXW5OUe3ZLGrhCMl2QDNprbd0lVCDnNv990yglu+FLMSzsPNAU2sOBJ1262Ftu+0yBhb+5b5q2KabavVsObi1jXPdsAC7QjUZhrczBJg0AKbLlXMy8AANRxBsPdKboTszZeGUk/SKLYbtJeU8Go1srdbDN+MrKgAsAoHBdJjkt4zpgLIS6zCo9x/+pYB4ltNrZPi4xxWOTCnyuHbmO++W2ov5u/8AG4XFkXuD0fKyjKfssfzl1PD0lPlIG+cA34xkFrbR0lbeDpvKztqa4S1xY5oOwInEN4dOcyTovSMCLg3BgzzTpAXsSb3NrgjuHxsE9yAubrCmHkUiS3aQAY5gEifA565aKxq4XonO73a+YKECnfpnB2C9tRslKrVXYGvwzGn7soMyTqDtCm2o6jxjL2+0yTnqumsPSqtZ2BtQPftHWYGhugaGtYYAHPyWIXCtwJ9ECmygfSA1k/sh3pe3Wn+8y4kxHFXndP7wAw06dMN4HG4+pePZWFEAaujE7rqoS/a1gW04tLylVDXtfTaDbMewedJZd08U6Cg3CIDrqFynXbqIK0FvvKjby6tXa/rToQ+WeGF4Lmjk15AOYA0XuWuJrMWyKDsDErt1LADOdBs7dRLqTAMLXWS0Cz1RVLGvjZwls8xlMcNOPBYulTbUuh2nLdWZrbukBf708O5BtmObqJQjfbbe2m/hLjE4R6hbNlF2IQG7WUaBhrZTv9ndcLhR63zdFHuF/fJdxXfWPpHYrKwGr1eY7VOlSfHh2qjaUjLtYTuBxVhSoljroeBvprqS3DW/XKiqUI/zbLfWzcNJkaaBRYBQPVEipTDCx16/9iNkxgLwq9OTXrOp1aINmc3CWfzRxDshP4RkBEEHNeaWIU7CAdwa1+4Db3T3KJwiHaSe2w/AC8q00ygC7G29vKhchb2WDHNic+OD2iR/U1xnhBAO4leoiJK1yREQiREQi2jmT8r9X+qI5kH+d9X+uJZp90LpbuP+2b5+5WryJMiVVzSmIiSiREQiREQiREQiREQiREQiREQiREQiREQiREQiiTEQiREQiREQiREQiREQiREQi2jmP8r9X+uJHMj5b6v9cS1TPZC6W7jFmb5+5WsRJiUwVzcKIkxJkpCiJMRJSFESYiSkKIkxElIURJiJKQoiTESUhREmIkpCiJMRJSFESYiSkKIkxElIURJiJKQoiTESUhREmIkpCiJMRJSFESYiSkKIkxElIWzcx/lvq/1xESxT7oXS3eP9u3z9yv/Z"></h2></div>
      <table>
        <thead>
          <tr>
            <th>
        <div class="card-body">
          <h4 class="card-title">Historial</h4>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Ganados
              <span class="badge bg-primary rounded-pill">0</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Goles en mundiales
              <span class="badge bg-primary rounded-pill">5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Partidos Ganados
              <span class="badge bg-primary rounded-pill">2</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Jugados
              <span class="badge bg-primary rounded-pill">1</span>
            </li>
          </ul>
        </div>
        </th>
        <th>
          <h4 class="card-title">Jugadores</h4>
          <ol class="list-group">
          <table class="jugadores">
            <tr>
              <th>
                <li>Gareth Bale</li>
                <li>Aaron Ramsey</li>
                <li>Daniel James</li>
                <li>Wayne Hennessey</li>
                <li>Brennan Johnson</li>
                <li>Neco Williams</li>
                <li>Ethan Ampadu</li>
                <li>Danny Ward</li>
                <li>Kieffer Moore</li>
              </th>
              <th>
                <li>Harry Wilson</li>
                <li>Joe Rodon</li>
                <li>Ben Davies</li>
                <li>Joe Allen</li>
                <li>Chris Gunter</li>
                <li>Connor Roberts</li>
                <li>Joe Morrel</li>
                <li>Ben Cabango</li>
                <li>Chris Mepham</li>
              </th>
            </tr>
          </table>
          </ol>
        </th>
        </tr>
        </thead>
      </table>
      </div>
      <div class="card text-white bg-success grupos" >
      <div class="card-header"><h2>Argentina <img src="data:image/png;base64,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"></h2></div>
      <table>
        <thead>
          <tr>
            <th>
        <div class="card-body">
          <h4 class="card-title">Historial</h4>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Ganados
              <span class="badge bg-primary rounded-pill">2</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Goles en mundiales
              <span class="badge bg-primary rounded-pill">137</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Partidos Ganados
              <span class="badge bg-primary rounded-pill">43</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Jugados
              <span class="badge bg-primary rounded-pill">18</span>
            </li>
          </ul>
        </div>
        </th>
        <th>
          <h4 class="card-title">Jugadores</h4>
          <ol class="list-group">
          <table class="jugadores">
            <tr>
              <th>
                <li>Lionel Messi</li>
                <li>Paulo Dybala</li>
                <li>Damián Emiliano</li>
                <li>Julián Álvarez</li>
                <li>Lisandro Martinez</li>
                <li>Rodrigo De Paul</li>
                <li>Ángel Di Maria</li>
                <li>Lautaro Martinez</li>
                <li>Enzo Fernandez</li>
              </th>
              <th>
                <li>Cristian Gabriel Romero</li>
                <li>Alexis Mac Allister</li>
                <li>Thiago Almada</li>
                <li>Alejandro Darío Gómez</li>
                <li>Leandro Paredes</li>
                <li>Nahuel Molina</li>
                <li>Gerónimo Rulli</li>
                <li>Nicolás Otamendi</li>
                <li>Guido Rodríguez</li>
              </th>
            </tr>
          </table>
          </ol>
        </th>
        </tr>
        </thead>
      </table>
      </div>
      <div class="card text-white bg-success grupos" >
      <div class="card-header"><h2>Arabia Saudita <img src="data:image/png;base64,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"></h2></div>
      <table>
        <thead>
          <tr>
            <th>
        <div class="card-body">
          <h4 class="card-title">Historial</h4>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Ganados
              <span class="badge bg-primary rounded-pill">0</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Goles en mundiales
              <span class="badge bg-primary rounded-pill">11</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Partidos Ganados
              <span class="badge bg-primary rounded-pill">6</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Jugados
              <span class="badge bg-primary rounded-pill">4</span>
            </li>
          </ul>
        </div>
        </th>
        <th>
          <h4 class="card-title">Jugadores</h4>
          <ol class="list-group">
          <table class="jugadores">
            <tr>
              <th>
                <li>Salem Al-Dawsari</li>
                <li>Yasir Al-Shahrani</li>
                <li>Salman Al-Faraj</li>
                <li>Mohammed Al-Owais</li>
                <li>Saleh Al-Shehri</li>
                <li>Firas Al-Buraikan</li>
                <li>Riyadh Sharahili</li>
                <li>Nawaf Al-Aquidi</li>
                <li>Nawaf Al Abed</li>
              </th>
              <th>
                <li>Mohamed Kanno</li>
                <li>Haitham Asiri</li>
                <li>Sultan Al-Ghanam</li>
                <li>Ali Al-Bulaihi</li>
                <li>Hassan Tambakti</li>
                <li>Sami Al-Najei</li>
                <li>Abdulrahman Al-Aboud</li>
                <li>Abdullah Otayf</li>
                <li>Hattan Bahebri</li>
              </th>
            </tr>
          </table>
          </ol>
        </th>
        </tr>
        </thead>
      </table>
      </div>
      <div class="card text-white bg-success grupos" >
      <div class="card-header"><h2>Mexico  <img src="data:image/png;base64,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"></h2></div>
      <table>
        <thead>
          <tr>
            <th>
        <div class="card-body">
          <h4 class="card-title">Historial</h4>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Ganados
              <span class="badge bg-primary rounded-pill">0</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Goles en mundiales
              <span class="badge bg-primary rounded-pill">60</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Partidos Ganados
              <span class="badge bg-primary rounded-pill">16</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Jugados
              <span class="badge bg-primary rounded-pill">15</span>
            </li>
          </ul>
        </div>
        </th>
        <th>
          <h4 class="card-title">Jugadores</h4>
          <ol class="list-group">
          <table class="jugadores">
            <tr>
              <th>
                <li>Almoez Ali</li>
                <li>Hector Herrera</li>
                <li>Kevin Alvarez</li>
                <li>Hirving Al-Haidos</li>
                <li>Jorge Sanchez</li>
                <li>Henry Martin</li>
                <li>Bassam Al-Rawi</li>
                <li>Abdulaziz Hatem</li>
                <li>Boualem Khoukhi</li>
              </th>
              <th>
                <li>Luis Gerardo Chavez</li>
                <li>Erick Gutiérrez</li>
                <li>Meshaal Barsham</li>
                <li>Ismaeel Mohammad</li>
                <li>Tarek Salman</li>
                <li>Orbelín Pineda</li>
                <li>Assim Madibo</li>
                <li>Gerardo Arteaga</li>
                <li>Uriel Antuna</li>
              </th>
            </tr>
          </table>
          </ol>
        </th>
        </tr>
        </thead>
      </table>
      </div>
      <div class="card text-white bg-success grupos" >
      <div class="card-header"><h2>Polonia  <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARsAAACyCAMAAABFl5uBAAAALVBMVEX////bHygAAADeHyjJx8fYAAC1Hii3HinMysrKzs6zAAzbAADhHyiWICainp4KZ1EhAAABnElEQVR4nO3QOVKFUAAAQRQE/nr/42o9jbAmhqD7BFMzfVKmswMu7OfNe1842t/jzT7x3z7eLGdnXNLiTfKmedO8ad40b5o3zZvmTfOmedO8ad40b5o3zZvmTfOmedO8ad40b5o3zZvmTfOmedO8ad40b5o3zZvmTfOmedO8ad40b5o3zZvmTfOmedO8ad40b5o3zZvmTfOmedO8ad40b5o3zZvmTfOmedO8ad40b5o3zZvmTfOmedO8ad40b5o3zZvmTfOmedO8ad40b5o3zZvmTfOmedN+39zOzrik23hzf3xx9LiPN+v8wdG8elO8ad40b5o3zZvmTfOmedO8ad40b5o3zZvmTfOmedO8ad40b5o3zZvmTfOmedO8ad40b5o3zZvmTfOmedO8ad40b5o3zZvmTfOmedO8ad40b5o3zZvmTfOmedO8ad40b5o3zZvmTfOmedO8ad40b5o3zZvmTfOmedO8ad40b5o3zZvmTfOmedO8ad40b5o3zZvmTfOmedO8ad60vzfbc+bouY03r23laHuNNwRv2jc6nYUpuM1osgAAAABJRU5ErkJggg=="></h2></div>
      <table>
        <thead>
          <tr>
            <th>
        <div class="card-body">
          <h4 class="card-title">Historial</h4>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Ganados
              <span class="badge bg-primary rounded-pill">0</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Goles en mundiales
              <span class="badge bg-primary rounded-pill">46</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Partidos Ganados
              <span class="badge bg-primary rounded-pill">11</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Jugados
              <span class="badge bg-primary rounded-pill">9</span>
            </li>
          </ul>
        </div>
        </th>
        <th>
          <h4 class="card-title">Jugadores</h4>
          <ol class="list-group">
          <table class="jugadores">
            <tr>
              <th>
                <li>Enner Valencia</li>
                <li>Robert Lewandowski</li>
                <li>Matty Cash</li>
                <li>Piero Hincapié</li>
                <li>Jeremy Sarmiento</li>
                <li>Piotr Zielinski</li>
                <li>Romario Ibarra</li>
                <li>Michael Estrada</li>
                <li>Karol Swidersk</li>
              </th>
              <th>
                <li>Alexander Dominguez</li>
                <li>Jackson Porozo</li>
                <li>Alan Franco Palma</li>
                <li>Szymon Zurkowski</li>
                <li>THernan Galíndez</li>
                <li>Jhegson Méndez</li>
                <li>Jan Bednarek</li>
                <li>Robert Arboleda</li>
                <li>Angelo Preciado</li>
              </th>
            </tr>
          </table>
          </ol>
        </th>
        </tr>
        </thead>
      </table>
      </div>
      <div class="card text-white bg-success grupos" >
      <div class="card-header"><h2>Francia <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARMAAAC3CAMAAAAGjUrGAAAAFVBMVEX///8AH5r/IjgADZd2hML/ZWz/GDGBDZKsAAAA/klEQVR4nO3QSQ0AIAADsHH6l4yKPUhaCc2oWTs9586aOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHy4ckD5KrN4eD2boIAAAAASUVORK5CYII="></h2></div>
      <table>
        <thead>
          <tr>
            <th>
        <div class="card-body">
          <h4 class="card-title">Historial</h4>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Ganados
              <span class="badge bg-primary rounded-pill">2</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Goles en mundiales
              <span class="badge bg-primary rounded-pill">120</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Partidos Ganados
              <span class="badge bg-primary rounded-pill">66</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Jugados
              <span class="badge bg-primary rounded-pill">34</span>
            </li>
          </ul>
        </div>
        </th>
        <th>
          <h4 class="card-title">Jugadores</h4>
          <ol class="list-group">
          <table class="jugadores">
            <tr>
              <th>
                <li>Kylian Mbappé</li>
                <li>Édouard Mendy</li>
                <li>Idrissa Gana</li>
                <li>Antoine Griezmann</li>
                <li>Hugo Lloris</li>
                <li>Boulaye Día</li>
                <li>Nampalys Mendy</li>
                <li>Ousmane Dembélé</li>
                <li>Lucas Hernandez</li>
              </th>
              <th>
                <li>Bamba Dieng</li>
                <li>Formose Mendy</li>
                <li>Pape Gueye</li>
                <li>Ismail Jakobs</li>
                <li>Adrien Rabiot</li>
                <li>Pape Matar Sarr</li>
                <li>Lliman Ndiaye</li>
                <li>Fodé Ballo-Toure</li>
                <li>Nicolas Jackson</li>
              </th>
            </tr>
          </table>
          </ol>
        </th>
        </tr>
        </thead>
      </table>
      </div>
      <div class="card text-white bg-success grupos" >
      <div class="card-header"><h2>Australia <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAT4AAACfCAMAAABX0UX9AAAAz1BMVEUBIWn////kACsAAF0AG2fjACDiAATiAAD75ufrcHvjABXzsbbU2OK+wtIACWKYn7gAAGL619sAHmjjAB4AAFkuP3kABWHqVWYAF2WUFU7pACilqb0rPXjvACTsbHrxmKL29/oAEWMAE2TP09+3vM02Rn0kN3VMWYhyfJ8AAFWMk6/m6fAAAFA9TIDd4Ojs7vNncZhXY48PKm58haXxn6aeeJMbMHDqXGzteIXpSl350NX74+bvipX3vcWfpr3/7+7zAAqcYIORADahhqGlb40Ik2RxAAAKaElEQVR4nO2de5+ithqApS8z7k4dZDNo6WD3gKA4OiJq6+ns9sz2XL7/ZzoJiHchIUEymueP/rrbEpLHhFxIXhr//KIdEAxBb9ADLXLRzw8/7fLwM/nLFjCko8MwIBd9+vNunchd8+0LSwp1cNf85UjgY49BoBh9OvQeE3lfm3eZPJIxq0yZLkiWz9ICReg7J+8j6OMUyK/vvLyPoY9LIK++jbzPzafjzMiu7+FEnpkE8unLlye/vh9n8k0tkEdfkTz59eXlnUpgeX3F8j6CvkKBnVyBZfXRyJNf33BdhvuyNbCcPjp5jz2WAXwdbMtRUmAZfbTymKY/NUEp8FwTZtd3TfIIXAJZ9enQuSp5BA6BbPquUR6htEAWfbXLsytKt7FbNiaB9Poo5eWPk7iw5xX6KyeQVl/JX0co4Fa7fliijHT6ZJCHK59WafVrlCgnjb665aFUmhlogZn8m42quVGDuazF+uqW10C9GAycuOVqLp4F6gbEver8sZW3SF/t8pI8ztpDMEN8o9CEXnvG9BaGHYYy5+uTQR6ufmRlpDUir6KCEckvqrDyJVCXO1efFPIwxmjvjiOj4vs1qAUu/LP6/IUc8jCWv3NL/zLLYHTjXPesPlcWebj5InebYYFN18gFXlbBWuDDU8J98+3boYNz+jDfvzbv0ysfTsgLVi+QnwFhxTS31c83xbXddhFjJ61E/9jw17+o9X37a3vZcbV1xkU3fxdTUBuW7u6NlyBq9HyiJpXhXO3jRcRTCkEYHSQbhSCmAQsqpsT60NA/kbA/FOJPUDEl1tdYDKfxcuxkNTByxst4OlwISPkm9DWQbnuG5ayTdCzDs3VBne8nMfz+tKfv6Xcxyf4QN7kC0oTJEN8XOWG7F8O+PexPTLJ/iysoTPBA6RUPwyYi9f0kNb+JKyjgMbrVsPA8QOljBw3TuRqevYnpc1PqFpSPOH12HKXdkBXFAlec6xaUjzh9euillQ55ocBZdt2C8hH47NNP/Bs/dQvKR6C+aqhbUD5KHxdKHxdKHxdKHxdKHxdKHxfS67sTw/NBuZ/FJPtweSFsE+LPYnjb9/f8JijdfkWSzoIWTP4ErQpLvdrMgvE+YJnUCSrm1eiDSZvl5aigYl6LPrTSIpblVEHF/Pj6kEkarTfWtKT36APVq7jiErg0/5VC3w/GlC+rzwiCAXiI7Bcbe7oJcYtqVdUsYL3JZZcvvzysaTa/fqfW9+2teZ9d+PkT+Ztg8VJ0+8q1ZSBb06KxbeBs+a8Dx9Ue+V+JZFus9uVlR+af7lMLlPr2Lm2ml15qgxUFXkwy1Mr+4Rq8b0To5AXRWX3RiYorr0DYK2zs8aVGJ++x85qzPfKVLgk5BCJ751n8yPfQpZUHeu7mXPpk+IouxD/Emzy6Fs/bOJZSF+ysv4hAfc4/udNhNNtm0e+U3sHGVuLCcx06DKoWCK0pZ/1DMGjtZ9ExSj39iuR9PSgtxamiygWCxjTTOgY1jno5zV2y+yuQ1zyUR3mmraomnD6h+rE2SR/1qOQPgN59f+LudB2uG/k+63YEdnnUJyoLK/X3EgJRDGSqRYYcQ51MtDpldxB4gDHCdcYmpkH+zGYvv4R3J+UxnOetQKDxrjkd8ABfNwYwR77Gtlp3gLfpetmHLYXyzpSO4TS5eIGAx+zRiJQ66gUu72DXaOOElmQcy/orlKt5SQlYYhmw9kuF2e7sJcU5TzWDpBbjArEd+y0vjzmSBqVA6vB37Z10XI9vngq+1gY8hok0lk43iwJRRl6JOC6UvTClQGvnyAbvPBVch+QYmTOnS3sNn7xSUYQECrSt8SaJWZ93fctZn99uOLTDSE55JWNY5f9mOwLzM49gundeqA18k7es9iLqR1/OmtJGXm41KBlBrUBgtpyV68+wD3M/m1uXXb3hqnmE0vH7qATmDcDs8eHl5J5M7xm54ZTHFT2SQmCevkUYj8ZOkE313cfgfTmad6o+Z78HpzzO2KVFAv/MfZbptud1Yb6+Lno1Da9fYYiRU+TJoxo7cEbOzRdIscclmSpMtIKGXhWc8gTEbc4TSLHDikwVZrDULhAe4wSc8oREDT8vkEIfvr9r64C7kbDiAEun4JQnKGb9OYE0+mYuWfbDs7cR56SjDNqXt+ZvzykPn3+wytvou3/e5Z75iwmnBf5dfKGpDZNaZwXUU4Ut3M393//5dcN/AwfDGHzQG5OL/vh1nz/IX46ZqgMW6BwQ/K+wPaJOuO6dgf2sms59OnD3lv0uxmAddnrkqsMBRpIUa2PSje4BFEK26/PM9hASerb31vDGtXQ31wHSrQmeVIuKanBb6GZjQAaLeJJnKoGseMudHr7qiJxXyGaqrM16NYwXPzxGJ93S0rJV3SvD+i0T7wuSWwXSdX7nchuArwnUx9PTaUtsVJzbwY7dOdjWUlupcUsJ0NQjfYaxuuzq/tWwtlbHIquiGtRPyQNSDxIeoOJg8NeNPtAu+5L/ujDeNUGRlm8Sa5JtcVewo/fwHFL67yJKS7JfgvOAyg2TrGEwhQK4bfp7ozy0SFaA9qfg9Bs1b4+lvXvyxku3K+6+HLfBG10+Wx8Er609zqG7/8mx7dYMZEAYaG21mnsOImz23oPkPAXKNrslE1/kwao9Y9vncmvoq7S+LQ3ciDfv/pYebrTkgBlhqMYx5+lmu7OD0HrJPovhv1hhtuV9rN4k5AGbM9iz7T738eZUu2q6+ejDw015e6imWwCcOlyxqYaq6RZhtc7aU023mJzmq5ouBea55quaLhXW4VfQUiK18keFjU7q09ViAQUITn5GjnxITtCX+K4ZD5yT8ggOqOWCXHRrlBdB0x1d+HTyh+I4btZx/zGQqgXL9Dg2vOO4WccEnjwvP2yRH8niw4ZlsbsEcV/D5QVcWeZBXjihtKdpk/DioedPYs9lOYOgh340oYi7jHGjli/y02glWL+vMgMtSGdCFz6yf4wOAJa5CuckGoN/3IO0/OB9PJpPG2Dh/7Nme50YyElHy9VcPBXSuxD36vaXgGzbM7omvM4O7M1ewex6fWHfweUDfLe9ApOE5wtNGL67Qj8yy0/3qPZRB4G6BCQkuNYakQG+MyItpfbGu4c+PdIn10a1bWDDBMmOwvTjI32xHJ1thrV70p8zprVwjGzJb9bPhjNsB/ErB/W3wwS3L1XTxSOC9bLBDPXRuhOR7KyTYWyXhXxDnnlQAqR5cxd2w16kP7NUfdvhDEmeeVACJE3WTSKC2MPEn0RHxRCEh+vhUSjTSoaZ5KmT9hb9QfInafSh1VGAGNJ9yHOULY1fO806Cy8ZxsizSXc1DeNl28lqYOS0l3E4XdWdrQ02OdgebrvaJPq2JJNzgm73PcPKVsUdi8Spk+bHTfdFznd7s+5cupFL2r1FsnVqhK6jxfvjFDPW6GP3XgbSvQWvgVSdWgq0lodZgqVsOzSAzDYQmX1IljH87DuuaV2Jnn0ENExbLW7D3HG/RHPKlFz2GnYcJUM9BJE8Lzw+Dnq4XnpEes1L3x+TzcJt2S/KKBQKhUKhUCgUCoVCoVAoFNLzfxPdLHVZi4PpAAAAAElFTkSuQmCC"></h2></div>
      <table>
        <thead>
          <tr>
            <th>
        <div class="card-body">
          <h4 class="card-title">Historial</h4>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Ganados
              <span class="badge bg-primary rounded-pill">0</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Goles en mundiales
              <span class="badge bg-primary rounded-pill">13</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Partidos Ganados
              <span class="badge bg-primary rounded-pill">4</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Jugados
              <span class="badge bg-primary rounded-pill">6</span>
            </li>
          </ul>
        </div>
        </th>
        <th>
          <h4 class="card-title">Jugadores</h4>
          <ol class="list-group">
          <table class="jugadores">
            <tr>
              <th>
                <li>Awer Mabil</li>
                <li>Memphis Depay</li>
                <li>Frenkie Ryan</li>
                <li>Ajdin Hrustic</li>
                <li>Mitchell Duke</li>
                <li>Harry Souttar</li>
                <li>Vincent Janssen</li>
                <li>Andries Noppert</li>
                <li>Remko Pasveer</li>
              </th>
              <th>
                <li>Jason Cummings</li>
                <li>Thomas Deng</li>
                <li>Tyrell Malacia</li>
                <li>Mathew Leckie</li>
                <li>Davy Klaassen</li>
                <li>Jamie Maclaren</li>
                <li>Steven Berghuis</li>
                <li>Martin Boyle</li>
                <li>Milos Degenerek</li>
              </th>
            </tr>
          </table>
          </ol>
        </th>
        </tr>
        </thead>
      </table>
      </div>
      <div class="card text-white bg-success grupos" >
      <div class="card-header"><h2>Dinamarca <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQIAAADDCAMAAABeUu/HAAAALVBMVEXIEC7////GACDgkpnHACTZdX/ptLnFABrFABHYcHrosbfEAADfj5fy1NfejJThLNbvAAABYklEQVR4nO3ay01DQRREwdM2mD/5hwsJ4I0fEhZ1EuhRbe/U4T087ucuT8cP/r0QIEAQghCEIAQhCEEIQhCCEIQgBCEIQQhCEIIQhCAEIQhBCEIQghCEIAQhCEEIQhCCEIQgBCEIQQhCEIIQhCAEIQhBCEIQghCEIAQhCEEIQhCCEIQgBCEIQQhCEIIQhCAEIQhBCEIQghCEIAQh6A4JTof3/HKF4PXt+MEb63x475crBB+fxw/eWFee+09CgADBEAzBEAzBEAzBEAzBEAzBEAzBEAzBEAzBEAzBEAzBEAzBEHznpnh2WT79wrn+7v4XHB8CBAhCEIIQhCAEIQhBCEIQghCEIAQhCEEIQhCCEIQgBCEIQQhCEIIQhCAEIQhBCEIQghCEIAQhCEEIQhCCEIQgBCEIQQhCEIIQhCAEIQhBCEIQghCEIAQhCEEIQhCCEIQgBCEIQQhCEIIQhCAE3R/BF+GGRIscpa+NAAAAAElFTkSuQmCC"></h2></div>
      <table>
        <thead>
          <tr>
            <th>
        <div class="card-body">
          <h4 class="card-title">Historial</h4>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Ganados
              <span class="badge bg-primary rounded-pill">0</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Goles en mundiales
              <span class="badge bg-primary rounded-pill">11</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Partidos Ganados
              <span class="badge bg-primary rounded-pill">3</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Jugados
              <span class="badge bg-primary rounded-pill">5</span>
            </li>
          </ul>
        </div>
        </th>
        <th>
          <h4 class="card-title">Jugadores</h4>
          <ol class="list-group">
          <table class="jugadores">
            <tr>
              <th>
                <li>Medhi Taremi</li>
                <li>Sardar Azmoun</li>
                <li>Alireza Beiranvand</li>
                <li>Alireza Jahanbakhsh</li>
                <li>Ramin Rezaeian</li>
                <li>Ehsan Hajsafi</li>
                <li>Ali Karimi</li>
                <li>Saeid Ezatolahi</li>
                <li>Amir Abedzadeh</li>
              </th>
              <th>
                <li>Karim Ansarifard</li>
                <li>Shoja Khalilzadeh</li>
                <li>Saman Ghoddos</li>
                <li>Vahid Amiri</li>
                <li>Hossein Hosseini</li>
                <li>Rouzbeh Cheshmi</li>
                <li>Mehdi Torabi</li>
                <li>Sadegh Moharrami</li>
                <li>Ahmad Nourollahi</li>
              </th>
            </tr>
          </table>
          </ol>
        </th>
        </tr>
        </thead>
      </table>
      </div>
      <div class="card text-white bg-success grupos" >
      <div class="card-header"><h2>Tunez <img src="data:image/png;base64,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"></h2></div>
      <table>
        <thead>
          <tr>
            <th>
        <div class="card-body">
          <h4 class="card-title">Historial</h4>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Ganados
              <span class="badge bg-primary rounded-pill">0</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Goles en mundiales
              <span class="badge bg-primary rounded-pill">13</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Partidos Ganados
              <span class="badge bg-primary rounded-pill">6</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Jugados
              <span class="badge bg-primary rounded-pill">6</span>
            </li>
          </ul>
        </div>
        </th>
        <th>
          <h4 class="card-title">Jugadores</h4>
          <ol class="list-group">
          <table class="jugadores">
            <tr>
              <th>
                <li>Christian Pulisic</li>
                <li>Giovanni Reyna</li>
                <li>Sergiño Dest</li>
                <li>Brenden Aaronson</li>
                <li>Weston McKennie</li>
                <li>Timothy Weah</li>
                <li>Matt Turner</li>
                <li>Yunus Musah</li>
                <li>John Sargeant</li>
              </th>
              <th>
                <li>Tyler Adams</li>
                <li>Antonee Robinson</li>
                <li>Jesús Ferreira</li>
                <li>Walker Zimmerman</li>
                <li>Haji Wright</li>
                <li>Tim Ream</li>
                <li>Luca de la Torre</li>
                <li>Joe Scally</li>
                <li>Aaron Long</li>
              </th>
            </tr>
          </table>
          </ol>
        </th>
        </tr>
        </thead>
      </table>
      </div>
      <div class="card text-white bg-success grupos" >
      <div class="card-header"><h2>España <img src="data:image/png;base64,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"></h2></div>
      <table>
        <thead>
          <tr>
            <th>
        <div class="card-body">
          <h4 class="card-title">Historial</h4>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Ganados
              <span class="badge bg-primary rounded-pill">1</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Goles en mundiales
              <span class="badge bg-primary rounded-pill">99</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Partidos Ganados
              <span class="badge bg-primary rounded-pill">31</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Jugados
              <span class="badge bg-primary rounded-pill">64</span>
            </li>
          </ul>
        </div>
        </th>
        <th>
          <h4 class="card-title">Jugadores</h4>
          <ol class="list-group">
          <table class="jugadores">
            <tr>
              <th>
                <li>Gavi</li>
                <li>Pedri</li>
                <li>Sergio Busquets</li>
                <li>Nico Williams</li>
                <li>Brennan Johnson</li>
                <li>Marco Asensio</li>
                <li>Ethan Ampadu</li>
                <li>Unai Simón</li>
                <li>Rodrigo Hernández</li>
              </th>
              <th>
                <li>Jordi Alba</li>
                <li>Pablo Sarabia</li>
                <li>Ben Davies</li>
                <li>Eric García</li>
                <li>Chris Gunter</li>
                <li>César Azpilicueta</li>
                <li>Ferran Torres</li>
                <li>Ben Cabango</li>
                <li>Chris Mepham</li>
              </th>
            </tr>
          </table>
          </ol>
        </th>
        </tr>
        </thead>
      </table>
      </div>
      <div class="card text-white bg-success grupos" >
      <div class="card-header"><h2>Costa Rica <img src="data:image/png;base64,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"></h2></div>
      <table>
        <thead>
          <tr>
            <th>
        <div class="card-body">
          <h4 class="card-title">Historial</h4>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Ganados
              <span class="badge bg-primary rounded-pill">0</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Goles en mundiales
              <span class="badge bg-primary rounded-pill">19</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Partidos Ganados
              <span class="badge bg-primary rounded-pill">9</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Jugados
              <span class="badge bg-primary rounded-pill">23</span>
            </li>
          </ul>
        </div>
        </th>
        <th>
          <h4 class="card-title">Jugadores</h4>
          <ol class="list-group">
          <table class="jugadores">
            <tr>
              <th>
                <li>Lisandro Martinez</li>
                <li>Paulo Dybala</li>
                <li>Damián Emiliano</li>
                <li>Julián Álvarez</li>
                <li>Lisandro Martinez</li>
                <li>Rodrigo De Paul</li>
                <li>Guido Rodríguez</li>
                <li>Lautaro Martinez</li>
                <li>Enzo Fernandez</li>
              </th>
              <th>
                <li>Cristian Gabriel Romero</li>
                <li>Alexis Mac Allister</li>
                <li>Thiago Almada</li>
                <li>Alejandro Darío Gómez</li>
                <li>Leandro Paredes</li>
                <li>Nahuel Molina</li>
                <li>Lisandro Martinez</li>
                <li>Nicolás Otamendi</li>
                <li>Guido Rodríguez</li>
              </th>
            </tr>
          </table>
          </ol>
        </th>
        </tr>
        </thead>
      </table>
      </div>
      <div class="card text-white bg-success grupos" >
      <div class="card-header"><h2>Alemania <img src="data:image/jpeg;base64,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"></h2></div>
      <table>
        <thead>
          <tr>
            <th>
        <div class="card-body">
          <h4 class="card-title">Historial</h4>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Ganados
              <span class="badge bg-primary rounded-pill">4</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Goles en mundiales
              <span class="badge bg-primary rounded-pill">226</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Partidos Ganados
              <span class="badge bg-primary rounded-pill">66</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Jugados
              <span class="badge bg-primary rounded-pill">19</span>
            </li>
          </ul>
        </div>
        </th>
        <th>
          <h4 class="card-title">Jugadores</h4>
          <ol class="list-group">
          <table class="jugadores">
            <tr>
              <th>
                <li>Manuel Neuer</li>
                <li>Thomas Muller</li>
                <li>Kai Havertz</li>
                <li>Jamal Musiala</li>
                <li>David Raum</li>
                <li>Marc-André Ter Stegen</li>
                <li>Riyadh Sharahili</li>
                <li>Josua Kimmich</li>
                <li>NSerge Gnabry</li>
              </th>
              <th>
                <li>Niclas Fullkrug</li>
                <li>Haitham Asiri</li>
                <li>Serge Gnabry</li>
                <li>Nico Schotterbrek</li>
                <li>Hassan Tambakti</li>
                <li>Sami Al-Najei</li>
                <li>Leon Goretzka</li>
                <li>Abdullah Otayf</li>
                <li>Hattan Bahebri</li>
              </th>
            </tr>
          </table>
          </ol>
        </th>
        </tr>
        </thead>
      </table>
      </div>
      <div class="card text-white bg-success grupos" >
      <div class="card-header"><h2>Japon <img src="data:image/png;base64,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"></h2></div>
      <table>
        <thead>
          <tr>
            <th>
        <div class="card-body">
          <h4 class="card-title">Historial</h4>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Ganados
              <span class="badge bg-primary rounded-pill">0</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Goles en mundiales
              <span class="badge bg-primary rounded-pill">20</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Partidos Ganados
              <span class="badge bg-primary rounded-pill">7</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Jugados
              <span class="badge bg-primary rounded-pill">7</span>
            </li>
          </ul>
        </div>
        </th>
        <th>
          <h4 class="card-title">Jugadores</h4>
          <ol class="list-group">
          <table class="jugadores">
            <tr>
              <th>
                <li>Takefusa Kubo</li>
                <li>Kaoru Mitoma</li>
                <li>Takumi Minamino</li>
                <li>Wayne Hennessey</li>
                <li>Ayase Ueda</li>
                <li>Neco Williams</li>
                <li>Ritsu Doan</li>
                <li>Danny Ward</li>
                <li>Daizen Maeda</li>
              </th>
              <th>
                <li>Harry Wilson</li>
                <li>Daniel Schmidt</li>
                <li>Shuto Machino</li>
                <li>Joe Allen</li>
                <li>Chris Gunter</li>
                <li>Connor Roberts</li>
                <li>Shogo Taniguchi</li>
                <li>Junya Ito</li>
                <li>Chris Mepham</li>
              </th>
            </tr>
          </table>
          </ol>
        </th>
        </tr>
        </thead>
      </table>
      </div>
      <div class="card text-white bg-success grupos" >
      <div class="card-header"><h2>Belgica <img src="data:image/jpeg;base64,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"></h2></div>
      <table>
        <thead>
          <tr>
            <th>
        <div class="card-body">
          <h4 class="card-title">Historial</h4>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Ganados
              <span class="badge bg-primary rounded-pill">0</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Goles en mundiales
              <span class="badge bg-primary rounded-pill">68</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Partidos Ganados
              <span class="badge bg-primary rounded-pill">24</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Jugados
              <span class="badge bg-primary rounded-pill">13</span>
            </li>
          </ul>
        </div>
        </th>
        <th>
          <h4 class="card-title">Jugadores</h4>
          <ol class="list-group">
          <table class="jugadores">
            <tr>
              <th>
                <li>Eden Hazard</li>
                <li>Paulo Dybala</li>
                <li>Dries Mertens</li>
                <li>Thiabaut Courtois</li>
                <li>Lisandro Martinez</li>
                <li>Axel Witsel</li>
                <li>Leandro Trossard</li>
                <li>Lautaro Martinez</li>
                <li>Toby Alderweireld</li>
              </th>
              <th>
                <li>Thorgan Hazard</li>
                <li>Alexis Mac Allister</li>
                <li>Thiago Almada</li>
                <li>Youri Tielemans</li>
                <li>Zeno Debast</li>
                <li>Nahuel Molina</li>
                <li>Charles De Ketelaere</li>
                <li>Kevin De Bruyne</li>
                <li>Timothy Castagne</li>
              </th>
            </tr>
          </table>
          </ol>
        </th>
        </tr>
        </thead>
      </table>
      </div>
      <div class="card text-white bg-success grupos" >
      <div class="card-header"><h2>Canada <img src="data:image/png;base64,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"></h2></div>
      <table>
        <thead>
          <tr>
            <th>
        <div class="card-body">
          <h4 class="card-title">Historial</h4>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Ganados
              <span class="badge bg-primary rounded-pill">0</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Goles en mundiales
              <span class="badge bg-primary rounded-pill">0</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Partidos Ganados
              <span class="badge bg-primary rounded-pill">0</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Jugados
              <span class="badge bg-primary rounded-pill">2</span>
            </li>
          </ul>
        </div>
        </th>
        <th>
          <h4 class="card-title">Jugadores</h4>
          <ol class="list-group">
          <table class="jugadores">
            <tr>
              <th>
              <li>Eden Hazard</li>
                <li>Paulo Dybala</li>
                <li>Dries Mertens</li>
                <li>Thiabaut Courtois</li>
                <li>Lisandro Martinez</li>
                <li>Axel Witsel</li>
                <li>Leandro Trossard</li>
                <li>Lautaro Martinez</li>
                <li>Toby Alderweireld</li>
              </th>
              <th>
                <li>Thorgan Hazard</li>
                <li>Alexis Mac Allister</li>
                <li>Thiago Almada</li>
                <li>Youri Tielemans</li>
                <li>Zeno Debast</li>
                <li>Nahuel Molina</li>
                <li>Charles De Ketelaere</li>
                <li>Kevin De Bruyne</li>
                <li>Timothy Castagne</li>
              </th>
            </tr>
          </table>
          </ol>
        </th>
        </tr>
        </thead>
      </table>
      </div>
      <div class="card text-white bg-success grupos" >
      <div class="card-header"><h2>Marruecos  <img src="data:image/png;base64,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"></h2></div>
      <table>
        <thead>
          <tr>
            <th>
        <div class="card-body">
          <h4 class="card-title">Historial</h4>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Ganados
              <span class="badge bg-primary rounded-pill">0</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Goles en mundiales
              <span class="badge bg-primary rounded-pill">14</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Partidos Ganados
              <span class="badge bg-primary rounded-pill">5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Jugados
              <span class="badge bg-primary rounded-pill">6</span>
            </li>
          </ul>
        </div>
        </th>
        <th>
          <h4 class="card-title">Jugadores</h4>
          <ol class="list-group">
          <table class="jugadores">
            <tr>
              <th>
                <li>Almoez Ali</li>
                <li>Ró-Ró</li>
                <li>Akram Afif</li>
                <li>Hassan Al-Haidos</li>
                <li>Abdelkarim Hassan</li>
                <li>Mohammed Muntari</li>
                <li>Bassam Al-Rawi</li>
                <li>Abdulaziz Hatem</li>
                <li>Boualem Khoukhi</li>
              </th>
              <th>
                <li>Saad Al Sheeb</li>
                <li>Karim Boudiaf</li>
                <li>Meshaal Barsham</li>
                <li>Ismaeel Mohammad</li>
                <li>Tarek Salman</li>
                <li>Yousef Hassan</li>
                <li>Assim Madibo</li>
                <li>Homan Ahmed</li>
                <li>Ahmed Alaaeldin</li>
              </th>
            </tr>
          </table>
          </ol>
        </th>
        </tr>
        </thead>
      </table>
      </div>
      <div class="card text-white bg-success grupos" >
      <div class="card-header"><h2>Croacia  <img src="data:image/png;base64,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"></h2></div>
      <table>
        <thead>
          <tr>
            <th>
        <div class="card-body">
          <h4 class="card-title">Historial</h4>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Ganados
              <span class="badge bg-primary rounded-pill">0</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Goles en mundiales
              <span class="badge bg-primary rounded-pill">12</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Partidos Ganados
              <span class="badge bg-primary rounded-pill">1</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Jugados
              <span class="badge bg-primary rounded-pill">4</span>
            </li>
          </ul>
        </div>
        </th>
        <th>
          <h4 class="card-title">Jugadores</h4>
          <ol class="list-group">
          <table class="jugadores">
            <tr>
              <th>
                <li>Enner Valencia</li>
                <li>Moisés Caicedo</li>
                <li>Gonzalo Plata</li>
                <li>Piero Hincapié</li>
                <li>Jeremy Sarmiento</li>
                <li>Pervis Estupiñán</li>
                <li>Romario Ibarra</li>
                <li>Michael Estrada</li>
                <li>Ángel Mena</li>
              </th>
              <th>
                <li>Alexander Dominguez</li>
                <li>Jackson Porozo</li>
                <li>Alan Franco Palma</li>
                <li>José Cifuentes</li>
                <li>THernan Galíndez</li>
                <li>Jhegson Méndez</li>
                <li>Carlos Gruezo</li>
                <li>Robert Arboleda</li>
                <li>Angelo Preciado</li>
              </th>
            </tr>
          </table>
          </ol>
        </th>
        </tr>
        </thead>
      </table>
      </div>
      <div class="card text-white bg-success grupos" >
      <div class="card-header"><h2>Brazil <img src="data:image/jpeg;base64,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"></h2></div>
      <table>
        <thead>
          <tr>
            <th>
        <div class="card-body">
          <h4 class="card-title">Historial</h4>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Ganados
              <span class="badge bg-primary rounded-pill">5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Goles en mundiales
              <span class="badge bg-primary rounded-pill">229</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Partidos Ganados
              <span class="badge bg-primary rounded-pill">73</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Jugados
              <span class="badge bg-primary rounded-pill">22</span>
            </li>
          </ul>
        </div>
        </th>
        <th>
          <h4 class="card-title">Jugadores</h4>
          <ol class="list-group">
          <table class="jugadores">
            <tr>
              <th>
                <li>Neymar</li>
                <li>Richarlison</li>
                <li>Raphinha</li>
                <li>Vinicius Junior</li>
                <li>Antony</li>
                <li>Lucas Paqueta</li>
                <li>Pedro</li>
                <li>Gabriel Jesus</li>
                <li>Thiago Silva</li>
              </th>
              <th>
                <li>Bamba Dieng</li>
                <li>Formose Mendy</li>
                <li>Pape Gueye</li>
                <li>Ismail Jakobs</li>
                <li>Pathé Ciss</li>
                <li>Pape Matar Sarr</li>
                <li>Lliman Ndiaye</li>
                <li>Fodé Ballo-Toure</li>
                <li>Nicolas Jackson</li>
              </th>
            </tr>
          </table>
          </ol>
        </th>
        </tr>
        </thead>
      </table>
      </div>
      <div class="card text-white bg-success grupos" >
      <div class="card-header"><h2>Serbia <img src="data:image/png;base64,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"></h2></div>
      <table>
        <thead>
          <tr>
            <th>
        <div class="card-body">
          <h4 class="card-title">Historial</h4>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Ganados
              <span class="badge bg-primary rounded-pill">0</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Goles en mundiales
              <span class="badge bg-primary rounded-pill">4</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Partidos Ganados
              <span class="badge bg-primary rounded-pill">1</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Jugados
              <span class="badge bg-primary rounded-pill">2</span>
            </li>
          </ul>
        </div>
        </th>
        <th>
          <h4 class="card-title">Jugadores</h4>
          <ol class="list-group">
          <table class="jugadores">
            <tr>
              <th>
                <li>Virgil van Djik</li>
                <li>Memphis Depay</li>
                <li>Frenkie de Jong</li>
                <li>Steven Bergwjin</li>
                <li>Cody Gakpo</li>
                <li>Wout Weghorst</li>
                <li>Vincent Janssen</li>
                <li>Andries Noppert</li>
                <li>Remko Pasveer</li>
              </th>
              <th>
                <li>Matthijs de Ligt</li>
                <li>Nathan Aké</li>
                <li>Tyrell Malacia</li>
                <li>Teun Koopmeiners</li>
                <li>Davy Klaassen</li>
                <li>Kenneth Taylor</li>
                <li>Steven Berghuis</li>
                <li>Noa Lang</li>
                <li>Luuk de Jong</li>
              </th>
            </tr>
          </table>
          </ol>
        </th>
        </tr>
        </thead>
      </table>
      </div>
      <div class="card text-white bg-success grupos" >
      <div class="card-header"><h2>Suiza <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAATAAAACmCAMAAABqbSMrAAAAclBMVEXtHSb///////39//31HidaCw5bDxDqABDxrq7vDRfqeXr67vDpGSbzwcDrd3rrFiDuiYnwn6H419jtFB7rWF4hBAX9HynsAABfCw/oSEzsQkjyxMHvq63pT1HqcXX019nwlZb89PLsgX/oAAvwwsbup6UczZgRAAACT0lEQVR4nO3cbU+CUBxAcSwU0YzKVMoeNOv7f8WcrnTW4J5N5OrO7x2Mwb1nu+/+I5mUXQUrJ0k5TRVsWibdNFGwtGswxGCQwSCDQQaDDAYZDDIYZDDIYJDBIINBBoMMBhkMMhhkMMhgkMEgg0HxBCvG1Yq2F7gVTbDi6bHacxzFogmWzTvV+lnbS9yIJ9ioc13FYAcMBhkMMhhkMMhgkMEgg0EGgwwGGQwyGGQwyGCQwSCDQQaDDAYZDDIYZDDIYJDBIINBBoMMBhkMMhhkMMhgkMEgg0EGgwwGGWxnnAeYjTpXVTovs5DXND45fIJgxevgtt7be81Q8PxtEKDxWesTBMvva1Ic013TB/c0wSoP2++hO0qwvNnNGIwyGGQwyGCQwSCDQQaDDAYZDDIYZDDIYJDBIINBBoMMBhkMMhhkMMhgkMEgg0EGgwwGGQwyGGQwyGBQPNM7BvuRL5bLYb26YCHvGC4/LiBYUoRYfdYE6+c3AdYfa3YzJ5lxLQKarUZ1wbKQFJcwshkmqw/W9hI3DAYZDDIYZDDIYJDBIINBBoMMBhkMMhhkMMhgkMEgg0EGgwwGGQwyGGQwyGCQwSCDQQaDDAYZDDIYZDDIYJDBIINBBoMMBhkMiiZY/vVQbdH0fHSYaIIlRdt/aA0TT7AzYTDIYJDBIINBBoMMBhkMMhhkMMhgkMEgg0EGgwwGGQwyGGQwyGCQwSCDQQaDDAYZDDIYZDDIYJDBIINBBoPWwcppqmDTMpmUva3uzt5lb8/B5Zn7u7//njm4UU6+AUA2b/j7y8wkAAAAAElFTkSuQmCC"></h2></div>
      <table>
        <thead>
          <tr>
            <th>
        <div class="card-body">
          <h4 class="card-title">Historial</h4>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Ganados
              <span class="badge bg-primary rounded-pill">0</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Goles en mundiales
              <span class="badge bg-primary rounded-pill">50</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Partidos Ganados
              <span class="badge bg-primary rounded-pill">20</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Jugados
              <span class="badge bg-primary rounded-pill">12</span>
            </li>
          </ul>
        </div>
        </th>
        <th>
          <h4 class="card-title">Jugadores</h4>
          <ol class="list-group">
          <table class="jugadores">
            <tr>
              <th>
                <li>Medhi Taremi</li>
                <li>Sardar Azmoun</li>
                <li>Alireza Beiranvand</li>
                <li>Alireza Jahanbakhsh</li>
                <li>Ramin Rezaeian</li>
                <li>Ehsan Hajsafi</li>
                <li>Ali Karimi</li>
                <li>Saeid Ezatolahi</li>
                <li>Amir Abedzadeh</li>
              </th>
              <th>
                <li>Karim Ansarifard</li>
                <li>Shoja Khalilzadeh</li>
                <li>Saman Ghoddos</li>
                <li>Vahid Amiri</li>
                <li>Hossein Hosseini</li>
                <li>Rouzbeh Cheshmi</li>
                <li>Mehdi Torabi</li>
                <li>Sadegh Moharrami</li>
                <li>Ahmad Nourollahi</li>
              </th>
            </tr>
          </table>
          </ol>
        </th>
        </tr>
        </thead>
      </table>
      </div>
      <div class="card text-white bg-success grupos" >
      <div class="card-header"><h2>Camerun <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARIAAAC4CAMAAAAYGZMtAAAAk1BMVEX32TwAplHRHzMAAAD63DzQGTMAj0kArFO9PjjXTDTMtD8AAAP54T3TGzK0HjH43TzwvjvPADL0zDzdbDfSJTPXSDXlkjvyxzz10jwAfUIAlEqiODW3QjTOukCslz4ArlPfczfqpjvUNzXsrzvnmTrcZjfUOTXqqTzhfjnjhjnonzncYDbdbzjxxD3aWzbkiTnuuTw52H/2AAAEMElEQVR4nO3d21biMBQG4BqIio2zSSlQz1COIiDv/3TTFsXWNjHq5GJ2/395VW6yv5Vzu5ZB2EEqCQO/JGFY+2t6Zv2l8bG3ZCSdzs25p9ze/fGU+4crT3nsdDKS84szP3m6vPaUnup6ylVYkHgSObu4vBZeInsq8BOQgAQkIAEJSEACEpCABCQgAQlIQAISkIAEJCABCUhAAhKQgAQkIAEJSEACEpCABCQgAQlIQAISkIAEJCABCUhAAhKQgAQkIAEJSEACEpCABCQg+RVJCpJP0fOlBEk1agKSapETtdIgqRQ5I+Us0goSOYwCWjt3k1aQTFRAB1eRVpDoGQVB0nOdYNtAIvLm0LPryGkBiZwUJBFIPkqcUtEg15HDn0Quo6I9tAHJe4WLY4XdfgySY4r1Jo96cesm7Elkmrw1iKZuEyx/ksmpRYnbyOFPsqFTk9ZOI4c9SRydWkQrkOT1vZTrc7pI4k6ipx/jJnC7SGJOItNxiaS7A4mQg0qbnI7D/EjkKTpLedxkE+yomSQuL89cSOJjZVmWwyzbwWCwHmWJqo1K+s1ZSHYkcrsbj3ekyqE8tVbVQyral/e1TEiE2CfU/VlDaTas7PTZkMh09aNKKJjr6gTDhiSbVp+T2jj5MpQMPs+4fEiybdl+/F0T2g1rx2NOJEKKzffaSJu4viqzIimuAtw7CgWvsmGfwoxE6HTmakLj+qDhSCJkPHdbjWlmOBezI8ln2ejrjkLBSBvOOwxJhFyuvjKhZGE8AHIkEVKv7bOsOjRPI3xJ8u8n+jaTecPay50km2U3RpNkbZpGWJNkg8doEtmvYNmSiPhgIlG1Y007SOTQ2DKaWV/78SWZmAuzv/ZjS6JtG3vrywu2JDIyN83+qQlXErmwtS1KW7gv0SPbVk2Zt/N8ST4twZ+u6sn2/ThTErmsihxG1XtZ28jhSjIol6Vmse4dKoVuW0dSXoIpGWRnGqnLF/g0bR1J/HGLRLu3d+N6XzodJ5YexpLkYwnuBqPTlbPUr6eOYllzmJK8L8EUVSYN2XvvKJY1hyeJ6B9vpOmQViuX8vW4HtPYeEPAkkSmRVEUPIta3acZxXhDwJNkmxdF40XT4JBilF/M0tw0cliSFEswrepd5O3nYkZJWkWS7roUrJtebr4VHc9VV5m+W+NIIgcB9S1vJUTeUXbK9Ek9RxI9Uhvb6b+oO52b1hyWJIeJ9a3EsXD9Yhg5HEnE0O1b+RbNJaaVxjEsSX4XkIAEJCABCUhAAhKQgAQkIAEJSEACEpCABCQgAQlIQAISkIAEJCABCUhAAhKQgAQkIAEJSEACEpCABCQgAQlIQAISkIAEJCABCUhAAhKQgAQk5xeeSJ4urz2lpxr+Zcw/yZHk5txTbu/+eMr9w5WnPGYkYcdnwrD21/TM+kvjY2/phJ5J/sOEfwF1M0l8OvwnywAAAABJRU5ErkJggg=="></h2></div>
      <table>
        <thead>
          <tr>
            <th>
        <div class="card-body">
          <h4 class="card-title">Historial</h4>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Ganados
              <span class="badge bg-primary rounded-pill">0</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Goles en mundiales
              <span class="badge bg-primary rounded-pill">5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Partidos Ganados
              <span class="badge bg-primary rounded-pill">2</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Jugados
              <span class="badge bg-primary rounded-pill">1</span>
            </li>
          </ul>
        </div>
        </th>
        <th>
          <h4 class="card-title">Jugadores</h4>
          <ol class="list-group">
          <table class="jugadores">
            <tr>
              <th>
                <li>Gareth Bale</li>
                <li>Aaron Ramsey</li>
                <li>Daniel James</li>
                <li>Wayne Hennessey</li>
                <li>Brennan Johnson</li>
                <li>Neco Williams</li>
                <li>Ethan Ampadu</li>
                <li>Danny Ward</li>
                <li>Kieffer Moore</li>
              </th>
              <th>
                <li>Harry Wilson</li>
                <li>Joe Rodon</li>
                <li>Ben Davies</li>
                <li>Joe Allen</li>
                <li>Chris Gunter</li>
                <li>Connor Roberts</li>
                <li>Joe Morrel</li>
                <li>Ben Cabango</li>
                <li>Chris Mepham</li>
              </th>
            </tr>
          </table>
          </ol>
        </th>
        </tr>
        </thead>
      </table>
      </div>
      <div class="card text-white bg-success grupos" >
      <div class="card-header"><h2>Portugal <img src="data:image/png;base64,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"></h2></div>
      <table>
        <thead>
          <tr>
            <th>
        <div class="card-body">
          <h4 class="card-title">Historial</h4>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Ganados
              <span class="badge bg-primary rounded-pill">0</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Goles en mundiales
              <span class="badge bg-primary rounded-pill">49</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Partidos Ganados
              <span class="badge bg-primary rounded-pill">17</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Jugados
              <span class="badge bg-primary rounded-pill">8</span>
            </li>
          </ul>
        </div>
        </th>
        <th>
          <h4 class="card-title">Jugadores</h4>
          <ol class="list-group">
          <table class="jugadores">
            <tr>
              <th>
                <li>Cristiano Ronaldo</li>
                <li>Paulo Dybala</li>
                <li>Damián Emiliano</li>
                <li>Otavio</li>
                <li>Lisandro Martinez</li>
                <li>Rodrigo De Paul</li>
                <li>Joao Felix</li>
                <li>Lautaro Martinez</li>
                <li>Vitor Ferreira</li>
              </th>
              <th>
                <li>Pepe</li>
                <li>Alexis Mac Allister</li>
                <li>Diogo Dalot</li>
                <li>Alejandro Darío Gómez</li>
                <li>Leandro Paredes</li>
                <li>Danilo Pereira</li>
                <li>Gerónimo Rulli</li>
                <li>Nicolás Otamendi</li>
                <li>Guido Rodríguez</li>
              </th>
            </tr>
          </table>
          </ol>
        </th>
        </tr>
        </thead>
      </table>
      </div>
      <div class="card text-white bg-success grupos" >
      <div class="card-header"><h2>Ghana <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARMAAAC3CAMAAAAGjUrGAAAAnFBMVEXOESYAaz/80RYAAAAAaUDWMiP0tBkufTj/0hXXwR7/2RdTRQf/1BbuxRX70Bb/1hbWsRO4mRAzKgUnIAMdGAPipBfOrRKGbwzCoBHhuxT0yhUrJAQJBwDIphJjUghNQAchHANxXgrBhxQ4LgR7Zwt1YgpHOwYPDQGkiA+OdgwZFAKagA29nBByXgqojA5bSwg8MgWilhpychh+exhjuPjzAAAD30lEQVR4nO3bW1fiMBiF4U4zh05NegCkUCiHUUBHpDrz///bQEGhfBTQtSY7F/u5VC7iu5o0tNHziIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIg+6Bsd87474vbXLXoIbzzthrg77cboQex4vht0qlKNHsSOK01MpjKDHsSOI010cqfuEkcuFFea9JRSPTY5tJ46ypnJ40aToN9aN2n1A/RAKm408Qu1UaCHseVGkzyrmmQ5eiAVJ5po066atI0Tq6wTTfyu2uqiB1Jxokl0v2tyH6GHsuFEE3+4a7JAD6TiQhP9NnXWk8eFBcWFJuHovck0RA/Gd6NJrPZi9GB8J5ocTB03Jo8DTcLZQZOZA5PHgSZ6cNBkgB6N70ITXQwPmgwL/OTBN6lNnfW2DT957DXR4WnxvNZk3vQ5e9ePtSa6GI1vThkvak0WDZ8a2ZtUFudOt6U+b2Dx2YrFJtqffjrJKLK4mbO6xoZp+1NF2g9WF167952wXy4uJzh2k9i9F1m+F+v88aOrSivLLW9ZbO9PdJSWH7tI0sj2Lg6wZ0vuf19dZDFL7A8Q0ESb1d218+YB8dQasbcP8u7NVUnGRY54Cwb6vmMer0iCelcKahJExcUkPchF4gO/FwdmfrZIy8BeHuOeFQTB07A5yaOPe46CfH6ie52GIh3oURRok6RpT9uCHlmCPmdLG6dOihwWsElgZo1NZrgVFtukP2lsMkEeWQI2iZaNSZRaAk8YAJvkz2eaPAOPLOGaaHNme6KGwCNLwOukdybJemePGxiuSTQ622SEW1BwTfJagsFKr+o7ONyCAmuia3edsgj9MKldOUvYggJrEh48lu1kZvP6JjbZwbuOEvbiGDd39n/9fBVvrwkdp+P9j2EjQzWJ93edWXd/RYTJfr+/RJ3jQjV5P9fXeqrtRLR5eHm786AmD6pJtPuuU/aOXt/oqNjlmqDuPKAmcbrdxGb9E7/sb/8jYZiCJg+oSVgdMWivTj6G1nlabVVQh2VBTfLNojFP/NNPBAK/v7n/vIAmD6aJXnXW9xvd/IxE6/X8maww2zZMk3iqJr3zMyMsJmqKWVC8AECbsjThhQ/FZlQabWU8R7yfCK9/rvrY39f/PI7TvB90zPtKx7wvdIxNJDaR2ERiE4lNJDaR2ERiE4lNJDaR2ERiE4lNJDaR2ERiE4lNJDaR2ERiE4lNJDaR2ERiE4lNJDaR2ERiE4lNJDaR2ERiE4lNJDaR2ERiE4lNJDaR2ERiE4lNJDaR2ERiE4lNJDaR2ERiE4lNJDaR2ERiE4lNJDaR2ERiE4lNJDaR/gEJzxVbvDbgZQAAAABJRU5ErkJggg=="></h2></div>
      <table>
        <thead>
          <tr>
            <th>
        <div class="card-body">
          <h4 class="card-title">Historial</h4>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Ganados
              <span class="badge bg-primary rounded-pill">0</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Goles en mundiales
              <span class="badge bg-primary rounded-pill">13</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Partidos Ganados
              <span class="badge bg-primary rounded-pill">7</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Jugados
              <span class="badge bg-primary rounded-pill">4</span>
            </li>
          </ul>
        </div>
        </th>
        <th>
          <h4 class="card-title">Jugadores</h4>
          <ol class="list-group">
          <table class="jugadores">
            <tr>
              <th>
                <li>Salem Al-Dawsari</li>
                <li>Yasir Al-Shahrani</li>
                <li>Salman Al-Faraj</li>
                <li>Mohammed Al-Owais</li>
                <li>Saleh Al-Shehri</li>
                <li>Firas Al-Buraikan</li>
                <li>Riyadh Sharahili</li>
                <li>Nawaf Al-Aquidi</li>
                <li>Nawaf Al Abed</li>
              </th>
              <th>
                <li>Mohamed Kanno</li>
                <li>Haitham Asiri</li>
                <li>Sultan Al-Ghanam</li>
                <li>Ali Al-Bulaihi</li>
                <li>Hassan Tambakti</li>
                <li>Sami Al-Najei</li>
                <li>Abdulrahman Al-Aboud</li>
                <li>Abdullah Otayf</li>
                <li>Hattan Bahebri</li>
              </th>
            </tr>
          </table>
          </ol>
        </th>
        </tr>
        </thead>
      </table>
      </div>
      <div class="card text-white bg-success grupos" >
      <div class="card-header"><h2>Uruguay <img src="data:image/png;base64,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"></h2></div>
      <table>
        <thead>
          <tr>
            <th>
        <div class="card-body">
          <h4 class="card-title">Historial</h4>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Ganados
              <span class="badge bg-primary rounded-pill">2</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Goles en mundiales
              <span class="badge bg-primary rounded-pill">87</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Partidos Ganados
              <span class="badge bg-primary rounded-pill">24</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Jugados
              <span class="badge bg-primary rounded-pill">14</span>
            </li>
          </ul>
        </div>
        </th>
        <th>
          <h4 class="card-title">Jugadores</h4>
          <ol class="list-group">
          <table class="jugadores">
            <tr>
              <th>
                <li>Luis Suárez</li>
                <li>Darwin Nuñez</li>
                <li>Federico Valverde</li>
                <li>Diego Godin</li>
                <li>Lisandro Martinez</li>
                <li>Rodrigo De Paul</li>
                <li>Rodrigo Bentancur</li>
                <li>Lautaro Martinez</li>
                <li>Enzo Fernandez</li>
              </th>
              <th>
                <li>Facundo Pellistri</li>
                <li>Alexis Mac Allister</li>
                <li>Thiago Almada</li>
                <li>Alejandro Darío Gómez</li>
                <li>Leandro Paredes</li>
                <li>Nahuel Molina</li>
                <li>Gerónimo Rulli</li>
                <li>Nicolás Otamendi</li>
                <li>Guido Rodríguez</li>
              </th>
            </tr>
          </table>
          </ol>
        </th>
        </tr>
        </thead>
      </table>
      </div>
      <div class="card text-white bg-success grupos" >
      <div class="card-header"><h2>Republica de Korea <img src="data:image/png;base64,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"></h2></div>
      <table>
        <thead>
          <tr>
            <th>
        <div class="card-body">
          <h4 class="card-title">Historial</h4>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Ganados
              <span class="badge bg-primary rounded-pill">0</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Goles en mundiales
              <span class="badge bg-primary rounded-pill">11</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Partidos Ganados
              <span class="badge bg-primary rounded-pill">6</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mundiales Jugados
              <span class="badge bg-primary rounded-pill">4</span>
            </li>
          </ul>
        </div>
        </th>
        <th>
          <h4 class="card-title">Jugadores</h4>
          <ol class="list-group">
          <table class="jugadores">
            <tr>
              <th>
                <li>Son Heung-Min</li>
                <li>Kim Min-Jae</li>
                <li>Hwang Ui-jo</li>
                <li>Hwang Hee-chan</li>
                <li>Lee Kang-in</li>
                <li>Jo Hyeon-woo</li>
                <li>Kwon Chang-hoon</li>
                <li>Son Jun-ho</li>
                <li>Kim Seung-Gyu</li>
              </th>
              <th>
                <li>Jeong Woo-yeong</li>
                <li>Na Sang-ho</li>
                <li>Yoon Jong-gyu</li>
                <li>Kim Moon-hwan</li>
                <li>Jung Woo-young</li>
                <li>Hong Chul</li>
                <li>Song Min-kyu</li>
                <li>Kim Tae-Hwan</li>
                <li>Cho Yu-min</li>
              </th>
            </tr>
          </table>
          </ol>
        </th>
        </tr>
        </thead>
      </table>
      </div>
</body>
<style>
  img{
    max-width: 50px; 
    max-height: 50px;
  }
  ul{
    max-width: 400px;
  }
  .jugadores{
    margin: 0px 10px 10px 30px;
  }
  .grupos{
    margin: 10px 350px 10px 350px
  }
</html>