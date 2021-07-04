<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php 
        function retonarDiaria(){
            return number_format(3790.73 / 3, 2);
        }
        echo retonarDiaria();
    ?>
</body>
</html>