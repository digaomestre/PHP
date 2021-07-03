<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <pre>
        <?php                    
            $agenda = array(
                            "Name"      => "Rodrigo T. Souza",
                            "Phone"     => "2526-54528",
                            "Salary"    => 3790.73,
                            "Fumante"   => false
            );

            foreach($agenda as $contacts => $values){
                echo $contacts . " : " . $values . "<br>";
            }
        ?>
    </pre>   
</body>
</html>