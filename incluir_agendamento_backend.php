<?php
error_reporting(0);
$db = mysql_connect ("127.0.0.1","root", "vertrigo" );
mysql_select_db("sistema_farmacia_noturno", $db);
$idagendamento1=$_POST['idagendamento'];
$paciente_prontuario1=$_POST['paciente_prontuario'];
$paciente_responsavel_idresponsavel1=$_POST['paciente_responsavel_idresponsavel'];
$funcionario_idfuncionario1=$_POST['funcionario_idfuncionario'];
$data_solicitacao1=$_POST['data_solicitacao'];
$horario1=$_POST['horario'];
$data_procedimento1=$_POST['data_procedimento'];
$realizado1=$_POST['realizado'];

$inserir = mysql_query("INSERT INTO agendamento(idagendamento, paciente_prontuario, paciente_responsavel_idresponsavel, funcionario_idfuncionario, 
data_solicitacao, horario, data_procedimento, realizado) VALUES ('$idagendamento1','$paciente_prontuario1', '$paciente_responsavel_idresponsavel',
 '$funcionario_idfuncionario1', '$data_solicitacao1', '$horario1', '$data_procedimento1', '$realizado1')") or die (mysql_error());
mysql_close ($db);
include "consulta_agendamento.php";
?>