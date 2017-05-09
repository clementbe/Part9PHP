
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>tpp9</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="align">
            <a href="../part9exo1/index.php"><button class="button">Exercice 1</button></a>
            <a href="../part9exo2/index.php"><button class="button">Exercice 2</button></a>
            <a href="../part9exo3/index.php"><button class="button">Exercice 3</button></a>
            <a href="../part9exo4/index.php"><button class="button">Exercice 4</button></a>
            <a href="../part9exo5/index.php"><button class="button">Exercice 5</button></a>
            <a href="../part9exo6/index.php"><button class="button">Exercice 6</button></a>
            <a href="../part9exo7/index.php"><button class="button">Exercice 7</button></a>
            <a href="../part9exo8/index.php"><button class="button">Exercice 8</button></a>
            <a href="../tp/index.php"><button class="button">tp</button></a>
        </div>
        <div class="php">
            <form method="POST">
                <?php
// Variable qui ajoutera l'attribut selected de la liste déroulante
                $selected = '';
// Parcours du tableau
                echo '<select name="years">', "\n";
                for ($i = date('Y'); $i <= date('Y') + 14; $i++) {
// L'année est-elle l'année courante ?
                    if ($i == date('Y')) {
                        $selected = ' selected="selected"';
                    }
// Affichage de la ligne
                    echo "\t", '<option value="', $i, '"', $selected, '>', $i, '</option>', "\n";
// Remise à zéro de $selected
                    $selected = '';
                } echo '</select>', "\n";
                ?>
                <!-- Liste déroulante des mois -->
                <select name="months" id="months">
                    <?php
                    // Initialisation du tableau des mois
                    $monthsArray = array(
                        '1' => 'Janvier',
                        '2' => 'Février',
                        '3' => 'Mars',
                        '4' => 'Avril',
                        '5' => 'Mai',
                        '6' => 'Juin',
                        '7' => 'Juillet',
                        '8' => 'Août',
                        '9' => 'Septembre',
                        '10' => 'Octobre',
                        '11' => 'Novembre',
                        '12' => 'Décembre',
                    );
                    // Variable qui ajoutera l'attribut selected au mois courant
                    $selected = '';
                    // Parcours du tableau
                    // Pour chaque ligne du tableau $monthsArray on stocke la valeur de cette ligne dans $monthName
                    foreach ($monthsArray as $monthValue => $monthName) {
                        // Si le mois est Janvier
                        if ($monthName === 'Janvier') {
                            // Il prend l'attribut selected
                            $selected = ' selected';
                        }
                        // On affiche la ligne avec les bonnes valeurs
                        echo '<option value="' . $monthValue . '"' . $selected . '>' . $monthName . '</option>';
                        // Remise à zéro de $selected
                        $selected = '';
                    }
                    ?>
                </select>
                <input type="submit" value="validation">
            </form>
                 <?php

                 function build_calendar($month, $year) {
                     // Tableau du jour de la semaine.
                     $daysOfWeek = array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi');
                     //Quel est le premier jour du mois en question?
                     $firstDayOfMonth = mktime(0, 0, 0, $month, 1, $year);
                     // Combien de jours contient ce mois-ci?
                     $numberDays = date('t', $firstDayOfMonth);
                     // Récupérer des informations sur le premier jour de la
                     // mois en question.
                     $dateComponents = getdate($firstDayOfMonth);
                     // Quel est le nom du mois en question?
                     $monthName = $dateComponents['month'];
                     // Quelle est la valeur de l'indice (0-6) du premier jour de la
                     // mois en question.
                     $dayOfWeek = $dateComponents['wday'];
                     // Crée l'ouvre-étiquette de table et les en-têtes de jour
                     $calendar = "<table class='calendar'>";
                     $calendar .= "<caption>$monthName $year</caption>";
                     $calendar .= "<tr>";
                     // Crée les en-têtes de calendrier
                     foreach ($daysOfWeek as $day) {
                         $calendar .= "<th class='header'>$day</th>";
                     }
                     // Crée le reste du calendrier
                     // Lancer le compteur du jour, en commençant par le 1er.
                     $currentDay = 1;
                     $calendar .= "</tr><tr>";
                     // La variable $ dayOfWeek est utilisée pour
                     // assurez-vous que le calendrier
                     // affichage se compose exactement de 7 colonnes.
                     if ($dayOfWeek > 0) {
                         $calendar .= "<td colspan='$dayOfWeek'>&nbsp;</td>";
                     }
                     $month = str_pad($month, 2, "0", STR_PAD_LEFT);
                     while ($currentDay <= $numberDays) {
// Septième colonne (samedi) a atteint. Démarrez une nouvelle ligne.
                         if ($dayOfWeek == 7) {
                             $dayOfWeek = 0;
                             $calendar .= "</tr><tr>";
                         }
                         $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);
                         $date = "$year-$month-$currentDayRel";
                         $calendar .= "<td class='day' rel='$date'>$currentDay</td>";
                         // Increment Counters
                         $currentDay++;
                         $dayOfWeek++;
                     }
                     // Complète la ligne de la dernière semaine en mois, si nécessaire
                     if ($dayOfWeek != 7) {
                         $remainingDays = 7 - $dayOfWeek;
                         $calendar .= "<td colspan='$remainingDays'>&nbsp;</td>";
                     }
                     $calendar .= "</tr>";
                     $calendar .= "</table>";
                     return $calendar;
                 }
                 ?>
                 <?php
                 // Si les variables du mois et de l'année existent
                 if (isset($_POST['months']) && isset($_POST['years'])) {
                     // $month prend la valeur du mois
                     $month = $_POST['months'];
                     // $year prend la valeur de l'année
                     $year = $_POST['years'];
                     // On contruit le tableau avec la fonction
                     echo build_calendar($month, $year);
                 }
                 ?>
    </div>
</body>
</html>