<?php
    $dia = "domingo";
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
            switch($dia){
                case "segunda":
                    echo "Segunda sempre é pesado";
                    break;
                case "terça":
                    echo "terça o animo começa a revigorar";
                    break;
                case "quarta":
                    echo "quarta chegando ao apice do animo";
                    break;
                case "quinta":
                    echo "quinta apice do animo para trabalho";
                    break;
                case "sexta":
                    echo "sexta dia de preparação para o dia de descanso";
                    break;
                case "Sabado":
                    echo "Dia de descanso";
                    break;
                case "domingo":
                    echo "Primeiro dia da semana";
                    break;
                default:
                    echo "error: dia inexistente";
                    break;
                
            }
        ?>
    </body>
</html>