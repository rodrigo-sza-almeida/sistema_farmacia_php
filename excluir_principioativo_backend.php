<?php
include "conexao.php";
$idprincipioativo1=$_POST['idprincipioativo'];

$resultado = mysql_query("DELETE FROM principioativo 
					WHERE idprincipioativo='$idprincipioativo1' ") 
					or die (mysql_error());
				
mysql_close ($db);
include "consulta_principioativo.php";
?>