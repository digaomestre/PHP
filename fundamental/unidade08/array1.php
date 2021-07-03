<?php
    $texto = "Rodrigo tomaz de souza, Vivian Cabral da Silva, Rodrigo Tomaz de Souza Filho, Lorena Luiza do Vale, Elizabeth C. Souza, Michelle Mardones, Micael Santana, Wilson, Douglas"; 
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>
        
    <body>
    <Pre>
            <?php
                if(isset($texto)){
                    
                    $texto1 = strtoupper($texto);

                    $nomes = explode(',',$texto1);
                    
                    print_r($nomes);
                    echo "----------------------------------------------<br>";    
                }else{
                    echo "Error : ". "Não é possível imprimir valores nulos.";    
                }  
                for($i = 0; $i < count($nomes); $i++){
                    if(stripos($nomes[$i], "a")){
                        echo  $i . "º ". $nomes[$i]."<br>";
                    }
                    
                }            
            ?>

        </Pre>
    </body>
</html>