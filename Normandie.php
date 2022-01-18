    <?php require './include/header.inc.php';?>


	<div class="page">
		
		<h1>Normandie</h1>
		<p>Veuillez choisir un département pour consulter sa meteo</p>
		<img src="./images/Normandie.png" width="425" height="330" usemap="#map" alt="Normandie" />



		<map name="map">

			<area shape="poly" alt="map" coords="6,47,44,62,59,54,79,56,80,69,72,78,86,114,91,126,102,144,114,142,108,150,117,173,95,188,99,196,83,208,92,218,116,221,130,238,114,268,69,257,47,269,34,238,57,239,34,216,36,171,35,138,15,106,6,79,11,61,1,45,22,55" href="traitement.php?departement=MANCHE" />

			<area shape="poly" alt="map" coords="90,116,108,109,144,120,199,132,252,111,260,137,257,141,265,163,267,184,263,190,230,195,201,212,165,205,138,208,118,220,84,209,101,197,101,185,118,170,112,137,103,141,90,114,110,108" href="traitement.php?departement=CALVADOS" />

			<area shape="poly" alt="map" coords="253,106,228,93,242,58,292,37,355,22,386,2,411,30,421,53,415,68,421,107,414,116,379,108,366,124,335,140,318,130,323,119,289,111,278,100,257,108,234,96" href="traitement.php?departement=SEINE-MARITIME" />

			<area shape="poly" alt="map" coords="255,111,277,102,297,115,321,121,314,130,334,142,368,125,381,108,416,119,422,144,405,172,384,181,388,202,372,223,343,227,306,243,302,226,283,203,261,200,269,180,265,152,260,133,255,110,265,107" href="traitement.php?departement=EURE" />

			<area shape="poly" alt="map" coords="120,224,140,211,167,205,197,212,230,197,264,193,261,201,282,208,300,229,303,244,319,264,324,285,305,301,305,327,299,328,286,314,276,316,258,304,258,281,244,275,218,288,207,290,206,277,197,278,195,263,185,258,181,265,157,267,140,276,123,276,116,267,131,244,129,232,122,223,135,215" href="traitement.php?departement=ORNE" />

		</map>
		<?php 
		include './include/fonction.inc.php';
		viewers9();
		?>
	</div>
    <?php require './include/footer.inc.php';?>
