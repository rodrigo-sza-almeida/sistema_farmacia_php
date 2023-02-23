<?php
error_reporting(0);
include "conexao.php";
$idestoque1=$_POST['idestoque'];
$produto_idproduto1=$_POST['produto_idproduto'];
$quantidade1=$_POST['quantidade'];
$prateleira1=$_POST['prateleira'];
$fila1=$_POST['fila'];
$qtd_max1=$_POST['qtd_max'];
$qtd_min1=$_POST['qtd_min'];

$alterar = mysql_query("UPDATE estoque 
                    SET quantidade = '$quantidade1',prateleira ='$prateleira1',fila ='$fila1',
				    qtd_max ='$qtd_max1',qtd_min ='$qtd_min1' 
					WHERE idestoque ='$idestoque1' ")
					or die (mysql_error());
mysql_close ($db);
include "consulta_estoque.php";