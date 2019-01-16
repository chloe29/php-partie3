<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Exercice 4</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        $nbr = 1;
        while($nbr <= 10)
        {
            echo ' Le chiffre est ' . $nbr;
            // on incrémente de la moitié de la valeur de la variable ($nbr+=0.5)
            $nbr = $nbr + ($nbr/2);
        }
    ?>
</body>
</html>