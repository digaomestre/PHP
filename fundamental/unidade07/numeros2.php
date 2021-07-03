<?php
    $salario = 1095;
    $gasolina = 4.55;
    $telefone = "2526-5428";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        
        <?php
            // testar se é numérica

             echo "O $salario é um número: ". is_numeric($salario). "</br>";   
             echo "O $gasolina é um número: ". is_numeric($gasolina). "</br>";   
             echo "O $telefone é um número: ". is_numeric($telefone). "</br>";   

            // testar se é inteiro
            echo "---------------------------------------------------------</br>";
            echo "O $salario é um inteiro: ". is_int($salario). "</br>";   
            echo "O $gasolina é um inteiro: ". is_int($gasolina). "</br>";   
            echo "O $telefone é um inteiro ". is_int($telefone). "</br>";

            // testar se é float

            echo "---------------------------------------------------------</br>";
            echo "O $salario é um float: ". is_float($salario). "</br>";   
            echo "O $gasolina é um float: ". is_float($gasolina). "</br>";   
            echo "O $telefone é um float ". is_float($telefone). "</br>";
        ?>
        
        
    </body>
</html>