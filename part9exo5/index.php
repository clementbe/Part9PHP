<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo5p9</title>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
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
            <?php
            $date1 = "16-05-2016"; //date fr le 16 mai 2016
            $date2 = date("j-m-Y"); // date courante
            // On transforme les 2 dates en timestamp
            $date3 = strtotime($date1);
            $date4 = strtotime($date2);
            // On récupère la différence de timestamp entre les 2 précédents
            $nbJoursTimestamp = $date4 - $date3;
            // ** Pour convertir le timestamp (exprimé en secondes) en jours **
            // On sait que 1 heure = 60 secondes * 60 minutes et que 1 jour = 24 heures donc :
            $nbJours = $nbJoursTimestamp / 86400; // 86 400 = 60*60*24
            echo "Nombre de jours : " . $nbJours; // dans mon exemple : Nombre de jours : 153
            ?>
        </div>
    </body>
</html>