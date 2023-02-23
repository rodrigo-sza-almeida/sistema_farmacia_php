<?php
include "conexao.php";
$categoria_has_produto=$_POST['categoria_has_produto'];


$resultado = mysql_query("DELETE FROM categoria_has_produto 
					WHERE categoria_has_produto='$categoria_has_produto1' ") 
					or die (mysql_error());
				
mysql_close ($db);
include "consulta_categoriahasproduto.php";
?>