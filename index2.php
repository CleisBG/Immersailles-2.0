<?php
require('connexionBdd.php');
session_start ();
?>

<!DOCTYPE html>
<html>
<head>

	<title>Immersailles</title>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="style.css">

<!-- Pour la Carte -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
<!-- Bootstrap -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<!-- OpenData -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/blueimp-md5/2.18.0/js/md5.min.js" integrity="sha512-Hmp6qDy9imQmd15Ds1WQJ3uoyGCUz5myyr5ijainC1z+tP7wuXcze5ZZR3dF7+rkRALfNy7jcfgS5hH8wJ/2dQ==" crossorigin="anonymous"></script>

		</head>
		<body>

		<table class="w-100">
				<tr class="bg-dark text-white">
						<td>
							<table>
								<tr>
									<td>
										<img src="logo_mini.png" class="card-img" style="width:100px;height:100px;" alt="logo">
									</td>
									<td>
										<p style="font-size:30px;">Immersailles</p>
									</td>
								</tr>
						</table>
						</td>
						<td class = "text-right">
							<p style="font-size:18px;">A propos
								<a href="connexion.php"><img src="rond-titre-blanc.png" class="card-img" style="width:50px" alt="logo"></a>
								<img src="rond-titre-blanc.png" class="card-img" style="width:50px" alt="logo">
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
			width: 75%;
			height: 400px;
		}
	</style>

<div id="map"></div>

<script>
	var map = L.map('map', {
		crs: L.CRS.Simple,
		minZoom: -5
	});

	var greenIcon = L.icon({
    iconUrl: 'marker.png',
    shadowUrl: 'leaf-shadow.png',

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
	var image = L.imageOverlay('plan_versailles.png', bounds).addTo(map);

	var sol      = xy(3253, 1756);
	var mizar    = xy( 41.6, 130.1);
	var kruegerZ = xy( 13.4,  56.5);
	var deneb    = xy(218.7,   8.3);

	L.marker(     sol, {icon: greenIcon}).addTo(map).bindPopup('<a href="Louis14.html"><img src="Louis.jpg" class="card-img" style="width:30px" alt="logo"></a>');
	L.marker(   mizar, {icon: greenIcon}).addTo(map).bindPopup(    'Mizar');
	L.marker(kruegerZ, {icon: greenIcon}).addTo(map).bindPopup('Krueger-Z');
	L.marker(   deneb, {icon: greenIcon}).addTo(map).bindPopup(    'Deneb');

	var travel = L.polyline([sol, deneb]).addTo(map);

	map.setView(xy(120, 70), -3);

</script>
open data

<div class="baspage">
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
								<div class="col-sm"><a class="text-white" href="https://bitbucket.org/EdetRo/immersailles/src/master/">Lien Git</a></div>
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
</div>

</body>
</html>
