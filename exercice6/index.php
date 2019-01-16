<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Exercice 6</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        // initialisation de la variable; condition qui doit être remplie; décrémentation de la variable
        for($nbr = 20; $nbr >= 0; $nbr--)
        {
            echo ' C\'est presque bon ' . $nbr;
        }
        // autre méthode :
        // $nbr_2 = 20;
        // while($nbr_2 <= 20 && $nbr_2 >= 0){
        //     echo ' C\'est presque bon ' . $nbr_2;
        //     $nbr_2--;
        // }
    ?>
</body>
</html>