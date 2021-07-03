<?php
    $idade = 17;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php 
            $maiorIdade = ($idade>=18)?"Maior de idade":"Menor de idade";
            echo $maiorIdade;
        ?>
    </body>
</html>