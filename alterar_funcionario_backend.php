<?php
error_reporting(0);
include "conexao.php";
$idfuncionario1=$_POST['idfuncionario'];
$login1=$_POST['login'];
$senha1=$_POST['senha'];
$data_admissao1=$_POST['data_admissao'];
$setor1=$_POST['setor'];
$nome1=$_POST['nome'];
$nome_pai1=$_POST['nome_pai'];
$nome_mae1=$_POST['nome_mae'];
$sexo1=$_POST['sexo'];
$nacionalidade1=$_POST['nacionalidade'];
$data_nascimento1=$_POST['data_nascimento'];
$cpf1=$_POST['cpf'];
$rg1=$_POST['rg'];
$endereco1=$_POST['endereco'];
$estado_civil1=$_POST['estado_civil'];

$alterar = mysql_query("UPDATE funcionario 
                    SET login = '$login1',senha ='$senha1',data_admissao ='$data_admissao1',
				    setor ='$setor1',nome ='$nome1',nome_pai ='$nome_pai1', nome_mae ='$nome_mae1', sexo ='$sexo1',
					nacionalidade ='$nacionalidade1', data_nascimento ='$data_nascimento1', cpf ='$cpf1', rg = 'rg1', endereco = '$endereco1', estado_civil = '$estado_civil1'
					WHERE idfuncionario ='$idfuncionario1' ")
					or die (mysql_error());
mysql_close ($db);
include "consulta_funcionario.php";
?>