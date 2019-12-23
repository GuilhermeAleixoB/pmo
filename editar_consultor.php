<?php
$ID_CONSUL = $_POST["ID_CONSUL"];
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
mysqli_query($conexao, "update consultores set NOME='$NOME', PJ='$PJ', VT='$VT', SAUDE='$SAUDE', VIDA='$VIDA', CEL='$CEL', CUSTO='$CUSTO', CARGO='$cargos' where ID_CONSUL='$ID_CONSUL'");
mysqli_close($conexao);

header('Location: consultor.php?acaoEditar=sucesso');

}else{
	header('Location: consultor.php?acaoEditar=erro');
}