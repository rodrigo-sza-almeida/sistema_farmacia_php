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
<form method="post" action="alterar_paciente_backend.php"><br>
<p> 
Codigo:<select size="1" name="prontuario">
<?php
// Gera a lista de saida
include "conexao.php";
$res=mysql_query("select * from paciente");
while ($registro=mysql_fetch_row($res))
{
$prontuario=$registro[0];
$responsavel_idresponsavel=$registro[1];
echo "<option value=\"$prontuario\">$prontuario - $responsavel_idresponsavel</option>\n";
}
?>
</select><br><br>

<table width="30%" align="center" cellpadding="3">
<td>Data de Entrada:</td>
<td><input type = "text" name = "data_entrada"><br>
<br>
<tr>
<td>Data da Alta:</td>
<td><input type = "text" name = "data_alta"><br>
<br>
<tr>
<td>Nome:</td>
<td><input type = "text" name = "nome"><br>
<br>
<tr>
<td>Nome do Pai:</td>
<td><input type = "text" name = "nome_pai"><br>
<br>
<tr>
<td>Nome da Mae:</td>
<td><input type = "text" name = "nome_mae"><br>
<br>
<tr>
<td>Sexo:</td>
<td><input type = "text" name = "sexo"><br>
<br>
<tr>
<td>Nacionalidade:</td>
<td><input type = "text" name = "nacionalidade"><br>
<br>
<tr>
<td>Data de Nascimento:</td>
<td><input type = "text" name = "data_nascimento"><br>
<br>
<tr>
<td>CPF:</td>
<td><input type = "text" name = "cpf"><br>
<br>
<tr>
<td>RG:</td>
<td><input type = "text" name = "rg"><br>
<br>
<tr>
<td>Endereco:</td>
<td><input type = "text" name = "endereco"><br>
<br>
<tr>
<td>Tipo Sanguineo:</td>
<td><input type = "text" name = "tipo_sanguineo"><br>
<br>
<tr>
<table width="10%" align="center" cellpadding="3">
<td><input type="submit" name="Submit" value="Alterar"></td>
</form>
</table>
<!--Fim Alterar-->