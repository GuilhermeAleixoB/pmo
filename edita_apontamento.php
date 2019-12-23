<?php
$DATA =$_POST["DATA"];
$CLIENTE =$_POST["CLIENTE"];
$PROJETO =$_POST["PROJETO"];
$ENTRADA =$_POST["ENTRADA"];
$T_ALMOCO =$_POST["T_ALMOCO"];
$SAIDA =$_POST["SAIDA"];
$HORA =$_POST["HORA"];
$ALMOCO =$_POST["ALMOCO"];
$ESTADIA =$_POST["ESTADIA"];
$KM =$_POST["KM"];
$PEDAGIO =$_POST["PEDAGIO"];
$HOSP =$_POST["HOSP"];
$TAXI =$_POST["TAXI"];
$DESP =$_POST["DESP"];
$OBS =$_POST["OBS"];
$consul =$_POST['cmbconsul'];
$ID_APON =$_POST['id_apon'];
if ((!empty($DATA)) and (!empty($CLIENTE)) and (!empty($PROJETO)) and (!empty($ENTRADA)) and (!empty($T_ALMOCO)) and (!empty($SAIDA)) and (!empty($HORA)) and (!empty($ALMOCO)) and (!empty($consul))){
include("conexao.php");
mysqli_query($conexao, "update apontamento set DATA='$DATA', CLIENTE='$CLIENTE', PROJETO='$PROJETO', ENTRADA='$ENTRADA', T_ALMOCO='$T_ALMOCO', SAIDA='$SAIDA', HORA='$HORA', ALMOCO='$ALMOCO',ESTADIA='$ESTADIA', KM='$KM', PEDAGIO='$PEDAGIO', HOSP='$HOSP', TAXI='$TAXI', DESP='$DESP', OBS='$OBS', CONSUL='$consul'  where ID_APON='$ID_APON'");
mysqli_close($conexao);

header('Location: apontamento.php?acaoEditar=sucesso');

}else{
	header('Location: apontamento.php?acaoEditar=erro');
}