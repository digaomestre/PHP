<?php
    $nome       = "Rodrigo";
    $telefone   = "2526-5428";
    $fumante    = true;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>
        <?php
            if(isset($fumante)== 0){
                echo "Direcionar para ambientes abertos";
            }else{
                echo "O direcionamento pode ser para qualquer ambiente.";    
            }
        ?>
    <body>
    </body>
</html>