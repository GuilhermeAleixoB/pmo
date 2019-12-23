<?php
$ID_CONSUL=$_GET["id_consultor"];


if ((!empty($ID_CONSUL)) ){
include("conexao.php");
mysqli_query($conexao, "delete from consultores where ID_CONSUL='$ID_CONSUL'");
mysqli_close($conexao);
header('Location: consultor.php?acaoExcluir=sucesso');
}else{
	header('Location: consultor.php?acaoExcluir=Erro');
}

?>