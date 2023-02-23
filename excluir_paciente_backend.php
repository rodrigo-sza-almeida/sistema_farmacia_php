<?php
include "conexao.php";
$prontuario1=$_POST['prontuario'];

$resultado = mysql_query("DELETE FROM paciente 
					WHERE prontuario='$prontuario1' ") 
					or die (mysql_error());
				
mysql_close ($db);
include "consulta_paciente.php";
?>