<!-- Faire une page index.php. Tester sur cette page que le paramètre age existe et si c'est le cas l'afficher sinon le signaler : Exercice2.php?lastname=Nemare&firstname=Jean -->
<?php 
    $phrase='';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>
<body>
    <p> <a href="index.php?lastname=Laronde&amp;firstname=Florian"></a> </p>
    <p>
        <?php
            if (isset($_GET['age']) ) // On a l'âge
            {
                echo 'Votre age est de' .' ' .  $_GET['age'];
            }
            else // Il manque des paramètres, on avertit le visiteur
            {
                echo  'Il faut renseigner l\'âge !';
            }
        ?>
    </p>
</body>
</html>