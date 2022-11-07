<?php

//receber o id de quem será excluído
$id=$_GET["id"];

//abrir a conexão com o banco
include_once './conexao.php';

//montar a instrução de ir ao banco
$sql= "delete from cliente where idcliente =".$id;

if (mysqli_query($con,$sql)) {
    $msg = "Excluido com sucesso!";
} else {
    $msg = "Erro ao excluir!";
}

mysqli_close($con);

echo "<script> alert('".$msg."');
location.href='consultar.php';
</script>";

?>
