<?php
include "conexao.php";
$idagendamento1=$_POST['idagendamento'];

$resultado = mysql_query("DELETE FROM agendamento 
					WHERE idagendamento='$idagendamento1' ") 
					or die (mysql_error());
				
mysql_close ($db);
include "consulta_agendamento.php";
?>