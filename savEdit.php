<?php
include_once('config.php');

if(isset($_POST['update'])){
    $id= $_POST['id'];
    $nome = $_POST['nome'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $sexo = $_POST['sexo'];
    

    $sqlUpdate = "UPDATE registro SET password='$password', nome='$nome', sexo='$sexo',usuario='$usuario'
     WHERE id ='$id'";

    $result = $conexao->query($sqlUpdate);


}
header('Location: visualizar.php');
?>
