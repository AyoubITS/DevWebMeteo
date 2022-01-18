    <?php require './include/header.inc.php';?>



	
	<div class="page">
		<h1>Bourgogne Franche Comté</h1>
		<p>Veuillez choisir un département pour consulter sa meteo</p>

		<img src="./images/Bourgogne.jpg" width="800" height="600" usemap="#map" alt="bourgogne" />
		<map name="map">
			<area shape="poly" alt="map" coords="75,41,144,28,177,85,189,82,223,140,273,135,282,140,277,151,288,173,274,190,277,203,252,248,250,284,210,264,167,258,148,234,125,251,64,224,48,192,70,178,67,150,89,135,83,104,61,84,77,67,80,38,108,35" href="traitement.php?departement=YONNE" />
			<area shape="poly" alt="map" coords="284,139,333,113,364,116,382,143,394,158,386,172,394,191,445,208,445,220,476,210,480,225,462,249,482,283,469,334,447,365,354,383,301,340,266,326,273,312,258,296,255,256,274,217,283,182,286,164,278,147,303,127" href="traitement.php?departement=COTE-DOR" />
			<area shape="poly" alt="map" coords="467,201,490,191,509,191,521,148,535,144,577,107,608,122,630,123,643,133,664,128,697,152,692,173,692,212,677,213,631,230,618,243,600,257,513,296,489,284,465,243,485,229,474,201,464,204,493,189" href="traitement.php?departement=HAUTE-SAONE" />
			<area shape="poly" alt="map" coords="706,149,733,170,737,203,752,207,752,221,726,238,721,220,693,203,692,166,703,149,721,158" href="traitement.php?departement=TERRITOIRE-DE-BELFORT" />
			<area shape="poly" alt="map" coords="524,299,616,257,646,229,697,210,720,224,719,255,732,267,726,286,671,356,646,376,643,409,598,453,587,452,611,413,585,391,557,347,528,344,540,321,525,298,580,274" href="traitement.php?departement=DOUBS" />
			<area shape="poly" alt="map" coords="488,287,518,299,539,333,527,351,552,353,573,385,604,409,587,445,591,467,580,507,547,534,520,519,493,538,492,527,461,491,473,493,474,462,482,442,465,405,483,391,451,378,452,352,478,325,489,287" href="traitement.php?departement=JURA" />
			<area shape="poly" alt="map" coords="276,336,356,391,440,369,474,394,461,413,474,450,469,491,395,485,370,561,357,538,306,543,299,563,249,565,227,556,243,518,235,482,202,476,181,431,216,445,246,416,256,389,244,369,252,337,274,331,303,358" href="traitement.php?departement=SAONE-ET-LOIRE" />
			<area shape="poly" alt="map" coords="67,230,129,253,153,241,173,260,226,280,253,298,268,325,242,340,237,370,248,400,222,427,174,428,146,452,128,441,106,441,84,418,82,355,73,336,54,287,54,241,70,231,82,240" href="traitement.php?departement=NIEVRE" />
		</map>
		<?php 
		include './include/fonction.inc.php';
		viewers2();
		?>
	</div>
    <?php require './include/footer.inc.php';?>
