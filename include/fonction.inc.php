<?php
function viewers()
{
    $departement = $_GET['departement'];
    $monfichier = fopen("./stats/auvergne.txt", 'r+');

    $pages_vues = fgets($monfichier);
    if (!isset($_GET['verif'])) {
        $pages_vues += 1;
    }
    fseek($monfichier, 0);
    fputs($monfichier, $pages_vues);

    fclose($monfichier);

    return  $pages_vues;
}
function viewers2()
{
    $departement = $_GET['departement'];
    $monfichier = fopen("./stats/bourgogne.txt", 'r+');

    $pages_vues = fgets($monfichier);
    if (!isset($_GET['verif'])) {
        $pages_vues += 1;
    }
    fseek($monfichier, 0);
    fputs($monfichier, $pages_vues);

    fclose($monfichier);

    return  $pages_vues;
}
function viewers3()
{
    $departement = $_GET['departement'];
    $monfichier = fopen("./stats/bretagne.txt", 'r+');

    $pages_vues = fgets($monfichier);
    if (!isset($_GET['verif'])) {
        $pages_vues += 1;
    }
    fseek($monfichier, 0);
    fputs($monfichier, $pages_vues);

    fclose($monfichier);

    return  $pages_vues;
}
function viewers4()
{
    $departement = $_GET['departement'];
    $monfichier = fopen("./stats/loire.txt", 'r+');

    $pages_vues = fgets($monfichier);
    if (!isset($_GET['verif'])) {
        $pages_vues += 1;
    }
    fseek($monfichier, 0);
    fputs($monfichier, $pages_vues);

    fclose($monfichier);

    return  $pages_vues;
}
function viewers5()
{
    $departement = $_GET['departement'];
    $monfichier = fopen("./stats/corse.txt", 'r+');

    $pages_vues = fgets($monfichier);
    if (!isset($_GET['verif'])) {
        $pages_vues += 1;
    }
    fseek($monfichier, 0);
    fputs($monfichier, $pages_vues);

    fclose($monfichier);

    return  $pages_vues;
}
function viewers6()
{
    $departement = $_GET['departement'];
    $monfichier = fopen("./stats/est.txt", 'r+');

    $pages_vues = fgets($monfichier);
    if (!isset($_GET['verif'])) {
        $pages_vues += 1;
    }
    fseek($monfichier, 0);
    fputs($monfichier, $pages_vues);

    fclose($monfichier);

    return  $pages_vues;
}
function viewers7()
{
    $departement = $_GET['departement'];
    $monfichier = fopen("./stats/hauts.txt", 'r+');

    $pages_vues = fgets($monfichier);
    if (!isset($_GET['verif'])) {
        $pages_vues += 1;
    }
    fseek($monfichier, 0);
    fputs($monfichier, $pages_vues);

    fclose($monfichier);

    return  $pages_vues;
}
function viewers8()
{
    $departement = $_GET['departement'];
    $monfichier = fopen("./stats/idf.txt", 'r+');

    $pages_vues = fgets($monfichier);
    if (!isset($_GET['verif'])) {
        $pages_vues += 1;
    }
    fseek($monfichier, 0);
    fputs($monfichier, $pages_vues);

    fclose($monfichier);

    return  $pages_vues;
}
function viewers9()
{
    $departement = $_GET['departement'];
    $monfichier = fopen("./stats/normandie.txt", 'r+');

    $pages_vues = fgets($monfichier);
    if (!isset($_GET['verif'])) {
        $pages_vues += 1;
    }
    fseek($monfichier, 0);
    fputs($monfichier, $pages_vues);

    fclose($monfichier);

    return  $pages_vues;
}
function viewers10()
{
    $departement = $_GET['departement'];
    $monfichier = fopen("./stats/aquitaine.txt", 'r+');

    $pages_vues = fgets($monfichier);
    if (!isset($_GET['verif'])) {
        $pages_vues += 1;
    }
    fseek($monfichier, 0);
    fputs($monfichier, $pages_vues);

    fclose($monfichier);

    return  $pages_vues;
}
function viewers11()
{
    $departement = $_GET['departement'];
    $monfichier = fopen("./stats/occitanie.txt", 'r+');

    $pages_vues = fgets($monfichier);
    if (!isset($_GET['verif'])) {
        $pages_vues += 1;
    }
    fseek($monfichier, 0);
    fputs($monfichier, $pages_vues);

    fclose($monfichier);

    return  $pages_vues;
}
function viewers12()
{
    $departement = $_GET['departement'];
    $monfichier = fopen("./stats/laloire.txt", 'r+');

    $pages_vues = fgets($monfichier);
    if (!isset($_GET['verif'])) {
        $pages_vues += 1;
    }
    fseek($monfichier, 0);
    fputs($monfichier, $pages_vues);

    fclose($monfichier);

    return  $pages_vues;
}
function viewers13()
{
    $departement = $_GET['departement'];
    $monfichier = fopen("./stats/provence.txt", 'r+');

    $pages_vues = fgets($monfichier);
    if (!isset($_GET['verif'])) {
        $pages_vues += 1;
    }
    fseek($monfichier, 0);
    fputs($monfichier, $pages_vues);

    fclose($monfichier);

    return  $pages_vues;
}
function image($f)
{

    if ((WEATHER[$f->weather]) == "Averses de pluie locales et faibles" || (WEATHER[$f->weather]) == "Averses de pluie locales" ||(WEATHER[$f->weather]) == "Averses locales et fortes" ||(WEATHER[$f->weather]) == "Averses de pluie faibles" ||(WEATHER[$f->weather]) == "Averses de pluie" ||(WEATHER[$f->weather]) == "Averses de pluie fortes" ||(WEATHER[$f->weather]) == "Averses de pluie faibles et fr??quentes" ||(WEATHER[$f->weather]) == "Averses de pluie fr??quentes" ||(WEATHER[$f->weather]) == "Averses de pluie fortes et fr??quentes" ||(WEATHER[$f->weather]) == "Averses de gr??le" ) {
        echo "<div class='image'>";
        echo "<img src='./images/averse.png' title=".WEATHER[$f->weather].">";
        echo"</div>";
    }
    if ((WEATHER[$f->weather]) == "Brouillard" || (WEATHER[$f->weather]) == "Brouillard givrant"|| (WEATHER[$f->weather]) == "Bruine") {
        echo "<div class='image'>";
        echo "<img src='./images/brouillard.png' title=".WEATHER[$f->weather].">";
        echo"</div>";
    }
    if ((WEATHER[$f->weather]) == "Couvert" ) {
        echo "<div class='image'>";
        echo "<img src='./images/couvert.png' title=".WEATHER[$f->weather].">";
        echo"</div>";
    }
    if ((WEATHER[$f->weather]) == "Neige faible" || (WEATHER[$f->weather]) == "Neige mod??r??e"||(WEATHER[$f->weather]) == "Neige forte" || (WEATHER[$f->weather]) == "Pluie et neige m??l??es faibles" ||(WEATHER[$f->weather]) == "Pluie et neige m??l??es mod??r??es" ||(WEATHER[$f->weather]) == "Pluie et neige m??l??es fortes" ||(WEATHER[$f->weather]) == "Pluie et neige m??l??es fortes" ||(WEATHER[$f->weather]) == "Averses de neige localis??es" ||(WEATHER[$f->weather]) == "Averses de neige localis??es et fortes" ||(WEATHER[$f->weather]) == "Averses de neige faibles" ||(WEATHER[$f->weather]) == "Averses de neige" ||(WEATHER[$f->weather]) == "Averses de neige fortes" ||(WEATHER[$f->weather]) == "Averses de neige faibles et fr??quentes" ||(WEATHER[$f->weather]) == "Averses de neige fr??quentes" ||(WEATHER[$f->weather]) == "Averses de neige fortes et fr??quentes" ||(WEATHER[$f->weather]) == "Averses de pluie et neige m??l??es localis??es et faibles" ||(WEATHER[$f->weather]) == "Averses de pluie et neige m??l??es localis??es" ||(WEATHER[$f->weather]) == "Averses de pluie et neige m??l??es localis??es et fortes" ||(WEATHER[$f->weather]) == "Averses de pluie et neige m??l??es faibles" ||(WEATHER[$f->weather]) == "Averses de pluie et neige m??l??es" ||(WEATHER[$f->weather]) == "Averses de pluie et neige m??l??es fortes" ||(WEATHER[$f->weather]) == "Averses de pluie et neige m??l??es faibles et nombreuses" ||(WEATHER[$f->weather]) == "Averses de pluie et neige m??l??es fr??quentes" ||(WEATHER[$f->weather]) == "Averses de pluie et neige m??l??es fortes et fr??quentes"||(WEATHER[$f->weather]) == "Neige faible intermittente"||(WEATHER[$f->weather]) == "Neige mod??r??e intermittente"||(WEATHER[$f->weather]) == "Neige forte intermittente"||(WEATHER[$f->weather]) == "Pluie et neige m??l??es") {
        echo "<div class='image'>";
        echo "<img src='./images/neige.png' title=".WEATHER[$f->weather].">";
        echo"</div>";
    }
    if ((WEATHER[$f->weather]) == "Peu nuageux" || (WEATHER[$f->weather]) == "Ciel voil??"|| (WEATHER[$f->weather]) == "Nuageux" ||(WEATHER[$f->weather]) == "Tr??s nuageux" ) {
        echo "<div class='image'>";
        echo "<img src='./images/nuage.png' title=".WEATHER[$f->weather].">";
        echo"</div>";
    }
    if((WEATHER[$f->weather]) == "Orages faibles et locaux" || (WEATHER[$f->weather]) == "Orages locaux" ||(WEATHER[$f->weather]) == "Orages fort et locaux" ||(WEATHER[$f->weather]) == "Orages faibles" ||(WEATHER[$f->weather]) == "Orages" ||(WEATHER[$f->weather]) == "Orages forts" ||(WEATHER[$f->weather]) == "Orages faibles et fr??quents" ||(WEATHER[$f->weather]) == "Orages fr??quents" ||(WEATHER[$f->weather]) == "Orages forts et fr??quents" ||(WEATHER[$f->weather]) == "Orages faibles et locaux de neige ou gr??sil" ||(WEATHER[$f->weather]) == "Orages locaux de neige ou gr??sil" ||(WEATHER[$f->weather]) == "Orages de neige ou gr??sil" ||(WEATHER[$f->weather]) == "Orages faibles et fr??quents de neige ou gr??sil" ||(WEATHER[$f->weather]) == "Orages fr??quents de neige ou gr??sil"  ||(WEATHER[$f->weather]) == "Orages faibles et locaux de pluie et neige m??l??es ou gr??sil" ||(WEATHER[$f->weather]) == "Orages locaux de pluie et neige m??l??es ou gr??sil" ||(WEATHER[$f->weather]) == "Orages fort et locaux de pluie et neige m??l??es ou gr??sil" ||(WEATHER[$f->weather]) == "Orages faibles de pluie et neige m??l??es ou gr??sil" ||(WEATHER[$f->weather]) == "Orages de pluie et neige m??l??es ou gr??sil" ||(WEATHER[$f->weather]) == "Orages forts de pluie et neige m??l??es ou gr??sil" ||(WEATHER[$f->weather]) == "Orages faibles et fr??quents de pluie et neige m??l??es ou gr??sil" ||(WEATHER[$f->weather]) == "Orages fr??quents de pluie et neige m??l??es ou gr??sil" ||(WEATHER[$f->weather]) == "Orages forts et fr??quents de pluie et neige m??l??es ou gr??sil" ||(WEATHER[$f->weather]) == "Neige ?? caract??re orageux"){
        echo "<div class='image'>";
        echo "<img src='./images/orage.png' title=".WEATHER[$f->weather].">";
        echo"</div>";
    }
    if((WEATHER[$f->weather]) == "Pluie faible" || (WEATHER[$f->weather]) == "Pluie mod??r??e" ||(WEATHER[$f->weather]) == "Pluie forte" ||(WEATHER[$f->weather]) == "Pluie faible vergla??ante" ||(WEATHER[$f->weather]) == "Pluie mod??r??e vergla??ante" ||(WEATHER[$f->weather]) == "Pluie forte vergla??ante" ||(WEATHER[$f->weather]) == "Pluie faible intermittente" ||(WEATHER[$f->weather]) == "Pluie mod??r??e intermittente" ||(WEATHER[$f->weather]) == "Pluie forte intermittente"  ){
        echo "<div class='image'>";
        echo "<img src='./images/pluie.png' title=".WEATHER[$f->weather].">";
        echo"</div>";
    }
    if((WEATHER[$f->weather]) == "Pluies orageuses" || (WEATHER[$f->weather]) == "Pluie et neige m??l??es ?? caract??re orageux" ){
        echo "<div class='image'>";
        echo "<img src='./images/pluie_orage.png' title=".WEATHER[$f->weather].">";
        echo"</div>";
    }
    if((WEATHER[$f->weather]) == "Soleil"  ){
        echo "<div class='image'>";
        echo "<img src='./images/soleil.png' title=".WEATHER[$f->weather].">";
        echo"</div>";
    }
}
?>
