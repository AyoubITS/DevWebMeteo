    <?php require './include/header.inc.php';?>


	
	<div class="page">
	
		<h1>Corse</h1>
		<p>Veuillez choisir un département pour consulter sa meteo</p>

		<img src="./images/Corse.png" width="195" height="375" usemap="#map" alt="corse" />



		<map name="map">

			<area shape="poly" alt="map" coords="148,6,168,10,170,71,185,125,183,172,183,203,152,228,131,217,127,202,109,199,93,190,80,184,70,181,62,170,60,154,46,156,39,167,23,164,24,142,55,94,99,81,119,68,136,75,149,6,165,11" href="traitement.php?departement=HAUTE-CORSE" />

			<area shape="poly" alt="map" coords="23,165,41,167,56,156,59,156,62,172,73,184,91,190,104,198,127,206,132,218,152,231,157,248,151,278,142,341,116,368,87,340,52,337,59,323,44,305,67,283,30,273,42,246,18,241,43,208,13,206,11,178,24,165,32,167" href="traitement.php?departement=CORSE-DU-SUD" />

		</map>
		<?php 
		include './include/fonction.inc.php';
		viewers5();
		?>
	</div>
    <?php require './include/footer.inc.php';?>
