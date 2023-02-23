<?php
error_reporting(0);
$db = mysql_connect ("127.0.0.1","root", "vertrigo" );
mysql_select_db("sistema_farmacia_noturno", $db);
$idestoque1=$_POST['idestoque'];
$produto_idproduto1=$_POST['produto_idproduto'];
$quantidade1=$_POST['quantidade'];
$prateleira1=$_POST['prateleira'];
$fila1=$_POST['fila'];
$qtd_max1=$_POST['qtd_max'];
$qtd_min1=$_POST['qtd_min'];

$inserir = mysql_query("INSERT INTO estoque(idestoque, produto_idproduto, quantidade, prateleira, fila, qtd_max, qtd_min)
 VALUES ('$idestoque1','$produto_idproduto1', '$quantidade1', '$prateleira1', '$fila1', '$qtd_max1', '$qtd_min1')") or die (mysql_error());
mysql_close ($db);
include "consulta_estoque.php";
?>