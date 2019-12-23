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

if ((!empty($DATA)) and (!empty($CLIENTE)) and (!empty($PROJETO)) and (!empty($ENTRADA)) and (!empty($T_ALMOCO)) and (!empty($SAIDA)) and (!empty($HORA)) and (!empty($ALMOCO)) and (!empty($consul))){
include("conexao.php");
mysqli_query($conexao, "insert into apontamento (DATA, CLIENTE, PROJETO, ENTRADA, T_ALMOCO, SAIDA, HORA, ALMOCO, ESTADIA, KM, PEDAGIO, HOSP, TAXI, DESP, OBS, CONSUL) values ('$DATA','$CLIENTE','$PROJETO', '$ENTRADA', '$T_ALMOCO', '$SAIDA', '$HORA','$ALMOCO', '$ESTADIA', '$KM', '$PEDAGIO', '$HOSP', '$TAXI', '$DESP', '$OBS', '$consul')");
mysqli_close($conexao);
header('Location: apontamento.php?acao=sucesso');

}else{
header('Location: apontamento.php?acao=erro');

	
//echo "DATA".$DATA; 
//echo "<br>";
//echo "Cliente".$CLIENTE;
//echo "<br>"; 
//echo "projeto".$PROJETO;
//echo "<br>";
//echo "entrada".$ENTRADA;
//echo "<br>"; 
//echo "tempo de almoco".$T_ALMOCO;
//echo "<br>";
//echo "saida".$SAIDA;
//echo "<br>";
//echo "hora".$HORA;
//echo "<br>";
//echo "valor almoco".$ALMOCO;
//echo "<br>";
//echo "estadia".$ESTADIA;
//echo "<br>"; 
//echo "KM".$KM;
//echo "<br>";
//echo "PEDAGIO".$PEDAGIO;
//echo "<br>"; 
//echo "HOSPEDAGEM".$HOSP;
//echo "<br>";
//echo "TAXI".$TAXI;
//echo "<br>";
//echo "DESP".$DESP;
//echo "<br>";
//echo "OBS".$OBS;
//echo "<br>";
//echo "Consultor".$consul;
//echo "<br>";

	}

?>