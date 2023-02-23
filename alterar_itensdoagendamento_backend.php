<?php
error_reporting(0);
include "conexao.php";
$itens_do_agendamento1=$_POST['itens_do_agendamento'];
$produto_idproduto1=$_POST['produto_idproduto'];
$agendamento_idagendamento1=$_POST['agendamento_idagendamento'];
$agendamento_paciente_prontuario1=$_POST['agendamento_paciente_prontuario'];
$agendamento_paciente_responsavel_idresponsavel1=$_POST['agendamento_paciente_responsavel_idresponsavel'];
$agendamento_funcionario_idfuncionario1=$_POST['agendamento_funcionario_idfuncionario'];
$quantidade1=$_POST['quantidade'];

$alterar = mysql_query("UPDATE itens_do_agendamento 
                    SET produto_idproduto = '$produto_idproduto1', agendamento_idagendamento = '$agendamento_idagendamento1', 
					agendamento_paciente_prontuario = '$agendamento_paciente_prontuario1',
					agendamento_paciente_responsavel_idresponsavel = '$agendamento_paciente_responsavel_idresponsavel1',
					agendamento_funcionario_idfuncionario = '$agendamento_funcionario_idfuncionario1', quantidade = '$quantidade'
					WHERE itens_do_agendamento ='$itens_do_agendamento1' ")
					or die (mysql_error());
mysql_close ($db);
include "consulta_itens_do_agendamento.php";
?>