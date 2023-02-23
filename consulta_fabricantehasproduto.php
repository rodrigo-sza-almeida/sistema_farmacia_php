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
$result = mysql_query("select * from fabricante_has_produto", $db);
echo "<center><table border='1' id = 'alter'>
<tr class = 'dif'>
	<td><h1>Fabricante</h1></td>
	<td><h1>Produto</h1></td>
</tr>";
// Escreve resultado até que não haja mais linhas na tabela
while($row = mysql_fetch_array($result)) {
echo "<tr class = 'dif'><td>".$row["fabricante_idfabricante"]."</td>
          <td>".$row["produto_idproduto"]."</td>
	  </tr><br>";
	}
	echo "</table></center>";
	echo "<br />";
	
mysql_free_result($result);
mysql_close ($db);
?>
<!--Fim Consulta-->