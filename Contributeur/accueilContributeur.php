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

    <title>Accueil Contributeur</title>
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
                <p style="font-size:30px;">Contributeur</p>
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

  <div style="background-image: url('http://www.chateauversailles.fr/sites/default/files/styles/visuel_principal_home/public/visuels_principaux/accueil_tg_ete.jpg');">
      <div class="row w-100">
        <div class="col-sm-3 bg-dark">
          <button class="btn btn-outline-light m-4" disabled>Gérer les utilisateurs</button></br>

          <button class="btn btn-outline-light m-4" disabled>Gestion des "époques"/dates</button></br>

          <button class="btn btn-outline-light m-4" disabled>Gestion des niveaux associés à une "époque"</button></br>

          <a href="markerContributeur.php"><button class="btn btn-outline-light m-4">Gestion des markers sur une map</button></a></br>

          <a href="ohContributeur.php"><button class="btn btn-outline-light m-4">Objets Historiques sur les markers</button></a>
        </div>
        <div class="col-sm-9"><b>Bonjour Contributeur</b>
        <p class="text-danger"><b>La plupart des fonctionnalités sont visibles mais ne font rien.</b></p></div>
      </div>

    </div>


  <div class="baspage">
    <footer class="w-100 bg-dark text-white">
            <div class="container" >

                <div class="row">
                  <div class="col-sm">Crédits</div>
                  <div class="col-sm">Mentions Légales</div>
                  <div class="col-sm"><a class="text-warning" href="../ensavoirplus.html">En savoir plus</a></div>
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


</body>

</html>
