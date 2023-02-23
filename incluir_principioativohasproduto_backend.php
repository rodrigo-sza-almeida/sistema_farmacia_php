<?php
error_reporting (0);
$db = mysql_connect("127.0.0.1", "root", "vertrigo");
mysql_select_db("sistema_farmacia_noturno", $db);
$produto_idproduto1=$_POST['produto_idproduto'];
$principioativo_idprincipioativo=$_POST['principioativo_idprincipioativo'];

$inserir = mysql_query("INSERT INTO principioativo_has_produto(produto_idproduto, principioativo_idprincipioativo) VALUES ('produto_idproduto1', 'principioativo_idprincipioativo1')")
or die (mysql_error());
mysql_close ($db);
include "consulta_principioativo_has_produto.php";
?>