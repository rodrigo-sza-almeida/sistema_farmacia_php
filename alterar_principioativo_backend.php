<?php
error_reporting(0);
include "conexao.php";
$idprincipioativo1=$_POST['idprincipioativo'];
$principioativo1=$_POST['principioativo'];


$alterar = mysql_query("UPDATE principioativo 
                    SET principioativo = '$principioativo1'
					WHERE idprincipioativo ='$idprincipioativo1' ")
					or die (mysql_error());
mysql_close ($db);
include "consulta_principioativo.php";
?>