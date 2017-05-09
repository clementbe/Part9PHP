<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo4p9</title>
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
            //timestamp du jour
            $date = new DateTime();
            //affichage du timestamp
            echo $date->format('H:i:s');
            ?>
            <br/>
            <?php
            $date = new DateTime('2016-08-02 15:00:00');
            echo $date->format('l j F o H:i:s') . "\n";
            ?>
        </div>
    </body>
</html>