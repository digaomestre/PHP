<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>
        <?php
            $Saladas    = array("imagens/laranja.jpg","imagens/maca.jpg","imagens/abacate.jpg");
            $codigo     = $_GET["codigo"];

        ?>

        <img src="<?php echo $Saladas[$codigo]; ?>" >
    <body> 
    </body>
</html>