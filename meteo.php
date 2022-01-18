    <?php require './include/header.inc.php';
    include './include/fonction.inc.php';
    const WEATHER = [
        0 => "Soleil",
        1 => "Peu nuageux",
        2 => "Ciel voilé",
        3 => "Nuageux",
        4 => "Très nuageux",
        5 => "Couvert",
        6 => "Brouillard",
        7 => "Brouillard givrant",
        10 => "Pluie faible",
        11 => "Pluie modérée",
        12 => "Pluie forte",
        13 => "Pluie faible verglaçante",
        14 => "Pluie modérée verglaçante",
        15 => "Pluie forte verglaçante",
        16 => "Bruine",
        20 => "Neige faible",
        21 => "Neige modérée",
        22 => "Neige forte",
        30 => "Pluie et neige mêlées faibles",
        31 => "Pluie et neige mêlées modérées",
        32 => "Pluie et neige mêlées fortes",
        40 => "Averses de pluie locales et faibles",
        41 => "Averses de pluie locales",
        42 => "Averses locales et fortes",
        43 => "Averses de pluie faibles",
        44 => "Averses de pluie",
        45 => "Averses de pluie fortes",
        46 => "Averses de pluie faibles et fréquentes",
        47 => "Averses de pluie fréquentes",
        48 => "Averses de pluie fortes et fréquentes",
        60 => "Averses de neige localisées et faibles",
        61 => "Averses de neige localisées",
        62 => "Averses de neige localisées et fortes",
        63 => "Averses de neige faibles",
        64 => "Averses de neige",
        65 => "Averses de neige fortes",
        66 => "Averses de neige faibles et fréquentes",
        67 => "Averses de neige fréquentes",
        68 => "Averses de neige fortes et fréquentes",
        70 => "Averses de pluie et neige mêlées localisées et faibles",
        71 => "Averses de pluie et neige mêlées localisées",
        72 => "Averses de pluie et neige mêlées localisées et fortes",
        73 => "Averses de pluie et neige mêlées faibles",
        74 => "Averses de pluie et neige mêlées",
        75 => "Averses de pluie et neige mêlées fortes",
        76 => "Averses de pluie et neige mêlées faibles et nombreuses",
        77 => "Averses de pluie et neige mêlées fréquentes",
        78 => "Averses de pluie et neige mêlées fortes et fréquentes",
        100 => "Orages faibles et locaux",
        101 => "Orages locaux",
        102 => "Orages fort et locaux",
        103 => "Orages faibles",
        104 => "Orages",
        105 => "Orages forts",
        106 => "Orages faibles et fréquents",
        107 => "Orages fréquents",
        108 => "Orages forts et fréquents",
        120 => "Orages faibles et locaux de neige ou grésil",
        121 => "Orages locaux de neige ou grésil",
        122 => "Orages locaux de neige ou grésil",
        123 => "Orages faibles de neige ou grésil",
        124 => "Orages de neige ou grésil",
        125 => "Orages de neige ou grésil",
        126 => "Orages faibles et fréquents de neige ou grésil",
        127 => "Orages fréquents de neige ou grésil",
        128 => "Orages fréquents de neige ou grésil",
        130 => "Orages faibles et locaux de pluie et neige mêlées ou grésil",
        131 => "Orages locaux de pluie et neige mêlées ou grésil",
        132 => "Orages fort et locaux de pluie et neige mêlées ou grésil",
        133 => "Orages faibles de pluie et neige mêlées ou grésil",
        134 => "Orages de pluie et neige mêlées ou grésil",
        135 => "Orages forts de pluie et neige mêlées ou grésil",
        136 => "Orages faibles et fréquents de pluie et neige mêlées ou grésil",
        137 => "Orages fréquents de pluie et neige mêlées ou grésil",
        138 => "Orages forts et fréquents de pluie et neige mêlées ou grésil",
        140 => "Pluies orageuses",
        141 => "Pluie et neige mêlées à caractère orageux",
        142 => "Neige à caractère orageux",
        210 => "Pluie faible intermittente",
        211 => "Pluie modérée intermittente",
        212 => "Pluie forte intermittente",
        220 => "Neige faible intermittente",
        221 => "Neige modérée intermittente",
        222 => "Neige forte intermittente",
        230 => "Pluie et neige mêlées",
        231 => "Pluie et neige mêlées",
        232 => "Pluie et neige mêlées",
        235 => "Averses de grêle",
    ]; ?>


   

        <div class="page">
         


            <?php
            $fileHandle = fopen("ville.csv", "r");
            $departement = $_GET['departement'];
            while (($row = fgetcsv($fileHandle, 1000, ";", '"')) !== FALSE) {
                if ($row[0] == $_POST['Ville']) {
                    $inse = $row[2];
                }
            }
            echo "<br/>";
            if (isset($_POST['jour'])) {
                $inse = $_GET['inse'];
                echo "Voici la méteo de " . $_GET['ville'] . " de code Inse : " . $inse . " : ";
                $ville = $_GET['ville'];
            } else {
                echo "Voici la méteo de " . $_POST['Ville'] . " de code Inse : " . $inse . " : ";
                $ville = $_POST['Ville'];
            }

            ?>
            <?php

            $data = file_get_contents("https://api.meteo-concept.com/api/forecast/nextHours?token=0af6470239c2fa3d9950ffbc908bf28e8dac350c343fca555d4adafd244ccc3a&hourly=true&insee=$inse");

            if ($data !== false) {
                $forecast = json_decode($data)->forecast;

                $temp = $forecast[0]->temp2m;
                echo "<br/>";
                print("\tIl fait actuellement {$temp}°C \n");
                echo "<br/>";
            }

            ?>

            <?php
            if (!isset($_POST['jour'])) {
                $data = file_get_contents("https://api.meteo-concept.com/api/forecast/nextHours?token=0af6470239c2fa3d9950ffbc908bf28e8dac350c343fca555d4adafd244ccc3a&hourly=true&insee=$inse");

                if ($data !== false) {
                    $forecast = json_decode($data)->forecast;
                    echo "<br/>";
                    print("Meteo des 4 prochaines heures:");
                    echo "<br/>";
                    for ($j = 1; $j < 5; $j++) {

                        echo "<div class='heure'>";
                        echo "<div class='heures'>";
                        print((new \DateTime($forecast[$j]->datetime))->format('H:i  '));
                        echo "</div>";
                        $temp = $forecast[$j]->temp2m;
                        echo "<div class='temperature'>";
                        print("\t{$temp}°C \n");
                        echo "</div>";
                        image($forecast[$j]);
                        echo "</div>";
                        echo "<br/>";
                    }
                    echo "<br/>";
                }
            }
            ?>
            <?php
            if (($_POST['jour']) == 1) {
                $url = "https://api.meteo-concept.com/api/forecast/daily?insee=$inse";
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json', 'X-AUTH-TOKEN: 0af6470239c2fa3d9950ffbc908bf28e8dac350c343fca555d4adafd244ccc3a'));
                curl_setopt($ch, CURLOPT_HEADER, false);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                if ($data !== false)
                    $status = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
                curl_close($ch);

                if ($data !== false && $status === 200) {
                    $decoded = json_decode($data);
                    $city = $decoded->city;
                    $forecasts = $decoded->forecast;

                    $saturday = null;
                    foreach ($forecasts as $k => $f) {
                        $day = (new \DateTime($f->datetime))->format('w');

                        if ($day == 0) {
                            $monday = $k;
                            break;
                        }
                    }

                    print(" Les températures mini/maxi seront :\n");
                    echo ("<br/>");
                    echo "<div class='heure'>";
                    echo "<div class='heures'>";
                    print((new \DateTime($forecasts[$monday + 1]->datetime))->format('d/m '));
                    echo "</div>";
                    echo "<div class='temperature'>";
                    print("{$forecasts[$monday + 1]->tmin}°C/{$forecasts[$monday + 1]->tmax}°C\n");
                    echo "</div>";
                    image($forecast[$monday + 1]);
                    echo "</div>";
                    echo ("<br/>");
                    echo "<div class='heure'>";
                    echo "<div class='heures'>";
                    print((new \DateTime($forecasts[$monday + 2]->datetime))->format('d/m '));
                    echo "</div>";
                    echo "<div class='temperature'>";
                    print("{$forecasts[$monday + 2]->tmin}°C/{$forecasts[$monday + 2]->tmax}°C\n");
                    echo "</div>";
                    image($forecast[$monday + 2]);
                    echo "</div>";
                    echo ("<br/>");
                    echo "<div class='heure'>";
                    echo "<div class='heures'>";
                    print((new \DateTime($forecasts[$monday + 3]->datetime))->format('d/m '));
                    echo "</div>";
                    echo "<div class='temperature'>";
                    print(" {$forecasts[$monday + 3]->tmin}°C/{$forecasts[$monday + 3]->tmax}°C\n");
                    echo "</div>";
                    image($forecast[$monday + 3]);
                    echo "</div>";
                    echo ("<br/>");
                    echo "<div class='heure'>";
                    echo "<div class='heures'>";
                    print((new \DateTime($forecasts[$monday + 4]->datetime))->format('d/m '));
                    echo "</div>";
                    echo "<div class='temperature'>";
                    print(" {$forecasts[$monday + 4]->tmin}°C/{$forecasts[$monday + 4]->tmax}°C\n");
                    echo "</div>";
                    image($forecast[$monday + 4]);
                    echo "</div>";
                    echo ("<br/>");
                    echo "<div class='heure'>";
                    echo "<div class='heures'>";
                    print((new \DateTime($forecasts[$monday + 5]->datetime))->format('d/m '));
                    echo "</div>";
                    echo "<div class='temperature'>";
                    print(" {$forecasts[$monday + 5]->tmin}°C/{$forecasts[$monday + 5]->tmax}°C\n");
                    echo "</div>";
                    image($forecast[$monday + 5]);
                    echo "</div>";
                    echo ("<br/>");
                    echo "<div class='heure'>";
                    echo "<div class='heures'>";
                    print((new \DateTime($forecasts[$monday + 6]->datetime))->format('d/m '));
                    echo "</div>";
                    echo "<div class='temperature'>";
                    print(" {$forecasts[$monday + 6]->tmin}°C/{$forecasts[$monday + 6]->tmax}°C\n");
                    echo "</div>";
                    image($forecast[$monday + 6]);
                    echo "</div>";
                    echo ("<br/>");
                }
            }
            ?>
            <br />


            <?php
            if (($_POST['jour']) == 3) {
                $data = file_get_contents("https://api.meteo-concept.com/api/forecast/daily/periods?token=0af6470239c2fa3d9950ffbc908bf28e8dac350c343fca555d4adafd244ccc3a&insee=$inse");

                if ($data !== false) {
                    $decoded = json_decode($data);
                    $forecast = $decoded->forecast;
                    echo "<br/>";
                    print("Temperature pour les 4 prochains jours par période\n");
                    echo "<br/>";
                    for ($i = 1; $i < 5; $i++) {
                        $date = new \DateTime($forecast[$i][0]->datetime);
                        $temp = $forecast[$i][0]->temp2m;
                        echo "<div class='heure'>";
                        echo "<div class='heures'>";
                        print("\t{$date->format('d/m')}\n");
                        echo "</div>";
                        echo "<div class='temperature'>";
                        print("{$temp}°C la nuit");
                        echo "</div>";
                        image($forecast[$i][0]);
                        echo "</div>";
                        echo "<br/>";


                        $temp = $forecast[$i][1]->temp2m;
                        echo "<div class='heure'>";
                        echo "<div class='heures'>";
                        print("\t{$date->format('d/m')}\n");
                        echo "</div>";
                        echo "<div class='temperature'>";
                        print("{$temp}°C le matin");
                        echo "</div>";
                        image($forecast[$i][1]);
                        echo "</div>";
                        echo "<br/>";


                        $temp = $forecast[$i][2]->temp2m;
                        echo "<div class='heure'>";
                        echo "<div class='heures'>";
                        print("\t{$date->format('d/m')}\n");
                        echo "</div>";
                        echo "<div class='temperature'>";
                        print("{$temp}°C l'après-midi");
                        echo "</div>";
                        image($forecast[$i][2]);
                        echo "</div>";
                        echo "<br/>";


                        $temp = $forecast[$i][3]->temp2m;
                        echo "<div class='heure'>";
                        echo "<div class='heures'>";
                        print("\t{$date->format('d/m')}\n");
                        echo "</div>";
                        echo "<div class='temperature'>";
                        print("{$temp}°C le soir");
                        echo "</div>";
                        image($forecast[$i][3]);
                        echo "</div>";
                        echo "<br/>";
                        echo "<br/>";
                    }
                }
            }

            ?>
            <?php
            if (($_POST['jour']) == 4) {


                $data = file_get_contents("https://api.meteo-concept.com/api/forecast/nextHours?token=0af6470239c2fa3d9950ffbc908bf28e8dac350c343fca555d4adafd244ccc3a&hourly=true&insee=$inse");

                if ($data !== false) {
                    $forecast = json_decode($data)->forecast;

                    for ($j = 1; $j < count($forecast); $j++) {

                        echo "<div class='heure'>";
                        echo "<div class='heures'>";
                        print((new \DateTime($forecast[$j]->datetime))->format('H:i  '));
                        echo "</div>";
                        $temp = $forecast[$j]->temp2m;
                        echo "<div class='temperature'>";
                        print("\t{$temp}°C \n");
                        echo "</div>";
                        image($forecast[$j]); //On appelle la fonction image qui va afficher l'image soleil/orage etc... selon ce que retourne weather
                        echo "</div>";
                        echo "<br/>";
                    }
                }
                echo "<br/>";
            }
            ?>

            <?php

            $context = stream_context_create(
                array(
                    'http' =>
                    array(
                        'method' => "GET",
                        'header' => "X-AUTH-TOKEN: 0af6470239c2fa3d9950ffbc908bf28e8dac350c343fca555d4adafd244ccc3a\r\n"
                            . "Accept: application/json\r\n",
                    )
                )
            );


            $handle = fopen("https://api.meteo-concept.com/api/ephemeride/1?insee=$inse", "r", false, $context);
            if ($handle !== false) {
                $data = stream_get_contents($handle);
                fclose($handle);

                if ($data !== false) {
                    $cityEph = json_decode($data);
                    print("Demain, à {$cityEph->city->name}, le soleil se lèvera à {$cityEph->ephemeride->sunrise} et se couchera à {$cityEph->ephemeride->sunset}.\n");
                    print("On comptera " . abs($cityEph->ephemeride->diff_duration_day) . " minutes de jour de " . ($cityEph->ephemeride->diff_duration_day <= 0 ? "moins" : "plus") . " qu'aujourd'hui.\n");
                }
            }

            ?>



            <?php echo "<form name='form2' method='post' action='meteo.php?token=0af6470239c2fa3d9950ffbc908bf28e8dac350c343fca555d4adafd244ccc3a&#38;departement=$departement&#38;ville=$ville&#38;inse=$inse' >";
            ?>
            <fieldset>
                <input type="radio" id="j4" name="jour" value="4" />
                <label for="j4">11 Prochaines Heures</label>

                <input type="radio" id="j1" name="jour" value="1" />
                <label for="j1">6 prochains jours min/max</label>
                <input type="radio" id="j3" name="jour" value="3" />
                <label for="j3">Par période de la journée</label>
                <button type="submit" name="valider">Envoyer</button>
            </fieldset>
            </form>


        </div>
        <?php require './include/footer.inc.php'; ?>