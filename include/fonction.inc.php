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

    if ((WEATHER[$f->weather]) == "Averses de pluie locales et faibles" || (WEATHER[$f->weather]) == "Averses de pluie locales" ||(WEATHER[$f->weather]) == "Averses locales et fortes" ||(WEATHER[$f->weather]) == "Averses de pluie faibles" ||(WEATHER[$f->weather]) == "Averses de pluie" ||(WEATHER[$f->weather]) == "Averses de pluie fortes" ||(WEATHER[$f->weather]) == "Averses de pluie faibles et fréquentes" ||(WEATHER[$f->weather]) == "Averses de pluie fréquentes" ||(WEATHER[$f->weather]) == "Averses de pluie fortes et fréquentes" ||(WEATHER[$f->weather]) == "Averses de grêle" ) {
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
    if ((WEATHER[$f->weather]) == "Neige faible" || (WEATHER[$f->weather]) == "Neige modérée"||(WEATHER[$f->weather]) == "Neige forte" || (WEATHER[$f->weather]) == "Pluie et neige mêlées faibles" ||(WEATHER[$f->weather]) == "Pluie et neige mêlées modérées" ||(WEATHER[$f->weather]) == "Pluie et neige mêlées fortes" ||(WEATHER[$f->weather]) == "Pluie et neige mêlées fortes" ||(WEATHER[$f->weather]) == "Averses de neige localisées" ||(WEATHER[$f->weather]) == "Averses de neige localisées et fortes" ||(WEATHER[$f->weather]) == "Averses de neige faibles" ||(WEATHER[$f->weather]) == "Averses de neige" ||(WEATHER[$f->weather]) == "Averses de neige fortes" ||(WEATHER[$f->weather]) == "Averses de neige faibles et fréquentes" ||(WEATHER[$f->weather]) == "Averses de neige fréquentes" ||(WEATHER[$f->weather]) == "Averses de neige fortes et fréquentes" ||(WEATHER[$f->weather]) == "Averses de pluie et neige mêlées localisées et faibles" ||(WEATHER[$f->weather]) == "Averses de pluie et neige mêlées localisées" ||(WEATHER[$f->weather]) == "Averses de pluie et neige mêlées localisées et fortes" ||(WEATHER[$f->weather]) == "Averses de pluie et neige mêlées faibles" ||(WEATHER[$f->weather]) == "Averses de pluie et neige mêlées" ||(WEATHER[$f->weather]) == "Averses de pluie et neige mêlées fortes" ||(WEATHER[$f->weather]) == "Averses de pluie et neige mêlées faibles et nombreuses" ||(WEATHER[$f->weather]) == "Averses de pluie et neige mêlées fréquentes" ||(WEATHER[$f->weather]) == "Averses de pluie et neige mêlées fortes et fréquentes"||(WEATHER[$f->weather]) == "Neige faible intermittente"||(WEATHER[$f->weather]) == "Neige modérée intermittente"||(WEATHER[$f->weather]) == "Neige forte intermittente"||(WEATHER[$f->weather]) == "Pluie et neige mêlées") {
        echo "<div class='image'>";
        echo "<img src='./images/neige.png' title=".WEATHER[$f->weather].">";
        echo"</div>";
    }
    if ((WEATHER[$f->weather]) == "Peu nuageux" || (WEATHER[$f->weather]) == "Ciel voilé"|| (WEATHER[$f->weather]) == "Nuageux" ||(WEATHER[$f->weather]) == "Très nuageux" ) {
        echo "<div class='image'>";
        echo "<img src='./images/nuage.png' title=".WEATHER[$f->weather].">";
        echo"</div>";
    }
    if((WEATHER[$f->weather]) == "Orages faibles et locaux" || (WEATHER[$f->weather]) == "Orages locaux" ||(WEATHER[$f->weather]) == "Orages fort et locaux" ||(WEATHER[$f->weather]) == "Orages faibles" ||(WEATHER[$f->weather]) == "Orages" ||(WEATHER[$f->weather]) == "Orages forts" ||(WEATHER[$f->weather]) == "Orages faibles et fréquents" ||(WEATHER[$f->weather]) == "Orages fréquents" ||(WEATHER[$f->weather]) == "Orages forts et fréquents" ||(WEATHER[$f->weather]) == "Orages faibles et locaux de neige ou grésil" ||(WEATHER[$f->weather]) == "Orages locaux de neige ou grésil" ||(WEATHER[$f->weather]) == "Orages de neige ou grésil" ||(WEATHER[$f->weather]) == "Orages faibles et fréquents de neige ou grésil" ||(WEATHER[$f->weather]) == "Orages fréquents de neige ou grésil"  ||(WEATHER[$f->weather]) == "Orages faibles et locaux de pluie et neige mêlées ou grésil" ||(WEATHER[$f->weather]) == "Orages locaux de pluie et neige mêlées ou grésil" ||(WEATHER[$f->weather]) == "Orages fort et locaux de pluie et neige mêlées ou grésil" ||(WEATHER[$f->weather]) == "Orages faibles de pluie et neige mêlées ou grésil" ||(WEATHER[$f->weather]) == "Orages de pluie et neige mêlées ou grésil" ||(WEATHER[$f->weather]) == "Orages forts de pluie et neige mêlées ou grésil" ||(WEATHER[$f->weather]) == "Orages faibles et fréquents de pluie et neige mêlées ou grésil" ||(WEATHER[$f->weather]) == "Orages fréquents de pluie et neige mêlées ou grésil" ||(WEATHER[$f->weather]) == "Orages forts et fréquents de pluie et neige mêlées ou grésil" ||(WEATHER[$f->weather]) == "Neige à caractère orageux"){
        echo "<div class='image'>";
        echo "<img src='./images/orage.png' title=".WEATHER[$f->weather].">";
        echo"</div>";
    }
    if((WEATHER[$f->weather]) == "Pluie faible" || (WEATHER[$f->weather]) == "Pluie modérée" ||(WEATHER[$f->weather]) == "Pluie forte" ||(WEATHER[$f->weather]) == "Pluie faible verglaçante" ||(WEATHER[$f->weather]) == "Pluie modérée verglaçante" ||(WEATHER[$f->weather]) == "Pluie forte verglaçante" ||(WEATHER[$f->weather]) == "Pluie faible intermittente" ||(WEATHER[$f->weather]) == "Pluie modérée intermittente" ||(WEATHER[$f->weather]) == "Pluie forte intermittente"  ){
        echo "<div class='image'>";
        echo "<img src='./images/pluie.png' title=".WEATHER[$f->weather].">";
        echo"</div>";
    }
    if((WEATHER[$f->weather]) == "Pluies orageuses" || (WEATHER[$f->weather]) == "Pluie et neige mêlées à caractère orageux" ){
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
