<!-- Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher : Exercice4.php?language=PHP&server=LAMP -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
</head>
<body>
    <p>
        <?php
            if (isset($_GET['language']) && isset($_GET['server'])) // On a le début et la fin de la date 
            {
                echo  $_GET['language'] . ' ' . $_GET['server'] . ' !';
            }
            else // Il manque des paramètres, on avertit le visiteur
            {
                echo 'Il faut renseigner le language et le server !';
            }
        ?>
    </p>
</body>
</html>