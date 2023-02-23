<?php
error_reporting(0);
$db = mysql_connect ("127.0.0.1","root", "vertrigo" );
mysql_select_db("sistema_farmacia_noturno", $db);
$produto_idproduto1=$_POST['produto_idproduto'];
$agendamento_idagendamento1=$_POST['agendamento_idagendamento'];
$agendamento_paciente_prontuario1=$_POST['agendamento_paciente_prontuario'];
$agendamento_paciente_responsavel_idresponsavel1=$_POST['agendamento_paciente_responsavel_idresponsavel'];
$agendamento_funcionario_idfuncionario1=$_POST['agendamento_funcionario_idfuncionario'];
$quantidade1=$_POST['quantidade'];

$inserir = mysql_query("INSERT INTO itens_do_agendamento(produto_idproduto, agendamento_idagendamento, agendamento_paciente_prontuario,
 agendamento_paciente_responsavel_idresponsavel, agendamento_funcionario_idfuncionario, quantidade)
 VALUES ('$produto_idproduto1','$agendamento_idagendamento1', '$agendamento_paciente_prontuario1', '$agendamento_paciente_responsavel_idresponsavel1'
 '$agendamento_funcionario_idfuncionario1', '$quantidade1')") or die (mysql_error());
mysql_close ($db);
include "consulta_itens_do_agendamento.php";
?>