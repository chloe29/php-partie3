<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Exercice 3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        $nbr_1 = 100;
        $nbr_2 = 2;
        // tant que la variable $nbr_1 n'est pas inférieure ou égale à 10 on continure la boucle
        while($nbr_1 >= 10)
        {
            // on multiplie les deux variables
            $nbrResult = $nbr_1 * $nbr_2;
            // on affiche le résultat de la multiplication
            echo ' Le résultat est ' . $nbrResult;
            // on décrémente la variable $nbr_1
            $nbr_1--;
        }
    ?>
</body>
</html>