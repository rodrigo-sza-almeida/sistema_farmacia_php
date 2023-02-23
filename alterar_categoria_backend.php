<?php
error_reporting(0);
include "conexao.php";
$idcategoria1=$_POST['idcategoria'];
$categoria1=$_POST['categoria'];


$alterar = mysql_query("UPDATE categoria 
                    SET categoria = '$categoria1'
					WHERE idcategoria ='$idcategoria1' ")
					or die (mysql_error());
mysql_close ($db);
include "consulta_categoria.php";
?>