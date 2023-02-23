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
$result = mysql_query("select * from fabricante", $db);
echo "<center><table border='1' id = 'alter'>
<tr class = 'dif'>
	<td><h2>Código Fabricante</h2></td>
	<td><h2>CNPJ</h2></td>
	<td><h2>Nome Comercial</h2></td>
	<td><h2>Número de Licença Farmacêutica</h2></td>
	<td><h2>Representante Legal</h2></td>
	<td><h2>Endereço</h2></td>
	<td><h2>Número</h2></td>
	<td><h2>Complemento</h2></td>
	<td><h2>Bairro</h2></td>
	<td><h2>CEP</h2></td>
	<td><h2>Telefone</h2></td>
	<td><h2>Endereço Eletrônico</h2></td>
</tr>";
// Escreve resultado até que não haja mais linhas na tabela
while($row = mysql_fetch_array($result)) {
echo "<tr class = 'dif'><td>".$row["idfabricante"]."</td>
          <td>".$row["cnpj"]."</td>
		  <td>".$row["nomecomercial"]."</td>
		  <td>".$row["num_licenca_farmaceutica"]."</td>
		  <td>".$row["representante_legal"]."</td>
		  <td>".$row["endereco"]."</td>
		  <td>".$row["numero"]."</td>
		  <td>".$row["complemento"]."</td>
		  <td>".$row["bairro"]."</td>
		  <td>".$row["telefone"]."</td>
		  <td>".$row["endereco_eletronico"]."</td>
	  </tr><br>";
	}
	echo "</table></center>";
	echo "<br />";
	
mysql_free_result($result);
mysql_close ($db);
?>
<!--Fim Consulta-->