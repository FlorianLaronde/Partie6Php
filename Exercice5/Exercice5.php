<!-- Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher : Exercice5.php?week=12 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5</title>
</head>
<body>
    <p>
        <?php
                if (isset($_GET['week']) )
                {
                    // 1 : On force la conversion en nombre entier
                    $_GET['week'] = (int) $_GET['week'];

                    // 2 : Le nombre doit être compris entre 1 et 1000
                    if ($_GET['week'] >= 1 && $_GET['week'] <= 1000) 
                    {	
                       
                        
                        echo $_GET['week'];
                        
                    } else {
                        
                    }
                }
                else
                {
                echo 'Le nombre de semaine est trop grand !';
                }
        ?>
    </p>
</body>
</html>