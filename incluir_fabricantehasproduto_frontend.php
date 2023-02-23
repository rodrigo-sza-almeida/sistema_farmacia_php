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

<!--Inicio Incluir-->
<center>
<form method = "post" action = "incluir_fabricantehasproduto_backend.php"><br>
<p>

Codigo Fabricante: <select size = "1" name="fabricante_idfabricante">

<?php
//Gera lista de Fabricante
error_reporting(0);
$conexao=mysql_connect("127.0.0.1", "root", "vertrigo");
mysql_select_db("sistema_farmacia_noturno", $conexao);
$res=mysql_query("select * from fabricante");
while($registro=mysql_fetch_row($res))
{
	$idfabricante=$registro[0];
	$cnpj=$registro[1];
	echo "<option value = \"$idfabricante\">$cnpj</option>\n";
}
?>
</select><br><br>

Codigo Produto:<select size="1" name="produto_idproduto">

<?php
// Gera a lista de Produto
error_reporting(0);
$conexao=mysql_connect("127.0.0.1","root","vertrigo");
mysql_select_db("sistema_farmacia_noturno",$conexao);
$res=mysql_query("select * from produto");
while ($registro=mysql_fetch_row($res))
{
$idproduto=$registro[0];
$denominacao=$registro[1];
echo "<option value=\"$idproduto\">$denominacao</option>\n";
}
?>
</select><br><br>

<input type="submit" name="Submit" value="Incluir">
</form>
</center>
<!--Fim Incluir-->