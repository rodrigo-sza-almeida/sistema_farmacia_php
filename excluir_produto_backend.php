<?php
include "conexao.php";
$idproduto1=$_POST['idproduto'];

$resultado = mysql_query("DELETE FROM produto 
					WHERE idproduto='$idproduto1' ") 
					or die (mysql_error());
				
mysql_close ($db);
include "consulta_produto.php";
?>