<?php
error_reporting (0);
$db = mysql_connect("127.0.0.1", "root", "vertrigo");
mysql_select_db("sistema_farmacia_noturno", $db);
$fabricante_idfabricante1=$_POST['fabricante_idfabricante'];
$produto_idproduto1=$_POST['produto_idproduto'];

$inserir = mysql_query("INSERT INTO fabricante_has_produto(fabricante_idfabricante, produto_idproduto) VALUES ('fabricante_idfabricante1', 'produto_idproduto1')")
or die (mysql_error());
mysql_close ($db);
include "consulta_fabricante_has_produto.php";
?>