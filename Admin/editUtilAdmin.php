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
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <title>Gestion Utilisateurs</title>
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
                <p style="font-size:30px;">Modification de l'utilisateur</p>
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

      <a href="datesAdmin.php"><button class="btn btn-outline-light m-4">Gestion des "époques"/dates</button></a></br>

      <a href="niveauxAdmin.php"><button class="btn btn-outline-light m-4">Gestion des niveaux associés à une "époque"</button></a></br>

      <a href="markerAdmin.php"><button class="btn btn-outline-light m-4">Gestion des markers sur une map</button></a></br>

      <a href="ohAdmin.php"><button class="btn btn-outline-light m-4">Objets Historiques sur les markers</button></a>
    </div>
    <div class="col-sm-9">
      <p class="text-danger"><b>Il n'est pas possible de modifier l'utilisateur.</b></p>
    <h2>Utilisateur</h2>
    <!-- Bouton radio -->
    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
      <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
      <label class="btn btn-dark" for="btnradio1">Contributeur</label>

      <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
      <label class="btn btn-dark" for="btnradio3">Administrateur</label>
    </div>

    <table class="table">
        <tr>
          <td align="middle"><button class="btn btn-dark">Suivi des connexions</button></a>
            <button class="btn btn-dark">Générer un mot de passe</button></td>
        </tr>
        <tr>
          <td align="middle"><a href="utilisateurAdmin.php"><button class="btn btn-dark">Enregistrer les modifications</button></td>
        </tr>
    </table>
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
