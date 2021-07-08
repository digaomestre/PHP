<?php
    if(isset($_POST["Fornulario2"])){
        $nome   = $_POST["nome"];
        $email  = $_POST["email"];
    }
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
        <link href="_css/estilo.css" rel="stylesheet">
    </head>

    <body>
        <?php  if (!isset($_POST['Fornulario2'])) { ?>
        <form action="Fornulario.php" method="post">
            <label for="nome">Nome Completo</label>
            <input type="text" name="nome" id="nome">
            
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
            
            <input type="submit" name="Fornulario2" value="Enviar Cadastro">
        </form>
        <?php }else{
            echo "Nome : " .  $nome; 
            echo "Email: " .  $email; 
        }  ?>
    </body>
</html>