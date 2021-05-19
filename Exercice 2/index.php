<?php 
$gender = 'Femme';
$age = 2;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2 p2</title>
</head>
<body>
<?php
            if ($gender == 'Homme'){ 
                if ($age >= 18) { ?>
                 <p>   Vous êtes un <?= $gender ?> et vous êtes majeur. </p>
                <?php }
                else { ?>
                  <p>  Vous êtes un homme et vous êtes mineur. </p>
                <?php }
            }
            if ($gender == 'Femme'){
                if ($age >= 18) { ?>
                   <p> Vous êtes une femme et vous êtes majeur. </p>
                <?php }
                else { ?>
                   <p> Vous êtes une femme et vous êtes mineur. </p>
                <?php }
            }
        ?>
</body>
</html>