<?php

$nome = $_POST['nome'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$sexo = $_POST['sexo'];
$rpassword = $_POST['rpassword'];

$row = strlen($usuario) * strlen($password) * strlen($rpassword);

if($row > 0){
    if($password == $rpassword){
        $db = mysqli_connect('127.0.0.1', 'root', '','confirmaemail') or die('ERRO A CONECTAR COM SERVIDOR');

        $password = md5($password);

        $result = "SELECT id from  registro WHERE usuario = '".$_POST['usuario']."'";
        $result_usuario = mysqli_query($db, $result);

        if(($result_usuario) AND ($result_usuario -> num_rows != 0)){

             echo "<script>alert('Usuario ja existente');</script>";

            // echo "Candidato existente";

        }else{
            $query = "INSERT INTO registro(nome,usuario,sexo,password) VALUES('$nome','$usuario','$sexo','$password')";

            mysqli_query($db,$query);
    
            echo "<script>alert('Registado com sucesso');</script>";

        }

    //     $result = "SELECT id from  registro WHERE nome = '".$_POST['nome']."'";
    //     $result_usuario = mysqli_query($db, $result);
    //     if(($result_usuario) AND ($result_usuario -> num_rows != 0)){
    //         echo "<script>alert('Nome ja existente');</script>";
    //        // echo "Candidato existente";
    //    }

        // echo "Registado com sucesso";

        
    }else{
        echo "<script>alert('INSIRA OS MESMOS VALORES DO PASSWORD');</script>";
    }

}else{
    echo "<script>alert('INSIRA TODOS OS CAMPOS');</script>";
    // echo 'INSIRA TODOS OS CAMPOS';
}



// echo 'Nome: ',$nome;
// echo 'Usuario: ',$usuario;
// echo 'Sexo: ',$sexo;

?>