<?php
include "conexao.php";
$itens_do_agendamento1=$_POST['itens_do_agendamento'];

$resultado = mysql_query("DELETE FROM itens_do_agendamento 
					WHERE itens_do_agendamento='$itens_do_agendamento1' ") 
					or die (mysql_error());
				
mysql_close ($db);
include "consulta_itens_do_agendamento.php";
?>