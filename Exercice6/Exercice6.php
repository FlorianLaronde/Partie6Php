<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6</title>
</head>
<body>
    
<p> <?php 
        if(!empty($_GET['building']) && !empty($_GET['room'])){
            echo 'La réunion est dans le batiment ' . $_GET['building'] . ' en salle ' . $_GET['room'];
        } else if(!empty($_GET['building']) && empty($_GET['room'])){
            echo 'La réunion est dans le batiment ' . $_GET['building'] . '.';

        } else if(empty($_GET['building']) && !empty($_GET['room'])){
            echo 'La réunion est dans la salle ' . $_GET['room'] . '.';
        }else {
            echo 'Le lieu de la réunion n\'est pas defini';
        }
    ?> </p>
</body>
</html>