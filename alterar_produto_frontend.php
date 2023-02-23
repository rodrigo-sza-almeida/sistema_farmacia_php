<link rel = "stylesheet" type = "text/css" href = "css_arquivos/estilo_formulario.css">

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

<meta http-equiv="Content-Type" content="text/html;charset=utf-8"> 
<center>
<!--Início Alterar-->
<form method="post" action="alterar_produto_backend.php"><br>
<p> 
Codigo:<select size="1" name="idproduto">
<?php
// Gera a lista de saida
include "conexao.php";
$res=mysql_query("select * from produto");
while ($registro=mysql_fetch_row($res))
{
$idproduto=$registro[0];
$denominacao=$registro[1];
echo "<option value=\"$idproduto\">$idproduto - $denominacao</option>\n";
}
?>
</select><br><br>

<table width="30%" align="center" cellpadding="3">
<td>Denominação:</td>
<td><input type = "text" name = "denominacao"><br>
<br>
<tr>
<td>Dosagem:</td>
<td><input type = "text" name = "dosagem"><br>
<br>
<tr>
<td>Fabricação:</td>
<td><input type = "text" name = "fabricacao"><br>
<br>
<tr>
<td>Validade:</td>
<td><input type = "text" name = "validade"><br>
<br>
<tr>
<td>Lote:</td>
<td><input type = "text" name = "lote"><br>
<br>
<tr>
<td>Valor:</td>
<td><input type = "text" name = "valor"><br>
<br>
<tr>
<td>Quantidade Máxima de Empilhagem:</td>
<td><input type = "text" name = "qtd_max_empilhagem"><br>
<br>
<tr>
<table width="10%" align="center" cellpadding="3">
<td><input type="submit" name="Submit" value="Alterar"></td><br><br>
</form>
</table>
<!--Fim Alterar-->