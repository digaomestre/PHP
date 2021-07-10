<?php
    
    $server = "localhost";
    $user   = "root";
    $pass   = "";
    $bd     = "andes";
    
    $conn   = mysqli_connect($server, $user, $pass, $bd);

    if(mysqli_connect_errno()){
      die("Falha ao conectar: " . mysqli_connect_errno()); 
    }

    $sql = "SELECT * FROM CATEGORIAS ";
    
    $stmt = mysqli_query($conn ,$sql);

    if(! $sql){
        die("Erro na consulta: ". $sql);
    }

?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Conexão com Banco de Dados Mysql</title>
    </head>

    <body>
        <div class="container" style="margin: 0 auto; padding: 10px; width:450px">
            <table width = "100%" border="1">
                <thead><h3>CATEGORIAS </h3></thead>
                <tr>
                    <th><p>Códigos</p></th>
                    <th><p>Descrição</p></th>
                </tr>
                <?php
                    while($registros = mysqli_fetch_assoc($stmt)){ ?>
                        <tr>
                            <td><?php echo $registros["categoriaID"]; ?></br></td>
                            <td><?php echo $registros["nomecategoria"]; ?></br></td>
                        </tr>
                <?php 
                
                    }
                    mysqli_free_result($stmt); 
                
                ?>
                    
            </table>
            </div>
         
    </body>
</html>

<?php

mysqli_close($conn);