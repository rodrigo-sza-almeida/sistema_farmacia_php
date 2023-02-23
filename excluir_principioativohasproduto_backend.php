<?php
include "conexao.php";
$principioativo_has_produto=$_POST['principioativo_has_produto'];


$resultado = mysql_query("DELETE FROM principioativo_has_produto 
					WHERE principioativo_has_produto='$principioativo_has_produto1' ") 
					or die (mysql_error());
				
mysql_close ($db);
include "consulta_principioativohasproduto.php";