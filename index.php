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
    <form action="" method="POST">

        <table>
            <tr>
                <td>Nome</td>
                <td><input type="text" name="nome"></td>
            </tr>

            <tr>
                <td>Usuario</td>
                <td><input type="text" name="usuario"></td>
            </tr>

            <tr>
                <td>Sexo</td>
                <td>
                    <input type="radio" name="sexo" value="M"> Masclunino
                    <input type="radio" name="sexo" value="F"> Femenino
                </td>
            </tr>

            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>

            <tr>
                <td>Repetir Password</td>
                <td><input type="password" name="rpassword"></td>
            </tr>
          
        </table><br>

        <input type="submit" name="submit" value="Registar" />
        <input type="reset">



    </form>

    </center>




</body>

</html>