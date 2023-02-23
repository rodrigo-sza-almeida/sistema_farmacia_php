<?php
error_reporting(0);
$db = mysql_connect ("127.0.0.1","root", "vertrigo" );
mysql_select_db("sistema_farmacia_noturno", $db);
$idfabricante1=$_POST['idfabricante'];
$cnpj1=$_POST['cnpj'];
$nomecomercial1=$_POST['nomecomercial'];
$num_licenca_farmaceutica1=$_POST['num_licenca_farmaceutica'];
$representante_legal1=$_POST['representante_legal'];
$endereco1=$_POST['endereco'];
$numero1=$_POST['numero'];
$complemento1=$_POST['complemento'];
$bairro1=$_POST['bairro'];
$cep1=$_POST['cep'];
$telefone1=$_POST['telefone'];
$endereco_eletronico1=$_POST['endereco_eletronico'];

$inserir = mysql_query("INSERT INTO fabricante(idfabricante,cnpj,nomecomercial,num_licenca_farmaceutica,representante_legal,endereco,numero,
complemento, bairro, cep, telefone, endereco_eletronico )
 VALUES ('$idfabricante1','$cnpj1','$nomecomercial1','$num_licenca_farmaceutica1','$representante_legal1','$endereco1',
'$numero1','$complemento1','$bairro1','$cep1','$telefone1','$endereco_eletronico1')") or die (mysql_error());
mysql_close ($db);
include "consulta_fabricante.php";
?>