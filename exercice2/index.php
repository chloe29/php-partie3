<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Exercice 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
       $nbr_1 = 0;
       $nbr_2 = 5;
        // tant que la variable $nbr_1 n'est pas supérieur à 20 on continue la boucle
       while($nbr_1 <= 20)
       {
            // on multiplie la varible $nbr_1 par la variable $nbr_2
           $nbr = $nbr_1 * $nbr_2;
            // on affiche le résultat de la multiplication du dessus
           echo ' Le résultat est ' . $nbr;
            // on incrément la variable $nbr_1
           $nbr_1++;
        
       }
    ?>
</body>
</html>