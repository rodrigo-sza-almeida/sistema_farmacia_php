<?php
include "conexao.php";
$idfabricante1=$_POST['idfabricante'];

$resultado = mysql_query("DELETE FROM fabricante
					WHERE idfabricante='$idfabricante1' ") 
					or die (mysql_error());
				
mysql_close ($db);
include "consulta_fabricante.php";
?>