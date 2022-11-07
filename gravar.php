<?php

date_default_timezone_set("america/sao_paulo");
//resgate de dados da tela
$nome= $_POST["nome"];
$email= $_POST["email"];
$telefone= $_POST["telefone"];
$dtcadastro= date("Y-m-d"); //Padrão do banco

// abrir conexão com o banco de dados.

include_once'./conexao.php';

//montar o sql de gravação


$sql = "insert into cliente values(null,'".$nome."','".$email."','".$telefone."','".$dtcadastro."')";

if (mysqli_query($con,$sql)) {
    $msg = "Cadastro criado com sucesso!";
} else {
    $msg = "Erro ao criar cadastro!";
}

mysqli_close($con);

if (isset($msg)) {
    echo "<script>alert('{$msg}')</script>";
    }
    
include("index.php");

?>
