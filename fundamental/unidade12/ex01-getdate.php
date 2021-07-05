<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>

        <?php

        function formatarDigitos($digitos){
            
            if($digitos < 10){
                return "0".$digitos; 
            }else{
                return $digitos;
            }
        }

            date_default_timezone_set("America/Sao_Paulo");

            $agora = getdate();
            $horas      = $agora["hours"];
            $minutos    = $agora["minutes"];
            $segundos   = $agora["seconds"];

            $dia        = $agora["mday"];
            $mes        = $agora["mon"];
            $ano        = $agora["year"];

            print_r($agora);

            echo "<br>". formatarDigitos($dia) . "/" . formatarDigitos($mes) . "/" . $ano ." ". $horas.":".$minutos.":".$segundos;
        ?>
    </body>
</html>