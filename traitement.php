    <?php require './include/header.inc.php'; ?>


        <div class="page">
         
            <p>Veuillez choisir une ville pour consulter sa meteo</p>
            <?php
            if (isset($_GET['departement'])) {
                echo $_GET['departement'];
                $departement = $_GET['departement'];
            }
            ?>
            <?php echo "<form name='form1' method='post' action='meteo.php?token=0af6470239c2fa3d9950ffbc908bf28e8dac350c343fca555d4adafd244ccc3a&#38;departement=$departement' >";
            ?>
            <fieldset style="width: 1000px">
                <legend>Veuillez choisir une ville</legend>
                <select name="Ville">
                    <option>----Choix----</option>
                    <?php
                    $fileHandle = fopen("ville.csv", "r");
                    while (($row = fgetcsv($fileHandle, 1000, ";", '"')) !== FALSE) {
                        if ($row[1] == "$departement") {
                            $cats = $row[0];
                            echo "<OPTION VALUE='$cats'>" . $cats . "</OPTION>";
                        }
                    }
                    ?>
                    
                </select>
                <input type="submit" name="valider" value="valider" />
            </fieldset>
            </form>



        </div>
        <?php require './include/footer.inc.php'; ?>