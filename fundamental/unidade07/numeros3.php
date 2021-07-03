<?php
    $gasolina = 4.55;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        
        <?php
            // Arrendondar para média

            echo " Valor arrendondado conforme a média: ".round($gasolina). " Valor original: $gasolina </br>";

            if(is_int(round($gasolina)) == 1){
                echo "O valor é inteiro";
            }else{
                echo "O valor é um ponto flutuante";
            }

            // Arrendondar para cima
            echo "<br>-----------------------------------------------------------</br>";
            echo "Valor arrendondado para cima : " . ceil($gasolina) . " Valor original: $gasolina </br>";


            // Arrendondar para baixo

            echo "</br>----------------------------------------------------------</br>";
            echo "Valor arrendondado para baixo: " .floor($gasolina) . " Valor original: $gasolina </br>";

        ?>
        
        
    </body>
</html>