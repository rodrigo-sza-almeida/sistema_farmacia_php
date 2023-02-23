<?php
error_reporting(0);
$db = mysql_connect ("127.0.0.1","root", "vertrigo" );
mysql_select_db("sistema_farmacia_noturno", $db);
$idresponsavel1=$_POST['idresponsavel'];
$nome_responsavel1=$_POST['nome_responsavel'];
$cpf1=$_POST['cpf'];
$rg1=$_POST['rg'];

$inserir = mysql_query("INSERT INTO responsavel(idresponsavel, nome_responsavel, cpf, rg) VALUES ('$idresponsavel1','$nome_responsavel1', 
 '$cpf1', '$rg1')") or die (mysql_error());
mysql_close ($db);
include "consulta_responsavel.php";
?>