<!-- Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher : Exercice1.php?lastname=Nemare&firstname=Jean -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>
<body>
    <p> <a href="index.php?lastname=Laronde&amp;firstname=Florian">Lien</a> </p>
    <p>

            <?php
                if (isset($_GET['firstname']) && isset($_GET['lastname'])) // On a le nom et le prénom
                {
                    echo 'Bonjour ' . $_GET['firstname'] . ' ' . $_GET['lastname'] . ' !';
                }
                else // Il manque des paramètres, on avertit le visiteur
                {
                    echo 'Il faut renseigner un nom et un prénom !';
                }
                var_dump($_GET);
            ?>
            
    </p>
</body>
</html>