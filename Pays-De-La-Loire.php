    <?php require './include/header.inc.php'; ?>



    	<div class="page">
    		
    		<h1>Pays De La Loire</h1>
    		<p>Veuillez choisir un département pour consulter sa meteo</p>

    		<img src="./images/Pays-De-La-Loire.png" width="520" height="493" usemap="#map" alt="pays de la loire" />



    		<map name="map">

    			<area shape="poly" alt="map" coords="233,12,274,25,357,7,371,36,363,50,341,89,346,102,334,117,334,131,320,142,315,162,244,166,193,156,229,123,231,79,226,54,235,15,273,22" href="traitement.php?departement=MAYENNE" />

    			<area shape="poly" alt="map" coords="376,42,427,23,438,60,470,74,498,98,491,120,495,143,482,174,458,194,430,205,411,209,350,192,317,160,336,132,344,105,352,78,373,41,395,36" href="traitement.php?departement=SARTHE" />

    			<area shape="poly" alt="map" coords="313,169,362,205,404,217,395,253,373,306,353,321,305,315,286,320,238,337,206,327,191,304,197,279,183,258,246,246,230,224,201,214,224,207,206,182,198,160,260,171,315,171,336,184" href="traitement.php?departement=MAINE-ET-LOIRE" />

    			<area shape="poly" alt="map" coords="199,165,217,207,194,211,237,248,175,262,191,290,173,327,157,342,151,320,144,326,143,353,84,325,49,287,78,258,41,266,11,255,8,231,38,212,63,215,86,178,128,174,171,149,195,162,212,195" href="traitement.php?departement=LOIRE-ATLANTIQUE" />

    			<area shape="poly" alt="map" coords="74,326,54,351,74,385,95,431,157,470,180,480,226,474,248,484,284,470,273,458,277,415,258,363,242,336,184,315,152,342,149,326,138,359,96,334,73,329" href="traitement.php?departement=VENDEE" />

			</map>
			<?php 
		include './include/fonction.inc.php';
		viewers12();
		?>
    	</div>
    	<?php require './include/footer.inc.php'; ?>
  