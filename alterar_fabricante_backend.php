<?php
error_reporting(0);
include "conexao.php";
$idfabricante1=$_POST['idfabricante'];
$cnpj1=$_POST['cnpj'];
$nomecomercial1=$_POST['nomecomercial'];
$num_licenca_farmaceutica1=$_POST['num_licenca_faramceutica'];
$representante_legal1=$_POST['representante_legal'];
$endereco1=$_POST['endereco'];
$numero1=$_POST['numero'];
$complemento1=$_POST['complemento'];
$bairro1=$_POST['bairro'];
$cep1=$_POST['cep'];
$telefone1=$_POST['telefone'];
$endereco_eletronico1=$_POST['endereco_eletronico'];


$alterar = mysql_query("UPDATE fabricante 
                    SET cnpj = '$cnpj1',nomecomercial ='$nomecomercial1',num_licenca_farmaceutica ='$num_licenca_farmaceutica1',
				    representante_legal ='$representante_legal1',endereco ='$endereco1',numero='$numero1',complemento ='$complemento1',bairro ='$bairro1',
					cep ='$cep1', telefone ='$telefone1', endereco_eletronico ='$endereco_eletronico1'
					WHERE idfabricante ='$idfabricante1' ")
					or die (mysql_error());
mysql_close ($db);
include "consulta_fabricante.php";
?>