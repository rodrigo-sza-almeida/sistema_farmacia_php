<?php
error_reporting(0);
include "conexao.php";
$principioativo_has_produto1=$_POST['principioativo_has_produto'];
$produto_idproduto1=$_POST['produto_idproduto'];
$principioativo_idprincipioativo1=$_POST['principioativo_idprincipioativo'];

$alterar = mysql_query("UPDATE principioativo_has_produto 
                    SET produto_idproduto = '$produto_idproduto1', '$principioativo_idprincipioativo1'
					WHERE principioativo_has_produto ='$principioativo_has_produto1' ")
					or die (mysql_error());
mysql_close ($db);
include "consulta_principioativo_has_produto.php";
?>