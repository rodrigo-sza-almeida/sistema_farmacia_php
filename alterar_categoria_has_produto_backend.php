<?php
error_reporting(0);
include "conexao.php";
$categoria_has_produto1=$_POST['categoria_has_produto'];
$produto_idproduto1=$_POST['produto_idproduto'];
$categoria_idcategoria1=$_POST['categoria_idcategoria'];

$alterar = mysql_query("UPDATE categoria_has_produto 
                    SET produto_idproduto = '$produto_idproduto1',categoria ='$categoria_idcategoria1'
					WHERE categoria_has_produto ='$categoria_has_produto1' ")
					or die (mysql_error());
mysql_close ($db);
include "consulta_categoria_has_produto.php";
?>