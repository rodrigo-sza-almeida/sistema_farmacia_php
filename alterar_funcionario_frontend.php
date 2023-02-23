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
<form method="post" action="alterar_funcionario_backend.php"><br>
<p> 
Codigo:<select size="1" name="idfuncionario">
<?php
// Gera a lista de saida
include "conexao.php";
$res=mysql_query("select * from funcionario");
while ($registro=mysql_fetch_row($res))
{
$idfuncionario=$registro[0];
$data_admissao=$registro[1];
echo "<option value=\"$idfuncionario\">$idfuncionario - $data_admissao</option>\n";
}
?>
</select><br><br>

<table width="30%" align="center" cellpadding="3">
<td>Login:</td>
<td><input type = "text" name = "login"><br>
<br>
<tr>
<td>Senha:</td>
<td><input type = "text" name = "senha"><br>
<br>
<tr>
<td>Data Admissao:</td>
<td><input type = "text" name = "data_admissao"><br>
<br>
<tr>
<td>Setor:</td>
<td><input type = "text" name = "setor"><br>
<br>
<tr>
<td>Nome:</td>
<td><input type = "text" name = "nome"><br>
<br>
<tr>
<td>Nome do pai:</td>
<td><input type = "text" name = "nome_pai"><br>
<br>
<tr>
<td>Nome da mae:</td>
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
<td>Estado Civil:</td>
<td><input type = "text" name = "estado_civil"><br>
<br>
<tr>
<table width="10%" align="center" cellpadding="3">
<td><input type="submit" name="Submit" value="Alterar"></td><br><br>
</form>
</table>
<!--Fim Alterar-->