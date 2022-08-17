<?php

include_once('config.php');

$sql = "SELECT * FROM registro LIMIT 10 ";

$result =  $conexao-> query($sql) ;

?>
<html>
    <head>
        <meta charset="utf8">
    </head>
    <a href="index.php" >Voltar</a>

    <center>
    
    <body>
    
        <table border="1">
            <tr>
                <td>id</td>
                <td>Nome</td>
                <td>usuario</td>
                <td>sexo</td>
                <td>password</td>
                <td>data de cadastro</td>
                <td>acoes</td>
            </tr>

            <?php while($dado = mysqli_fetch_assoc($result)){ ?>
            <tr>
                <td><?php echo $dado["id"]; ?></td>
                <td><?php echo $dado["nome"]; ?></td>
                <td><?php echo $dado["usuario"]; ?></td>
                <td><?php echo $dado["sexo"]; ?></td>
                <td><?php echo $dado["password"]; ?></td>
                <td><?php echo date("d/m/y") ?></td>
                <td> <a href="editar.php?id=<?php echo $dado["id"];?>">EDITAR</a>  |
                  <a href="excluir.php?id=<?php echo $dado["id"];?>">Excluir</a> </td>

            </tr>
            <?php }?>

        </table>
    </body>

    </center>


</html>