<?php
include "conexao.php";
$idestoque1=$_POST['idestoque'];

$resultado = mysql_query("DELETE FROM estoque 
					WHERE idestoque='$idestoque1' ") 
					or die (mysql_error());
				
mysql_close ($db);
include "consulta_estoque.php";
?>