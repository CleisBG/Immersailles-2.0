<?php
session_start ();

if(!isset($_SESSION["login"])){
    header("location: connexion.php");
    exit();
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	  <link rel="stylesheet" href="Css/style.css">

    <!-- Bootstrap -->
    		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- OpenData -->
    		<script src="https://cdnjs.cloudflare.com/ajax/libs/blueimp-md5/2.18.0/js/md5.min.js" integrity="sha512-Hmp6qDy9imQmd15Ds1WQJ3uoyGCUz5myyr5ijainC1z+tP7wuXcze5ZZR3dF7+rkRALfNy7jcfgS5hH8wJ/2dQ==" crossorigin="anonymous"></script>

    <title>Modification Marker</title>
  </head>

<body>
  <table class="w-100">
    <tr class="bg-dark text-white">
        <td>
          <table>
            <tr>
              <td>
                <a href="accueilContributeur"><img src="../images/logo_mini.png" class="card-img" style="width:100px;height:100px;" alt="logo"></a>
              </td>
              <td>
                <p style="font-size:30px;">Modifier le marker</p>
              </td>
            </tr>
        </table>
        </td>
        <td class = "text-right">
          <p style="font-size:18px;">A propos
            <img src="../images/login.png" class="card-img" style="width:50px" alt="logo">

            <a href="../index2.php"><img src="../images/logout.png" class="card-img" style="width:50px" alt="logo"></a>
          </p>
        </td>
    </tr>
  </table>

  <div class="row w-100">
    <div class="col-sm-3 bg-dark">
      <button class="btn btn-outline-light m-4" disabled>Gérer les utilisateurs</button></br>

      <button class="btn btn-outline-light m-4" disabled>Gestion des "époques"/dates</button></br>

      <button class="btn btn-outline-light m-4" disabled>Gestion des niveaux associés à une "époque"</button></br>

      <button class="btn btn-outline-light m-4" disabled>Gestion des markers sur une map</button></br>

      <a href="ohContributeur.php"><button class="btn btn-outline-light m-4">Objets Historiques sur les markers</button></a>
    </div>

    <div class="col-sm-9">
      <p class="text-danger"><b>Il n'est pas possible de modifier.</b></p>
      <div class="container">
        <div class="row">
          <div class="col-sm"></br>
            <img id='image'>
            <a href="markerContributeur.php"><button class="btn btn-dark m-4">Valider</button></a>
          </div>
          <div class="col-sm">
                <table class="table align-middle" >
                  <tr>
                    <h1 id='name' class="bg-dark text-white"></h1></br>
                  </tr>
                  <tr class="bg-dark text-white">
                    <td>
                      <p id='description'></p>
                      <p id='birth'></p>
                      <p id='death'></p>
                    </td>
                  </tr>
                </table>
                <tr>
                  <h2>Nouvelles coordonnées du marker</h2>
                  <div class="input-group mb-3 m-4">
                    <span class="input-group-text bg-dark text-white" id="inputGroup-sizing-default">X</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                  </div>
                  <div class="input-group mb-3 m-4">
                    <span class="input-group-text bg-dark text-white" id="inputGroup-sizing-default">Y</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                  </div>
                </tr>
          </div>
        </div>
      </div>
    </div>
	</div>
</div>

  <script>
        const idWiki = 'Q7742';
        const name = document.querySelector('#name');
        const birth = document.querySelector('#birth');
        const death = document.querySelector('#death');
        const description = document.querySelector('#description');
        const image = document.querySelector('#image');

        const toDate = function(date) {
            const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            return new Date(date.substr(1, 10)).toLocaleDateString('fr-FR');
        }

        const getName = function(data) {
            return data.claims.P1559[0].mainsnak.datavalue.value.text;
        }

        const getDescription = function(data) {
            return data.descriptions.fr.value;
        }

        const getBirth = function(data) {
            const date = data.claims.P569[0].mainsnak.datavalue.value.time;
            return toDate(date);
        }

        const getDeath = function(data) {
            const date = data.claims.P570[0].mainsnak.datavalue.value.time;
            return toDate(date);
        }

        const getImageUrl = function(data, size=370) {
            const imageUrl = data.claims.P18[0].mainsnak.datavalue.value.split(' ').join('_');
            const md5Img = md5(imageUrl);

            const firstLetter = md5Img[0];
            const twoFirstLetters = md5Img.substring(0, 2);
            console.log(firstLetter, twoFirstLetters, md5Img);
            return `https://upload.wikimedia.org/wikipedia/commons/thumb/${firstLetter}/${twoFirstLetters}/${imageUrl}/${size}px-${imageUrl}`;
        }

        fetch(`https://www.wikidata.org/wiki/Special:EntityData/${idWiki}.json`)
        .then(data => data.json())
        .then(json => {
            const data = json.entities[idWiki];
            name.innerText = getName(data);
            birth.innerText = "Date de naissance: " + getBirth(data);
            death.innerText = "Date de décès: " +getDeath(data);
            description.innerText = getDescription(data);
            image.src = getImageUrl(data);
        });
    </script>

<footer class="w-100 bg-dark text-white">
        <div class="container" >
            <div class="row">
              <div1 class="col-sm">Crédits</div1>
              <div1 class="col-sm">Mentions Légales</div1>
              <div1 class="col-sm"><a class="text-warning" href="../ensavoirplus.html">En savoir plus</a></div1>
            </div>
            <div class="row">
                <div class="col-sm">blabla</div>
                <div class="col-sm">blablabla</div>
                <div class="col-sm"><a class="text-white" href="https://github.com/CleisBG/Immersailles-2.0.git">Lien Git</a></div>
              </div>
              <div class="row">
                <div class="col-sm"></div>
                <div class="col-sm"></div>
                <div class="col-sm">blabla</div>
              </div>
          </div>
          <div>
            <p style="text-align: center;">Copyright © 2020 x Inc. Tous droits réservés</p>
          </div>
</footer>

</body>

</html>
