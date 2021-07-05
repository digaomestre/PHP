<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>
        <?php
            $dataInicial    = new DateTime('2021-07-04');
            $dataFinal      = new DateTime('2021-01-29');
            $intervalo      = $dataInicial->diff($dataFinal);
            echo $intervalo->format('%R%a');

        ?>
    <body>
    </body>
</html>