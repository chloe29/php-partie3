<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Exercice 7</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        // initialisation de la variable; condition qui doit être remplie; incrémentation de la variable avec un pas de 15
        for($nbr = 1; $nbr <= 100; $nbr+=15)
        {
            echo ' On tient le bon bout ' . $nbr;
        }
    ?>
</body>
</html>