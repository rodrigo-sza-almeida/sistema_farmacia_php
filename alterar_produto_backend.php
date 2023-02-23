<?php
error_reporting(0);
include "conexao.php";
$idproduto1=$_POST['idproduto'];
$denominacao1=$_POST['denominacao'];
$dosagem1=$_POST['dosagem'];
$fabricacao1=$_POST['fabricacao'];
$validade1=$_POST['validade'];
$lote1=$_POST['lote'];
$valor1=$_POST['valor'];
$qtd_max_empilhagem1=$_POST['qtd_max_empilhagem'];


$alterar = mysql_query("UPDATE produto 
                    SET denominacao = '$denominacao1',dosagem ='$dosagem1',fabricacao ='$fabricacao1',
				    validade ='$validade1',lote ='$lote1',valor='$valor1',qtd_max_empilhagem ='$qtd_max_empilhagem1'
					WHERE idproduto ='$idproduto1' ")
					or die (mysql_error());
mysql_close ($db);
include "consulta_produto.php";
?>