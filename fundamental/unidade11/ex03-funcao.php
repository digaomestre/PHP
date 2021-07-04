<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php 
        function ConverteGraus($celcius){

            return ($celcius * 9 / 5) + 32;
        }

        echo "Temperatura: " . ConverteGraus(2)."º F";
    ?>
</body>
</html>