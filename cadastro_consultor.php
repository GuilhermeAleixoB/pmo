<?php
$NOME =$_POST["NOME"];
$PJ =$_POST["PJ"];
$VT =$_POST["VT"];
$SAUDE =$_POST["SAUDE"];
$VIDA =$_POST["VIDA"];
$CEL =$_POST["CEL"];
$CUSTO =$_POST["CUSTO"];
$cargos =$_POST['cmbcargo'];

if ((!empty($NOME)) and (!empty($PJ)) and (!empty($VT)) and (!empty($SAUDE)) and (!empty($VIDA)) and (!empty($CEL)) and (!empty($CUSTO)) and (!empty($cargos)) ){
include("conexao.php");
mysqli_query($conexao, "insert into consultores (NOME, PJ, VT, SAUDE, VIDA, CEL, CUSTO, CARGO) values ('$NOME','$PJ','$VT', '$SAUDE', '$VIDA', '$CEL', '$CUSTO', '$cargos')");
mysqli_close($conexao);
header('Location: consultor.php?acao=sucesso');

}else{
	header('Location: consultor.php?acao=erro');
}