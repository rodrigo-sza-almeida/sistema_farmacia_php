<?php
error_reporting(0);
$db = mysql_connect ("127.0.0.1","root", "vertrigo" );
mysql_select_db("sistema_farmacia_noturno", $db);
$idcategoria1=$_POST['idcategoria'];
$categoria1=$_POST['categoria'];

$inserir = mysql_query("INSERT INTO categoria(idcategoria, categoria) VALUES ('$idcategoria1','$categoria1')") or die (mysql_error());
mysql_close ($db);
include "consulta_categoria.php";
?>

