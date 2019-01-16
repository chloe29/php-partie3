<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Exercice 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        $nbr = 0;
        // Tant que la variable $nbr n'a pas atteint 10, on ajoute 1 avec $nbr++
        while ($nbr < 10)
        {
            echo ' Je suis la phrase n°' . $nbr;
            $nbr++;
        }
    ?>
</body>
</html>