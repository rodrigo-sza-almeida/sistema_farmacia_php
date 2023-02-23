<?php
error_reporting(0);
include "conexao.php";
$idagendamento1=$_POST['idagendamento'];
$data_solicitacao1=$_POST['data_solicitacao'];
$horario1=$_POST['horario'];
$data_procedimento1=$_POST['data_procedimento'];
$realizado1=$_POST['realizado'];

$alterar = mysql_query("UPDATE agendamento 
                    SET data_solicitacao = '$data_solicitacao1',horario ='$horario1',data_procedimento ='$data_procedimento1',
				    realizado ='$realizado1'
					WHERE idagendamento ='$idagendamento1' ")
					or die (mysql_error());
mysql_close ($db);
include "consulta_agendamento.php";
?>