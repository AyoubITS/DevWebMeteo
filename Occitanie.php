    <?php require './include/header.inc.php';?>



	
	<div class="page">
	
		<h1>Occitanie</h1>
		<p>Veuillez choisir un département pour consulter sa meteo</p>
		<img src="./images/Occitanie.png" width="824" height="604" usemap="#map" alt="occitanie" />



		<map name="map">

			<area shape="poly" alt="map" coords="291,12,330,11,345,35,373,21,390,29,405,92,348,129,352,169,305,172,279,179,248,160,238,142,226,116,244,86,270,63,298,38,294,9" href="traitement.php?departement=LOT" />

			<area shape="poly" alt="map" coords="413,95,447,93,489,34,507,48,538,112,546,149,551,179,568,197,588,194,576,214,599,227,578,255,563,275,544,276,534,302,498,286,481,286,454,245,428,203,402,188,374,195,358,167,353,129,409,101,426,92" href="traitement.php?departement=AVEYRON" />

			<area shape="poly" alt="map" coords="527,87,548,38,561,41,590,27,604,59,624,44,652,58,661,73,681,127,669,143,665,206,627,197,603,206,574,186,556,183,551,149,542,118,530,87,538,64" href="traitement.php?departement=LOZERE" />

			<area shape="poly" alt="map" coords="686,136,691,160,720,172,745,160,754,166,759,153,789,171,795,217,805,236,773,263,771,291,747,306,749,316,717,345,696,334,718,310,703,286,675,260,651,236,612,257,586,249,596,227,581,207,585,199,614,208,632,203,669,204,672,142,687,131,687,152" href="traitement.php?departement=GARD" />

			<area shape="poly" alt="map" coords="706,322,710,308,676,263,647,244,612,262,584,259,550,277,539,296,471,312,474,348,463,359,466,381,488,392,513,370,558,393,611,386,681,331,709,321" href="traitement.php?departement=HERAULT" />

			<area shape="poly" alt="map" coords="235,151,203,150,204,186,197,205,182,214,193,217,182,245,202,255,207,276,249,277,280,263,306,253,332,208,370,195,356,165,296,179,266,179,240,156,211,152" href="traitement.php?departement=TARN-ET-GARONNE" />

			<area shape="poly" alt="map" coords="330,212,400,194,438,220,463,271,515,297,471,308,456,355,377,360,377,342,331,307,310,258,329,223,358,204" href="traitement.php?departement=TARN" />

			<area shape="poly" alt="map" coords="215,282,307,254,326,305,374,350,345,355,312,391,279,386,251,412,255,427,219,423,192,463,187,485,156,480,145,508,126,508,133,466,146,472,160,460,147,440,132,407,186,357,219,368,222,334,249,321,220,284,224,277" href="traitement.php?departement=HAUTE-GARONNE" />

			<area shape="poly" alt="map" coords="175,216,120,221,90,226,69,243,61,229,26,243,18,308,50,322,58,311,89,342,90,368,106,357,152,373,187,360,216,363,226,326,241,313,204,268,185,242,189,226,170,215" href="traitement.php?departement=GERS" />

			<area shape="poly" alt="map" coords="58,324,86,375,109,365,151,379,126,410,148,466,119,465,121,496,100,511,76,498,37,501,11,477,19,435,48,408,61,375,54,346,60,328,70,352" href="traitement.php?departement=HAUTES-PYRENEES" />

			<area shape="poly" alt="map" coords="323,396,366,430,360,486,395,514,342,539,322,530,276,524,252,498,197,483,211,453,227,423,261,428,285,391,309,393,331,403" href="traitement.php?departement=ARIEGE" />

			<area shape="poly" alt="map" coords="324,390,348,355,377,360,460,361,462,376,491,397,517,380,560,399,527,472,486,482,420,486,408,518,368,485,366,422,328,394,335,373" href="traitement.php?departement=AUDE" />

			<area shape="poly" alt="map" coords="526,481,545,575,504,566,451,584,380,581,351,584,339,540,402,523,427,506,432,486,496,487,522,482" href="traitement.php?departement=PYRENEES-ORIENTALES" />

		</map>
		<?php 
		include './include/fonction.inc.php';
		viewers11();
		?>
	</div>
    <?php require './include/footer.inc.php';?>
