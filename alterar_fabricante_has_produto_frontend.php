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
<form method="post" action="alterar_fabricante_has_produto_backend.php"><br>
<p> 
Codigo:<select size="1" name="fabricante_has_produto">
<?php
// Gera a lista de saida
include "conexao.php";
$res=mysql_query("select * from fabricante_has_produto");
while ($registro=mysql_fetch_row($res))
{
$fabricante_has_produto=$registro[0];
$fabricante_idfabricante=$registro[1];
echo "<option value=\"$fabricante_has_produto\">$fabricante_has_produto - $fabricante_idfabricante</option>\n";
}
?>
</select><br><br>

Código:
<input type="text" name="categoria_has_produto"><br>
<br>
Código Fabricante:
<input type="text" name="fabricante_idfabricante"><br>
<br>
Código Produto:
<input type="text" name="produto_idproduto"><br>
<br>

<input type="submit" name="Submit" value="Alterar">
</form>
</center>
<!--Fim Alterar-->