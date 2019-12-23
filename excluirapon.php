<?php
$ID_APON=$_GET["id_apontamento"];


if ((!empty($ID_APON)) ){
include("conexao.php");
mysqli_query($conexao, "delete from apontamento where ID_APON='$ID_APON'");
mysqli_close($conexao);
header('Location: apontamento.php?acaoExcluir=sucesso');
}else{
	header('Location: apontamento.php?acaoExcluir=Erro');
}

?>