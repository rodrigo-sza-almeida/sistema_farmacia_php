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
<form method="post" action="alterar_fabricante_backend.php"><br>
<p> 
Codigo:<select size="1" name="idfabricante">
<?php
// Gera a lista de saida
include "conexao.php";
$res=mysql_query("select * from fabricante");
while ($registro=mysql_fetch_row($res))
{
$idfabricante=$registro[0];
$cnpj=$registro[1];
echo "<option value=\"$idfabricante\">$idfabricante - $cnpj</option>\n";
}
?>
</select><br><br>

<table width="25%" align="center" cellpadding="15">
<p>
<td>CNPJ:</td>
<td><input type = "text" name = "cnpj"><br>
<br>
<tr>
<td>Nome Comercial:</td>
<td><input type = "text" name = "nomecomercial"><br>
<br>
<tr>
<td>Número de Licença Farmacêutica:</td>
<td><input type = "text" name = "num_licenca_farmaceutica"><br>
<br>
<tr>
<td>Representante Legal:</td>
<td><input type = "text" name = "representante_legal"><br>
<br>
<tr>
<td>Endereço:</td>
<td><input type = "text" name = "endereco"><br>
<br>
<tr>
<td>Número:</td>
<td><input type = "text" name = "numero"><br>
<br>
<tr>
<td>Complemento:</td>
<td><input type = "text" name = "complemento"><br>
<br>
<tr>
<td>Bairro:</td>
<td><input type = "text" name = "bairro"><br>
<br>
<tr>
<td>CEP:</td>
<td><input type = "text" name = "cep"><br>
<br>
<tr>
<td>Telefone:</td>
<td><input type = "text" name = "telefone"><br>
<br>
<tr>
<td>Endereço Eletrônico:</td>
<td><input type = "text" name = "endereco_eletronico"><br>
<br>
<tr>
<table width="5%" align="center" cellpadding="3">
<td><input type="submit" name="Submit" value="Alterar"></td><br><br>
</form>
</table>
<!--Fim Alterar-->