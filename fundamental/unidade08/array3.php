<?php
    $_salada = array("Laranja","Uva","Abacate");
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            echo "Existe valor: " . in_array("Uva", $_salada)."<br>";
            echo "Existe valor: " . array_search("Abacate", $_salada);
        ?>
    </body>
</html>