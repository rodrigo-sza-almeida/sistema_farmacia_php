<?php
error_reporting(0);
include "conexao.php";
$prontuario1=$_POST['prontuario'];
$data_entrada1=$_POST['data_entrada'];
$data_alta1=$_POST['data_alta'];
$nome1=$_POST['nome'];
$nome_pai1=$_POST['nome_pai'];
$nome_mae1=$_POST['nome_mae'];
$sexo1=$_POST['sexo'];
$nacionalidade1=$_POST['nacionalidade'];
$data_nascimento1=$_POST['data_nascimento'];
$cpf1=$_POST['cpf'];
$rg1=$_POST['rg'];
$endereco1=$_POST['endereco'];
$tipo_sanguineo1=$_POST['tipo_sanguineo'];

$alterar = mysql_query("UPDATE paciente 
                    SET data_entrada = '$data_entrada1',data_alta ='$data_alta1',
					nome ='$nome1',nome_pai ='$nome_pai1', nome_mae ='$nome_mae1', sexo ='$sexo1',
					nacionalidade ='$nacionalidade1', data_nascimento ='$data_nascimento1', cpf ='$cpf1', rg = 'rg1', endereco = 'endereco1', tipo_sanguineo = '$tipo_sanguineo1'
					WHERE prontuario ='$prontuario1' ")
					or die (mysql_error());
mysql_close ($db);
include "consulta_paciente.php";
?>