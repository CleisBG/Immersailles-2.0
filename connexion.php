<?php
require('connexionBdd.php');
session_start ();

if (isset($_POST['submit']) && $_POST['submit'] == 'Envoyer') {
  $login = $_POST['login'];
  $mdp = $_POST['mdp'];

  if (!(empty($login)) && !(empty($mdp))) {

// récupère identifiants administrateur
    $results_admin=$dbh->query("SELECT `username`, `motDePasse` FROM `profil` p, `administrateur` a WHERE p.idProfil = a.idProfil");

    $ligne_admin = $results_admin->fetch();
    $login_admin = $ligne_admin['username'];
    $pwd_admin = $ligne_admin['motDePasse'];

// récupère identifiants contributeur
    $results_contrib=$dbh->query("SELECT `username`, `motDePasse` FROM `profil` p, `contributeur` c WHERE p.idProfil = c.idProfil");

    $ligne_contrib = $results_contrib->fetch();
    $login_contrib = $ligne_contrib['username'];
    $pwd_contrib = $ligne_contrib['motDePasse'];

    if ($login_admin == $login && $pwd_admin == $mdp) {
      // test administrateur
      $_SESSION['login'] = $login;
      $_SESSION['pwd'] = $mdp;

      header('location: Admin/accueilAdmin.php');
    }
    elseif ($login_contrib == $login && $pwd_contrib == $mdp) {
      // test contributeur
      $_SESSION['login'] = $login;
      $_SESSION['pwd'] = $mdp;

      header('location: Contributeur/accueilContributeur.php');
    }
    else {
      echo '<body onLoad="alert(\'Identifiants incorrects\')">';
    }
  }
  else {
    echo '<body onLoad="alert(\'Veuillez entrer un login et un mot de passe\')">';
  }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- <link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" /> -->
  	<link rel="stylesheet" type="text/css" href="Css/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/style.css">

    <title>Connexion</title>
</head>
<body>

    <table class="w-100">
      <tr class="bg-dark text-white">
          <td>
            <table>
              <tr>
                <td>
                  <a href="index2.php"><img src="images/logo_mini.png" class="card-img" style="width:100px;height:100px;" alt="logo"></a>
                </td>
                <td>
                  <p style="font-size:30px;">Immersailles</p>
                </td>
              </tr>
          </table>
          </td>
          <td class = "text-right">
            <p style="font-size:18px;">A propos
              <img src="images/login.png" class="card-img" style="width:50px" alt="logo">

              <img src="images/logout.png" class="card-img" style="width:50px" alt="logo">
            </p>
          </td>
      </tr>
    </table>

<div class="p-5" style="background-image: url('http://www.chateauversailles.fr/sites/default/files/styles/visuel_principal_home/public/visuels_principaux/accueil_tg_ete.jpg');">
    <table class="w-100">
      <div class="container" >
        <fieldset class="bg-dark text-white text-center">
          <p style="font-size:30px;">Connexion</p>
          <form action="" method="post">
            Login<br><input type="text" name="login" size="25"/><br><br>
            Mot de passe <br><input type="password" name="mdp" size="25"/><br><br><br>
            <button class="btn btn-outline-light" type="reset" name="submit">Effacer</button>
          <input class="btn btn-outline-light" type="submit" name="submit" value="Envoyer" />
          </form>
        </fieldset>
        </div>
    </table>
    </div>


    <footer class="w-100 bg-dark text-white">
    				<div class="container" >

    						<div class="row">
    							<div class="col-sm">Crédits</div>
    							<div class="col-sm">Mentions Légales</div>
    							<div class="col-sm"><a class="text-warning" href="ensavoirplus.html">En savoir plus</a></div>
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



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
