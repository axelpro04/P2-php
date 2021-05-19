<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3 p2</title>
</head>
<body>
    <?php
    $gender = 'homme' ;
    ?>
    <?php if ($gender != 'homme'){ ?>
        <p> c'est une développeuse. </p>
    <?php }
    else { ?>
       <p> c'est un developpeur. </p>
       <?php }
       ?>
</body>
</html>