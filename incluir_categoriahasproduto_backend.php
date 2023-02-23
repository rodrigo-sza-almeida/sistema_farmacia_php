<?php
error_reporting (0);
$db = mysql_connect("127.0.0.1", "root", "vertrigo");
mysql_select_db("sistema_farmacia_noturno", $db);
$categoria_has_produto1=$_POST['categoria_has_produto'];
$produto_idproduto1=$_POST['produto_idproduto'];
$categoria_idcategoria1=$_POST['categoria_idcategoria'];

$inserir = mysql_query("INSERT INTO categoria_has_produto(categoria_has_produto,produto_idproduto, categoria_idcategoria) 
VALUES ('$categoria_has_produto1',$produto_idproduto1', '$categoria_idcategoria1')")
or die (mysql_error());
mysql_close ($db);
include "consulta_catgeoria_has_produto.php";
?>
