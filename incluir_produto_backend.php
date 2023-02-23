<?php
error_reporting(0);
$db = mysql_connect ("127.0.0.1","root", "vertrigo" );
mysql_select_db("sistema_farmacia_noturno", $db);
$idproduto1=$_POST['idproduto'];
$denominacao1=$_POST['denominacao'];
$dosagem1=$_POST['dosagem'];
$fabricacao1=$_POST['fabricacao'];
$validade1=$_POST['validade'];
$lote1=$_POST['lote'];
$valor1=$_POST['valor'];
$qtd_max_empilhagem1=$_POST['qtd_max_empilhagem'];

$inserir = mysql_query("INSERT INTO produto(idproduto, denominacao, dosagem, fabricacao, validade,lote, valor, qtd_max_empilhagem )
 VALUES ('$idproduto1','$denominacao1', '$dosagem1', '$fabricacao1', '$validade1', '$lote1', '$valor1', '$qtd_max_empilhagem1')") or die (mysql_error());
mysql_close ($db);
include "consulta_produto.php";
?>