<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php                    
            $mega = array();
            $cont = 1;
            while($cont < 7){
                $sorteio = rand(1, 60);
                if(!in_array($sorteio, $mega)){
                    $mega[] = $sorteio;
                    $cont ++;
                }    
            }
            sort($mega);
            
        ?>
        <pre>
            <?php print_r($mega)?>
        </pre>
    </body>
</html>