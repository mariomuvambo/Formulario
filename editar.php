<?php
include_once('config.php');

if(!empty($_GET['id'])){
    $id = $_GET['id'];
    $sqlselect = "SELECT * FROM registro WHERE id=$id";


    $result = $conexao->query($sqlselect);
    
    if($result->num_rows > 0){

        while ($user_data = mysqli_fetch_assoc($result)){
            $nome =$user_data['nome'];
            $usuario = $user_data['usuario'];
            $password = $user_data['password'];
            $sexo = $user_data['sexo'];
            

        }
      print_r($nome);

    }else{
        header('Location: index.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<center>


    <a href="visualizar.php">visualizar</a>
    <h1>Formulario de registro</h1>
    <form action="savEdit.php" method="POST">

        <table>
            <tr>
                <td>Nome</td>
                <td><input type="text" name="nome" value="<?php echo  $nome?>"></td>
            </tr>

            <tr>
                <td>Usuario</td>
                <td><input type="text" name="usuario" value="<?php echo  $usuario?>"></td>
            </tr>

            <tr>
                <td>Sexo</td>
                <td>
                    <input type="radio" name="sexo" value="M" <?php echo ($sexo == 'M') ?'checked':''?>> Masculino
                    <input type="radio" name="sexo" value="F" <?php echo ($sexo == 'F') ?'checked':''?>> Femenino
                </td>
            </tr>

            <tr>
                <td>Password</td>
                <td><input type="text" name="password" value="<?php echo  $password?>"></td>
            </tr>

            <tr>
                <td>Repetir Password</td>
                <td><input type="password" name="rpassword"></td>
            </tr>
            
        </table><br>
        <input type="hidden" name="id" value="<?php echo $id?>">

    
        <input type="submit" name="update" value="Registar" id="update" />
        <input type="reset">



    </form>

    </center>



</body>

</html>