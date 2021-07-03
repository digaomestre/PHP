<?php
    $mega = array("47", "29", "42", "04", "27", "21");
    sort($mega);
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            echo "Maior valor: ". max($mega)."<br>";
            echo "Menor valor: ".min($mega);
        ?>
        <pre>
            <?php 
                print_r($mega);
            ?>
        </pre>
    </body>
</html>