<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php 
        function retornarDiaria($salario) {
            return number_format( $salario/30, 2);
            
        }

        echo retornarDiaria(3790,73). "<br>";
        echo retornarDiaria(5000);
    ?>
</body>
</html>