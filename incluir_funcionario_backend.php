<?php
error_reporting(0);
$db = mysql_connect ("127.0.0.1","root", "vertrigo" );
mysql_select_db("sistema_farmacia_noturno", $db);
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

$inserir = mysql_query("INSERT INTO funcionario(idfuncionario, login, senha, data_admissao, setor, nome, nome_pai, nome_mae, sexo, nacionalidade, 
data_nascimento, cpf, rg, endereco, estado_civil) VALUES ('$idfuncionario1','$login1','$senha1','$data_admissao1','$setor1','$nome1','$nome_pai1',
'$nome_mae1','$sexo1','$nacionalidade1','$data_nascimento1','$cpf1','$rg1','$endereco1','$estado_civil1')") or die (mysql_error());
mysql_close ($db);
include "consulta_funcionario.php";
?>