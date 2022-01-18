    <?php require './include/header.inc.php';?>



	
	<div class="page">
	
		<h1>Bretagne</h1>
		<p>Veuillez choisir un département pour consulter sa meteo</p>

		<img src="./images/Bretagne.jpg" width="400" height="240" usemap="#map" alt="bretagne" />
		<map name="map">

			<area shape="poly" alt="map" coords="12,43,32,33,55,28,63,34,92,24,103,38,110,28,124,32,134,56,129,69,133,88,133,107,110,118,118,144,139,146,145,153,128,168,124,177,92,167,83,150,80,155,64,158,54,167,38,167,43,150,21,126,6,120,51,118,52,102,32,94,25,104,23,86,54,86,41,75,40,68,6,76,5,54,14,37,25,35" href="traitement.php?departement=FINISTERE" />

			<area shape="poly" alt="map" coords="129,33,143,9,184,6,202,26,221,62,266,43,302,65,304,75,301,101,272,113,262,125,243,123,223,138,224,123,177,109,162,118,133,109,133,83,130,65,134,52,126,35,137,21" href="traitement.php?departement=COTES-DARMOR" />

			<area shape="poly" alt="map" coords="285,51,316,39,313,56,342,53,357,79,381,68,393,74,396,103,391,132,394,152,384,160,369,188,345,180,312,200,277,207,287,186,284,168,272,147,264,142,278,139,264,128,282,110,303,101,307,65,289,55,285,49,307,43" href="traitement.php?departement=ILLE-ET-VILAINE" />

			<area shape="poly" alt="map" coords="111,120,129,110,157,118,182,112,220,127,223,143,243,123,264,132,263,146,277,157,280,187,277,216,274,224,259,227,239,231,245,225,226,220,201,225,194,218,212,218,219,204,184,204,182,210,170,210,170,225,164,223,167,206,148,189,127,177,129,169,145,158,145,144,125,138,118,136,111,122,119,114" href="traitement.php?departement=MORBIHAN" />

		</map>
		<?php 
		include './include/fonction.inc.php';
		viewers3();
		?>
	</div>
    <?php require './include/footer.inc.php';?>

