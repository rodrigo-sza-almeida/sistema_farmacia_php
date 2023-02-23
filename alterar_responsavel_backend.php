<?php
error_reporting(0);
include "conexao.php";
$idresponsavel1=$_POST['idresponsavel'];
$nome_responsavel1=$_POST['nome_responsavel'];
$cpf1=$_POST['cpf'];
$rg1=$_POST['rg'];

$alterar = mysql_query("UPDATE responsavel 
                    SET nome_responsavel = '$nome_responsavel1', cpf = '$cpf1', rg = '$rg1'
					WHERE idresponsavel ='$idresponsavel1' ")
					or die (mysql_error());
mysql_close ($db);
include "consulta_responsavel.php";
?>