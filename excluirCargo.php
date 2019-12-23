<?php
$ID_CARGO=$_GET["id_cargo"];


if ((!empty($ID_CARGO)) ){
include("conexao.php");
mysqli_query($conexao, "delete from CARGOS where ID_CARGO='$ID_CARGO'");
mysqli_close($conexao);
header('Location: cargolista.php?acaoExcluir=sucesso');
}else{
	header('Location: cargolista.php?acaoExcluir=Erro');
}

?>