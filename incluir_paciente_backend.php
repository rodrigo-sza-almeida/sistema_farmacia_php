<?php
error_reporting(0);
$db = mysql_connect ("127.0.0.1","root", "vertrigo" );
mysql_select_db("sistema_farmacia_noturno", $db);
$prontuario1=$_POST['prontuario'];
$responsavel_idresponsavel1=$_POST['responsavel_idresponsavel'];
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

$inserir = mysql_query("INSERT INTO paciente(prontuario,responsavel_idresponsavel,data_entrada,data_alta,nome,nome_pai,nome_mae,sexo,nacionalidade,data_nascimento,
cpf,rg,endereco,tipo_sanguineo) VALUES ('$prontuario1','$responsavel_idresponsavel1','$data_entrada1','$data_alta1','$nome1','$nome_pai1','$nome_mae1',
'$sexo1','$nacionalidade1','$data_nascimento1','$cpf1', '$rg1', '$endereco1', '$tipo_sanguineo1')") or die (mysql_error());
mysql_close ($db);
include "consulta_paciente.php";
?>