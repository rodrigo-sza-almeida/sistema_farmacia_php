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
<form method = "post" action = "incluir_agendamento_backend.php"><br>
<p>
<td>Codigo Agendamento:</td>
<td><input type = "text" name = "idagendamento"><br>
<br>
<tr>
<td>Codigo Prontuario:</td>
<td><input type = "text" name = "paciente_prontuario"><br>
<br>
<tr>
<td>Codigo Responsavel:</td>
<td><input type = "text" name = "paciente_responasvel_idresponsavel"><br>
<br>
<tr>
<td>Codigo Funcionario:</td>
<td><input type = "text" name = "funcionario_idfuncionario"><br>
<br>
<tr>
<td>Data de Solicitacao:</td>
<td><input type = "text" name = "data_solicitacao"><br>
<br>
<tr>
<td>Horario:</td>
<td><input type = "text" name = "horario"><br>
<br>
<tr>
<td>Data de Procedimento:</td>
<td><input type = "text" name = "data_procedimento"><br>
<br>
<tr>
<td>Realizado:</td>
<td><input type = "text" name = "realizado"><br>
<br>
<tr>
<table width="10%" align="center" cellpadding="3">
<td><input type = "submit" name = "Submit" value = "Incluir"></td><br>
<br>
</form>
</table>
<!--Fim do Incluir-->