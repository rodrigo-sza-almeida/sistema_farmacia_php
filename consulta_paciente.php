<link rel = "stylesheet" type = "text/css" href = "css_consulta/estilo_consulta.css">

<!--Menu-->

<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style>
.A:link {
	TEXT-DECORATION: none;
	font-family:Verdana;
	color:#FFFFFF;
}
.A:visited { TEXT-DECORATION: none; font-family:Verdana; color:#333333}
.A:hover {
	TEXT-DECORATION: none;
	font-family:Verdana;
	color:#0088FF;
}
</style>
</head>
<body>
<table width="98%" border="0" color = "#8AB0AB" cellspacing="0" cellpadding="0">
  <tr align="left" valign="top"> 
    <td colspan="3"><span> </span> </td>
  </tr>
  <tr align="left" valign="top"> 
    <td height="28"></td>
    <td height="28">&nbsp;</td>
    <td height="28" align="right"></td>
  </tr>
  <tr> 
    <td width="3%"></td>
    <td width="94%" align="left" valign="top"><div id="build-menu"></div></td>
    <td width="3%" align="right"></td>
  </tr>
  <tr> 
    <td colspan="3">&nbsp;</td>
  </tr>
</table>
<script src="teste2.js"></script>
</body>
</html>
<!--Fim do Menu-->

<?php
include "conexao.php";
$result = mysql_query("select * from paciente", $db);
echo "<center><table border='1' id = 'alter'>
<tr class = 'div'>
	<td><h2>Prontuário</h2></td>
	<td><h2>Responsável</h2></td>
	<td><h2>Data de Entrada</h2></td>
	<td><h2>Data da Alta</h2></td>
	<td><h2>Nome</h2></td>
	<td><h2>Nome do Pai</h2></td>
	<td><h2>Nome da Mãe</h2></td>
	<td><h2>Sexo</h2></td>
	<td><h2>Nacionalidade</h2></td>
	<td><h2>Data de Nascimento</h2></td>
	<td><h2>CPF</h2></td>
	<td><h2>RG</h2></td>
	<td><h2>Endereço</h2></td>
	<td><h2>Tipo Sanguíneo</h2></td>
</tr>";
// Escreve resultado até que não haja mais linhas na tabela
while($row = mysql_fetch_array($result)) {
echo "<tr class = 'div'><td>".$row["prontuario"]."</td>
          <td>".$row["responsavel"]."</td>
		  <td>".$row["data_entrada"]."</td>
		  <td>".$row["data_alta"]."</td>
		  <td>".$row["nome"]."</td>
		  <td>".$row["nome_pai"]."</td>
		  <td>".$row["nome_mae"]."</td>
		  <td>".$row["sexo"]."</td>
		  <td>".$row["nacionalidade"]."</td>
		  <td>".$row["data_nascimento"]."</td>
		  <td>".$row["cpf"]."</td>
		  <td>".$row["rg"]."</td>
		  <td>".$row["endereco"]."</td>
		  <td>".$row["tipo_sanguineo"]."</td>
	  </tr><br>";
	}
	echo "</table></center>";
	echo "<br />";
	
mysql_free_result($result);
mysql_close ($db);
?>
<!--Fim Consulta-->