    <?php require './include/header.inc.php';?>



	
	<div class="page">
	
		<h1>Grand-Est</h1>
		<p>Veuillez choisir un département pour consulter sa meteo</p>

		<img src="./images/Grand-Est.png" width="526" height="442" usemap="#map" alt="est" />



		<map name="map">

			<area shape="poly" alt="map" coords="150,3,146,28,152,49,150,63,171,61,184,77,203,85,203,95,185,90,179,97,181,122,172,136,173,147,115,148,79,127,67,123,68,89,86,67,90,34,110,38,134,28,139,4,149,1,149,11,148,17" href="traitement.php?departement=ARDENNES" />

			<area shape="poly" alt="map" coords="212,93,225,123,241,119,254,137,249,155,264,183,255,234,257,254,254,262,259,273,242,279,227,285,179,254,172,232,167,220,171,209,178,203,179,186,173,185,170,155,181,138,177,138,184,123,184,93,202,100,212,94,220,109" href="traitement.php?departement=MEUSE" />

			<area shape="poly" alt="map" coords="225,110,240,106,247,97,261,101,268,112,273,132,281,142,280,153,280,166,273,173,283,191,321,204,318,210,322,223,350,231,368,244,402,256,409,262,379,283,358,271,329,283,322,282,304,287,304,294,292,294,280,283,280,274,266,272,259,261,263,247,259,225,268,184,253,151,260,133,242,112,229,117,226,109,241,106" href="traitement.php?departement=MEURTHE-ET-MOSELLE" />

			<area shape="poly" alt="map" coords="274,113,276,127,287,138,285,155,286,171,282,175,290,190,323,202,327,221,357,231,376,243,406,254,415,258,427,252,431,221,415,211,409,218,405,214,405,207,392,200,408,165,416,177,432,185,459,187,462,171,443,151,424,162,397,163,391,148,378,149,378,161,361,150,342,125,338,111,303,104,293,112,276,112,274,122" href="traitement.php?departement=MOSELLE" />

			<area shape="poly" alt="map" coords="470,321,481,291,489,243,518,205,524,182,493,171,468,171,458,190,428,189,407,179,396,197,428,212,437,222,424,258,417,270,415,288,435,296,466,324,474,312" href="traitement.php?departement=BAS-RHIN" />

			<area shape="poly" alt="map" coords="67,132,87,133,109,148,164,156,171,175,168,190,173,196,172,203,164,207,160,222,171,241,147,251,151,260,148,270,127,268,101,261,101,240,74,244,42,269,20,267,0,235,26,194,23,175,33,166,27,144,49,132,64,139,70,133" href="traitement.php?departement=MARNE" />

			<area shape="poly" alt="map" coords="96,250,101,267,125,275,131,274,136,275,142,301,158,307,162,339,139,348,141,357,111,372,58,376,33,332,28,334,0,300,2,278,15,267,47,279,75,249,98,254" href="traitement.php?departement=AUBE" />

			<area shape="poly" alt="map" coords="174,250,223,288,223,297,255,321,253,346,275,368,275,381,260,388,256,411,222,421,179,413,175,403,182,391,151,356,150,348,163,339,161,303,142,277,155,275,157,252,173,249" href="traitement.php?departement=HAUTE-MARNE" />

			<area shape="poly" alt="map" coords="229,292,266,277,276,279,285,298,309,296,323,284,344,288,363,277,383,287,410,270,411,294,419,298,396,359,394,381,363,365,349,370,339,360,319,365,306,355,279,366,259,344,263,320,228,294,244,287" href="traitement.php?departement=VOSGES" />

			<area shape="poly" alt="map" coords="427,301,437,301,457,318,467,328,473,354,464,393,472,421,453,441,436,439,418,418,413,394,396,381,400,356,416,336,425,300,429,301" href="traitement.php?departement=HAUT-RHIN" />

		</map>
		<?php 
		include './include/fonction.inc.php';
		viewers6();
		?>
	</div>
    <?php require './include/footer.inc.php';?>