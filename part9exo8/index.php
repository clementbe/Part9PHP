<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo8p9</title>
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
            $date = date("j-m-Y"); //  ici la date courante
            $timestamp = strtotime($date); // convertion de la date en seconde
            $timestamp2 = $timestamp - 1900800; //ajout de 22 jours en secondes 86 400 (Pour 1 jour en seconde) * 20 pour 20 jours.
            $date1= date('j-m-Y', $timestamp2);//Convertion de valeur en jour
            echo $date1;//affichage de la date - 22 jours.
            ?>
        </div>
    </body>
</html>