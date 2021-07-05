<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            date_default_timezone_set('America/Sao_Paulo');
            setlocale(LC_ALL, 'Portuguese');
            $agora = getdate();

            $horas      = $agora["hours"];
            $minutos    = $agora["minutes"];
            $segundos   = $agora["seconds"];

            #print_r($_agora);

            echo $horas.":".$minutos.":".$segundos;
        ?>
    </body>
</html>