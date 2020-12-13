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

    <!-- Pour la Carte -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <!-- Bootstrap -->
    		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- OpenData -->
    		<script src="https://cdnjs.cloudflare.com/ajax/libs/blueimp-md5/2.18.0/js/md5.min.js" integrity="sha512-Hmp6qDy9imQmd15Ds1WQJ3uoyGCUz5myyr5ijainC1z+tP7wuXcze5ZZR3dF7+rkRALfNy7jcfgS5hH8wJ/2dQ==" crossorigin="anonymous"></script>

    <title>Gestion Markers</title>
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
                <p style="font-size:30px;">Gestion des markers</p>
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

  <style>
    html, body {
      height: 100%;
      margin: 0;
    }
    #map {
      width: 100%;
      height: 400px;
    }
  </style>

  <div class="row w-100">
    <div class="col-sm-3 bg-dark">
      <a href="utilisateurAdmin.php"><button class="btn btn-outline-light m-4">Gérer les utilisateurs</button></a></br>

      <a href="datesAdmin.php"><button class="btn btn-outline-light m-4">Gestion des "époques"/dates</button></a></br>

      <a href="niveauxAdmin.php"><button class="btn btn-outline-light m-4">Gestion des niveaux associés à une "époque"</button></a></br>

      <button class="btn btn-outline-light m-4" disabled>Gestion des markers sur une map</button></br>

      <a href="ohAdmin.php"><button class="btn btn-outline-light m-4">Objets Historiques sur les markers</button></a>
    </div>
    <div class="col-sm-9">
      <p class="text-danger"><b>La fonctionnalité "Supprimer" est visible mais ne modifie rien.</b></p>
			<div id="map"></div>
      <a href="ajoutMarkerAdmin.php"><button class="btn btn-dark m-4">Ajouter un marker</button></a>
		</div>
  </div>

  <script>
  	var map = L.map('map', {
  		crs: L.CRS.Simple,
  		minZoom: -5
  	});

  	var greenIcon = L.icon({
      iconUrl: '../images/marker.png',

      iconSize:     [38, 50], // size of the icon
      iconAnchor:   [19, 50], // point of the icon which will correspond to marker's location
      popupAnchor:  [0, -47] // point from which the popup should open relative to the iconAnchor
  });

  	var yx = L.latLng;

  	var xy = function(x, y) {
  		if (L.Util.isArray(x)) {    // When doing xy([x, y]);
  			return yx(x[1], x[0]);
  		}
  		return yx(y, x);  // When doing xy(x, y);
  	};

  	var bounds = [xy(0, 0), xy(6507, 2319)];
  	var image = L.imageOverlay('../images/plan_versailles.png', bounds).addTo(map);

  	var sol      = xy(3253, 1756);
  	var mizar    = xy( 41.6, 130.1);
  	var kruegerZ = xy( 13.4,  56.5);
  	var deneb    = xy(218.7,   8.3);

  	L.marker(     sol, {icon: greenIcon}).addTo(map).bindPopup('<b>Louis XIV</b><li><a href="infoMarkerAdmin.php">Informations</a></li><li><a href="editMarkerAdmin.php">Editer</a></li><li>Supprimer</li>');
  	L.marker(   mizar, {icon: greenIcon}).addTo(map).bindPopup(    'Mizar');
  	L.marker(kruegerZ, {icon: greenIcon}).addTo(map).bindPopup('Krueger-Z');
  	L.marker(   deneb, {icon: greenIcon}).addTo(map).bindPopup(    'Deneb');

  	// var travel = L.polyline([sol, deneb]).addTo(map);

  	map.setView(xy(120, 70), -3);

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
