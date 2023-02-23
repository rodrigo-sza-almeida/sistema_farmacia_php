<?php
include "conexao.php";
$idcategoria1=$_POST['idcategoria'];

$resultado = mysql_query("DELETE FROM categoria 
					WHERE idcategoria='$idcategoria1' ") 
					or die (mysql_error());
				
mysql_close ($db);
include "consulta_categoria.php";
?>