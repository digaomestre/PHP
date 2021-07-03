<?php 
    $salario = 800;
    $meses   = 3;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            // Multiplicacao e Divisao
            echo "Total Meses: ".$meses." = ". $salario * $meses . "</br>"
            . "Por quinzena: " . $salario / 2 
            . "</br>";
            
            // Exponencial
           
            echo "Exponencial: ". pow($meses, 2)
            . "</br>";

            // Raiz Quadrada

            $raiz = pow($meses, 2);
            echo "Raiz quadrada: " . sqrt($raiz) . "</br>";

            // Randômico Generica
           
            echo "Numeros genericos : " . rand() . "</br>"
            . "Numeros randomicos intervalos:" . rand(5, 10). "</br>";

            // Randômico entre um intervalo
                       
            // Valor absoluto
            echo "Numero absoluto : " . abs(-50);
        ?>
    </body>
</html>