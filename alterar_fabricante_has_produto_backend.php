<?php
error_reporting(0);
include "conexao.php";
$fabricante_has_produto1=$_POST['fabricante_has_produto'];
$fabricante_idfabricante1=$_POST['fabricante_idfabricante'];
$produto_idproduto1=$_POST['produto_idproduto'];

$alterar = mysql_query("UPDATE fabricante_has_produto 
                    SET fabricante_idfabricante = '$fabricante_idfabricante1', prduto_idproduto = '$produto_idproduto1'
					WHERE fabricante_has_produto ='$fabricante_has_produto1' ")
					or die (mysql_error());
mysql_close ($db);
include "consulta_fabricante_has_produto.php";
?>