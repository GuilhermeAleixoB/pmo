<?php
$ID_MIF=$_GET["id_MIFs"];


if ((!empty($ID_MIF)) ){
include("conexao.php");
mysqli_query($conexao, "delete from MIF where ID_MIF='$ID_MIF'");
mysqli_close($conexao);
header('Location: mifs.php?acaoExcluir=sucesso');
}else{
	header('Location: mifs.php?acaoExcluir=Erro');
}

?>