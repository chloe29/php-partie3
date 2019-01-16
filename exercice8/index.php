<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Exercice 8</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        // initialisation de la variable; condition qui doit être remplie; décrémentation de la variable avec un pas de 12
        for($nbr = 200; $nbr >= 0; $nbr-=12)
        {
            echo ' Enfin ' . $nbr . ' !!!!';
        }
    ?>
</body>
</html>