<?php
include "conexao.php";
$categoria_has_produto=$_POST['fabricante_has_produto'];


$resultado = mysql_query("DELETE FROM fabricante_has_produto 
					WHERE fabricante_has_produto='$fabricante_has_produto1' ") 
					or die (mysql_error());
				
mysql_close ($db);
include "consulta_fabricantehasproduto.php";