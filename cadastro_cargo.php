<?php

$CARGO =$_POST["CARGO"];
$CLT =$_POST["CLT"];
$VA =$_POST["VA"];
$VR =$_POST["VR"];
$PREM =$_POST["PREM"];
$TRI =$_POST["TRI"];
	
if ((!empty($CARGO)) and (!empty($CLT)) and (!empty($VA)) and (!empty($VR)) and (!empty($PREM)) and (!empty($TRI)) ){
include("conexao.php");
mysqli_query($conexao, "insert into CARGOS (CARGO, CLT, VA, VR, PREM, TRI) values ('$CARGO','$CLT','$VA', '$VR', '$PREM', '$TRI')");
mysqli_close($conexao);
header('Location: cargolista.php?acao=sucesso');

}else{
	header('Location: cargolista.php?acao=erro');
}

?>