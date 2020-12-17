<!-- Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher : Exercice3.php?startDate=2/05/2016&endDate=27/11/2016 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
</head>
<body>
    <p>
        <?php
            if (isset($_GET['startDate']) && isset($_GET['endDate'])) // On a le début et la fin de la date 
            {
                echo  $_GET['startDate'] . ' ' . $_GET['endDate'] . ' !';
            }
            else // Il manque des paramètres, on avertit le visiteur
            {
                echo 'Il faut renseigner le début et la fin de la date !';
            }
        ?>
    </p>
</body>
</html>