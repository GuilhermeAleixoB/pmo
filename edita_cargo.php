<?php

$ID_CARGO = $_POST["id_cargo"];
$CARGO    = $_POST["CARGO"];
$CLT      = $_POST["CLT"];
$VA       = $_POST["VA"];
$VR       = $_POST["VR"];
$PREM     = $_POST["PREM"];
$TRI	  = $_POST["TRI"];
 
if ((!empty($CARGO)) and (!empty($CLT)) and (!empty($VA)) and (!empty($VR)) and (!empty($PREM)) and (!empty($TRI))){
include("conexao.php");	
mysqli_query($conexao, "update cargos set CARGO='$CARGO', CLT='$CLT', VA='$VA', VR='$VR', PREM='$PREM', TRI='$TRI' where ID_CARGO='$ID_CARGO'");
mysqli_close($conexao);
header('Location: cargolista.php?acaoEditar=sucesso');
}else{
	header('Location: cargolista.php?acaoEditar=Erro');
}

?>