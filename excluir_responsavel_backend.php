<?php
include "conexao.php";
$idresponsavel1=$_POST['idresponsavel'];

$resultado = mysql_query("DELETE FROM responsavel 
					WHERE idresponsavel='$idresponsavel1' ") 
					or die (mysql_error());
				
mysql_close ($db);
include "consulta_responsavel.php";
?>