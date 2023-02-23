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
<!--Início Excluir-->
<form method="post" action="excluir_principioativo_backend.php"><br>
<p> <br>
Codigo:<select size="1" name="idprincipioativo">
<?php
// Gera a lista de saida
include "conexao.php";
$res=mysql_query("select * from principioativo");
while ($registro=mysql_fetch_row($res))
{
$idprincipioativo=$registro[0];
$principioativo=$registro[1];
echo "<option value=\"$idprincipioativo\">$idprincipioativo - $principioativo</option>\n";
}
?>
</select><br><br>

<input type="submit" name="Submit" value="Excluir" class="botao">
</form>
</center>
<!--Fim Excluir-->