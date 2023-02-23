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
<table width="30%" align="center" cellpadding="3">
<form method = "post" action = "incluir_estoque_backend.php"><br>
<p>
<td>Codigo Estoque:</td> 
<td><input type = "text" name = "idestoque"><br>
<br>
<tr>
<td>Codigo Produto:</td>
<td><input type = "text" name = "produto_idproduto"><br>
<br>
<tr>
<td>Quantidade:</td>
<td><input type = "number" name = "quantidade"><br>
<br>
<tr>
<td>Prateleira:</td>
<td><input type = "text" name = "prateleira"><br>
<br>
<tr>
<td>Fila:</td>
<td><input type = "text" name = "fila"><br>
<br>
<tr>
<td>Quantidade Máxima:</td>
<td><input type = "text" name = "qtd_max"><br>
<br>
<tr>
<td>Quantidade Mínima:</td>
<td><input type = "text" name = "qtd_min"><br>
<br>
<tr>
<table width="10%" align="center" cellpadding="3">
<td><input type = "submit" name = "Submit" value = "Incluir"></td><br>
<br>
</form>
</table>
<!--Fim do Incluir-->