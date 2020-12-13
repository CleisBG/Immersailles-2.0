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

    <title>Ajout Marker</title>
  </head>

<body>
  <table class="w-100">
    <tr class="bg-dark text-white">
        <td>
          <table>
            <tr>
              <td>
                <a href="accueilAdmin"><img src="../images/logo_mini.png" class="card-img" style="width:100px;height:100px;" alt="logo"></a>
              </td>
              <td>
                <p style="font-size:30px;">Ajouter un marker</p>
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
      <a href="utilisateurAdmin.php"><button class="btn btn-outline-light m-4">Gérer les utilisateurs</button></a></br>

      <a href="datesAdmin.php"><button class="btn btn-outline-light m-4">Gestion des "époques"/dates</button></a></br>

      <a href="niveauxAdmin.php"><button class="btn btn-outline-light m-4">Gestion des niveaux associés à une "époque"</button></a></br>

      <button class="btn btn-outline-light m-4" disabled>Gestion des markers sur une map</button></br>

      <a href="ohAdmin.php"><button class="btn btn-outline-light m-4">Objets Historiques sur les markers</button></a>
    </div>

    <div class="col-sm-9">
      <p class="text-danger"><b>Il n'est pas possible d'ajouter un marker.</b></p>

      <div class="input-group mb-3 m-4">
        <label class="input-group-text bg-dark text-white" for="inputGroupSelect01">Nom du marker</label>
        <select class="form-select" id="inputGroupSelect01">
          <option selected>Choisir parmi les objets historiques existants n'ayant pas de marker...</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>

        <h2></br>Coordonnées du marker</h2>
        <div class="input-group mb-3 m-4">
          <span class="input-group-text bg-dark text-white" id="inputGroup-sizing-default">X</span>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3 m-4">
          <span class="input-group-text bg-dark text-white" id="inputGroup-sizing-default">Y</span>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
      </div>

      <a href="markerAdmin.php"><button class="btn btn-dark m-4">Ajouter le marker</button></a>
		</div>
  </div>



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
