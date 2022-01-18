    <?php require './include/header.inc.php'; ?>




    <div class="page">

    	<h1>Nouvelle Aquitaine</h1>
    	<p>Veuillez choisir un département pour consulter sa meteo</p>
    	<img src="./images/Nouvelle-Aquitaine.png" width="580" height="770" usemap="#map" alt="nouvelle aquitaine" />



    	<map name="map">

    		<area shape="poly" alt="map" coords="160,47,196,34,241,31,250,55,250,99,247,112,245,141,255,162,267,161,261,179,269,200,242,207,233,215,206,196,180,184,165,171,165,160,188,146,178,140,182,107,166,78,151,48,177,38" href="traitement.php?departement=DEUX-SEVRES" />

    		<area shape="poly" alt="map" coords="244,31,257,18,291,43,293,60,328,50,346,82,357,108,379,133,381,151,361,167,343,181,343,193,319,201,305,196,296,207,271,190,270,154,254,157,247,125,251,98,257,74,248,40" href="traitement.php?departement=VIENNE" />

    		<area shape="poly" alt="map" coords="384,151,415,153,410,181,423,203,428,230,457,246,466,274,430,285,394,303,376,305,369,285,342,278,320,260,341,243,354,224,353,208,344,207,346,175,381,151,403,149" href="traitement.php?departement=HAUTE-VIENNE" />

    		<area shape="poly" alt="map" coords="421,157,429,148,450,150,459,142,509,145,521,164,542,180,552,213,527,244,534,267,488,264,470,266,461,247,434,229,424,204,412,179,428,149,448,149" href="traitement.php?departement=CREUSE" />

    		<area shape="poly" alt="map" coords="163,158,180,193,229,219,224,246,193,253,200,278,215,302,214,325,236,347,203,354,193,326,169,321,146,287,105,257,104,245,120,228,124,198,108,178,134,147,161,158,183,193" href="traitement.php?departement=CHARENTE-MARITIME" />

    		<area shape="poly" alt="map" coords="234,236,248,205,283,201,306,206,342,202,352,219,333,245,316,264,301,285,276,310,267,344,247,343,219,325,213,296,199,251,230,245,242,223" href="traitement.php?departement=CHARENTE" />

    		<area shape="poly" alt="map" coords="321,268,345,285,370,291,384,308,397,319,390,337,393,357,413,373,410,393,403,417,390,437,371,448,338,450,340,434,310,434,283,436,272,403,241,408,252,368,239,357,245,343,274,342,281,311,302,290,317,275" href="traitement.php?departement=DORDOGNE" />

    		<area shape="poly" alt="map" coords="401,309,420,290,467,273,484,263,542,267,539,287,539,319,523,322,501,351,497,369,490,390,451,401,427,381,412,373,392,344,398,312,412,300" href="traitement.php?departement=CORREZE" />

    		<area shape="poly" alt="map" coords="120,286,161,336,170,322,192,333,202,356,245,364,242,407,270,407,273,419,257,432,256,449,242,461,239,487,225,509,199,511,168,476,135,468,105,456,92,463,102,435,125,434,102,409,91,435,115,288,145,315" href="traitement.php?departement=GIRONDE" />

    		<area shape="poly" alt="map" coords="272,426,292,442,336,438,340,449,368,456,360,464,365,492,351,492,343,504,342,528,321,539,297,542,246,551,255,529,224,514,234,488,249,453,272,425" href="traitement.php?departement=LOT-ET-GARONNE" />

    		<area shape="poly" alt="map" coords="242,559,249,531,220,512,192,512,159,474,95,461,50,618,68,624,94,623,114,625,153,620,197,615,210,607,215,564,237,549,243,561" href="traitement.php?departement=LANDES" />

    		<area shape="poly" alt="map" coords="49,624,213,615,230,619,235,646,228,675,205,709,194,736,170,749,140,718,75,699,53,700,68,663,18,647,46,623" href="traitement.php?departement=PYRENEES-ATLANTIQUES" />

    	</map>
    	<?php
		include './include/fonction.inc.php';
		viewers10();
		?>
    </div>
    <?php require './include/footer.inc.php'; ?>