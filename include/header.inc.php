<?php
if (isset($_POST['Ville'])) {
    setcookie('ville', $_POST['Ville'], time() + 365 * 24 * 3600, null, null, false, true);
}
if (($_POST['jour']) == 1) {
    setcookie('tendance', 'Par semaine', time() + 365 * 24 * 3600, null, null, false, true);
}
if (($_POST['jour']) == 3) {
    setcookie('tendance', 'Par période de la journée', time() + 365 * 24 * 3600, null, null, false, true);
}
if (($_POST['jour']) == 4) {
    setcookie('tendance', 'Par heures', time() + 365 * 24 * 3600, null, null, false, true);
}

?>

<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />
    <title>Dev Web Meteo</title>

</head>

<body>
<nav>
    <ul>
        <li><img src="./images/logo.png" height="41" alt="logo" /></li>
        <li> <a href="index.php"> Accueil </a></li>
        <li> <a href="stats.php?verif=1"> Page Statistique </a></li>

    </ul>


    <?php
    date_default_timezone_set('Europe/Paris');

    $script_tz = date_default_timezone_get();
    $day = date('w');
    $month = date('m');
    $nd = date('d');
    $annee = date('Y');
    $heure = date('H \H i \m\i\n');
    $JoursSemaine = array("Dimanche ", "Lundi ", "Mardi ", "Mercredi ", "Jeudi ", "Vendredi ", "Samedi ");
    $jour = $JoursSemaine[$day];
    $Moi = array(
        "01" => " Janvier ",
        "02" => " Février ",
        "03" => " Mars ",
        "04" => " Avril ",
        "05" => " Mai ",
        "06" => " Juin ",
        "07" => " Juillet ",
        "08" => " Août ",
        "09" => " Septembre ",
        "10" => " Octobre ",
        "11" => " Novembre ",
        "12" => " Décembre "
    );
    $moi = $Moi[$month];
    echo "<div class='date'>";
    echo '<p>Nous sommes le ' . $jour . $nd . $moi . $annee . ' et il est ' . $heure . '</p>';
    echo "</div>";
    ?>

</nav>