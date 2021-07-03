<?php
    $a = 7;
    $b = 7;
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
            if($a > $b){
                echo "a é maior do que b";
            }else if($b > $a){
                echo "b é maior do que a"; 
            }else{
                echo "a e b são iguais";
            }
        ?>
    </body>
</html>