<?php
error_reporting(0);
$db = mysql_connect ("127.0.0.1","root", "vertrigo" );
mysql_select_db("sistema_farmacia_noturno", $db);
$idprincipioativo1=$_POST['idprincipioativo'];
$principioativo1=$_POST['principioativo'];

$inserir = mysql_query("INSERT INTO principioativo(idprincipioativo, principioativo) VALUES ('$idprincipioativo1','$principioativo1')") or die (mysql_error());
mysql_close ($db);
include "consulta_principioativo.php";
?>