<?php
include "conexao.php";
$idfuncionario1=$_POST['idfuncionario'];

$resultado = mysql_query("DELETE FROM funcionario 
					WHERE idfuncionario ='$idfuncionario1' ") 
					or die (mysql_error());
				
mysql_close ($db);
include "consulta_funcionario.php";
?>