function build_menu(tp,opc)
{
  var fg_f = new Image;
  fg_f.src = figuras[0];
  
  var bm_f = document.getElementById('build-menu');
  
  var dv_f = document.createElement('div');
  dv_f.style.position = "relative";
  dv_f.setAttribute('id','dv_princ');
  

  var tb_f = document.createElement('table');
  tb_f.setAttribute('id','tb_princ');
  tb_f.width = "100%";
  tb_f.style.height = fg_f.height;
  tb_f.border = "0";
  tb_f.cellSpacing = "0";
  tb_f.cellPadding = "0";

  var tr_f = tb_f.insertRow(0);
  var td_f = new Array(opc.length);
  for(i = 0; i < opc.length; i++)
  {
    td_f[i] = tr_f.insertCell(i);
	td_f[i].style.background = 'url('+figuras[0]+')';
	
	td_f[i].onmouseover = function()
	{
	  this.style.background = 'url('+figuras[1]+')';
	}
	
	td_f[i].onmouseout = function()
	{
	  this.style.background = 'url('+figuras[0]+')';
	}
	
	if (opc[i].href != null)
      td_f[i].innerHTML = '<a href="'+opc[i].href+'" class="A"><div align="center"><font face="verdana" size="2"><b>'+opc[i].descricao+'</b></font></div></a>';	
	else
      td_f[i].innerHTML = '<div align="center"><font face="verdana" size="2" color="#FFFFFF"><b>'+opc[i].descricao+'</b></font></div>';	
	
	if (opc[i].filhos != null)
	  build_subh(opc[i].filhos,td_f[i]);
  }
  dv_f.appendChild(tb_f);
  bm_f.appendChild(dv_f);
//  alert(bm_f.innerHTML);
}

function build_subh(sopc,obj)
{
  var sfg_f = new Image;
  sfg_f.src = figuras[0];

  var sdv_f = document.createElement('div');
  sdv_f.style.position = 'absolute';
//  sdv_f.style.visibility = "hidden";
  sdv_f.style.display = "none";
  sdv_f.style.top = sdv_f.style.top + sfg_f.height;
//  sdv_f.style.left = 

  var stb_f = document.createElement('table');
//  stb_f.setAttribute('id','tb_princ');
//  stb_f.width = "100%";
//  stb_f.height = sfg_f.height;
  stb_f.border = "0";
  stb_f.cellSpacing = "0";
  stb_f.cellPadding = "0";

  var str_f = new Array(sopc.length);
  var std_f = new Array(sopc.length);
  for(p = 0; p < sopc.length; p++)
  {
    str_f[p] = stb_f.insertRow(p);
	str_f[p].style.height = sfg_f.height;
	str_f[p].align = "right";
//	str_f[p].width = "100%";

	std_f[p] = str_f[p].insertCell(0);
	std_f[p].style.background = 'url('+figuras[0]+')';

//	std_f[p].style.align = "left";

	std_f[p].onmouseover = function()
	{
	  this.style.background = 'url('+figuras[1]+')';
	}
	
	std_f[p].onmouseout = function()
	{
	  this.style.background = 'url('+figuras[0]+')';
	}
	
	if (sopc[p].href != null)
	  std_f[p].innerHTML = '<a href="'+sopc[p].href+'" class="A"><div align="center"><font face="verdana" size="2"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'+sopc[p].descricao+'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></div></a>';
	else
	  std_f[p].innerHTML = '<div align="center"><font face="verdana" size="2" color="#FFFFFF"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'+sopc[p].descricao+'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></div>';
	  
	if (sopc[p].filhos != null)
	  build_subh(sopc[p].filhos,std_f[p]);
  
	obj.onmouseover = function()
	{
	  sdv_f.style.display = "";
//	  sdv_f.style.left = event.x-event.y;
 	  obj.style.background = 'url('+figuras[1]+')';
	}
	
	obj.onmouseout = function()
	{
	  sdv_f.style.display = "none";
	  obj.style.background = 'url('+figuras[0]+')';
	}
  }
  sdv_f.appendChild(stb_f);
  obj.appendChild(sdv_f);
}
function CriaMenu(descricao,filhos,href) 
{ 
  this.descricao=descricao; 
  this.filhos=filhos; 
  this.href=href;
} 

var figuras = ['sub-button-tile.gif','sub-buttonOver-tile.gif','sub-button-left.gif','sub-buttonOver-left.gif','sub-button-right.gif','sub-buttonOver-right.gif'];

var op4 = new Array(12);
op4[0] = new CriaMenu("Categoria",null,"consulta_categoria.php");
op4[1] = new CriaMenu("Categoria\Produto",null,"consulta_categoriahasproduto.php");
op4[2] = new CriaMenu("Princípio Ativo",null,"consulta_principioativo.php");
op4[3] = new CriaMenu("Principio Ativo\Produto",null,"consulta_principioativohasproduto.php");
op4[4] = new CriaMenu("Produto",null,"consulta_produto.php");
op4[5] = new CriaMenu("Estoque",null,"consulta_estoque_frontend.php");
op4[6] = new CriaMenu("Fabricante",null,"consulta_fabricante_frontend.php");
op4[7] = new CriaMenu("Fabricante\Produto",null,"consulta_fabricantehasproduto.php");
op4[8] = new CriaMenu("Itens do Agendamento",null,"consulta_itensdoagendamento.php");
op4[9] = new CriaMenu("Agendamento",null,"consulta_agendamento.php");
op4[10] = new CriaMenu("Funcionário",null,"consulta_funcionario.php");
op4[11] = new CriaMenu("Paciente",null,"consulta_paciente.php");
op4[12] = new CriaMenu("Responsável",null,"consulta_responsavel.php");

var op3 = new Array(12);
op3[0] = new CriaMenu("Categoria",null,"excluir_categoria_frontend.php");
op3[1] = new CriaMenu("Categoria\Produto",null,"excluir_categoriahasproduto_frontend.php");
op3[2] = new CriaMenu("Princípio Ativo",null,"excluir_principioativo_frontend.php");
op3[3] = new CriaMenu("Principio Ativo\Produto",null,"excluir_principioativohasproduto_frontend.php");
op3[4] = new CriaMenu("Produto",null,"excluir_produto_frontend.php");
op3[5] = new CriaMenu("Estoque",null,"excluir_estoque_frontend.php");
op3[6] = new CriaMenu("Fabricante",null,"excluir_fabricante_frontend.php");
op3[7] = new CriaMenu("Fabricante\Produto",null,"excluir_fabricantehasproduto_frontend.php");
op3[8] = new CriaMenu("Itens do Agendamento",null,"excluir_itensdoagendamento_frontend.php");
op3[9] = new CriaMenu("Agendamento",null,"excluir_agendamento_frontend.php");
op3[10] = new CriaMenu("Funcionário",null,"excluir_funcionario_frontend.php");
op3[11] = new CriaMenu("Paciente",null,"excluir_paciente_frontend.php");
op3[12] = new CriaMenu("Responsável",null,"excluir_responsavel_frontend.php");


var op2 = new Array(12);
op2[0] = new CriaMenu("Categoria",null,"alterar_categoria_frontend.php");
op2[1] = new CriaMenu("Categoria\Produto",null,"alterar_categoria_has_produto_frontend.php");
op2[2] = new CriaMenu("Princípio Ativo",null,"alterar_principioativo_frontend.php");
op2[3] = new CriaMenu("Principio Ativo\Produto",null,"alterar_principioativo_has_produto_frontend.php");
op2[4] = new CriaMenu("Produto",null,"alterar_produto_frontend.php");
op2[5] = new CriaMenu("Estoque",null,"alterar_estoque_frontend.php");
op2[6] = new CriaMenu("Fabricante",null,"alterar_fabricante_frontend.php");
op2[7] = new CriaMenu("Fabricante\Produto",null,"alterar_fabricante_has_produto_frontend.php");
op2[8] = new CriaMenu("Itens do Agendamento",null,"alterar_itensdoagendamento_frontend.php");
op2[9] = new CriaMenu("Agendamento",null,"alterar_agendamento_frontend.php");
op2[10] = new CriaMenu("Funcionário",null,"alterar_funcionario_frontend.php");
op2[11] = new CriaMenu("Paciente",null,"alterar_paciente_frontend.php");
op2[12] = new CriaMenu("Responsável",null,"alterar_responsavel_frontend.php");

var op1 = new Array(12);
op1[0] = new CriaMenu("Categoria",null,"incluir_categoria_frontend.php");
op1[1] = new CriaMenu("Categoria\Produto",null,"incluir_categoriahasproduto_frontend.php");
op1[2] = new CriaMenu("Princípio Ativo",null,"incluir_principioativo_frontend.php");
op1[3] = new CriaMenu("Principio Ativo\Produto",null,"incluir_principioativohasproduto_frontend.php");
op1[4] = new CriaMenu("Produto",null,"incluir_produto_frontend.php");
op1[5] = new CriaMenu("Estoque",null,"incluir_estoque_frontend.php");
op1[6] = new CriaMenu("Fabricante",null,"incluir_fabricante_frontend.php");
op1[7] = new CriaMenu("Fabricante\Produto",null,"incluir_fabricantehasproduto_frontend.php");
op1[8] = new CriaMenu("Itens do Agendamento",null,"incluir_itensdoagendamento_frontdend.php");
op1[9] = new CriaMenu("Agendamento",null,"incluir_agendamento_frontend.php");
op1[10] = new CriaMenu("Funcionário",null,"incluir_funcionario_frontend.php");
op1[11] = new CriaMenu("Paciente",null,"incluir_paciente_frontend.php");
op1[12] = new CriaMenu("Responsável",null,"incluir_responsavel_frontend.php");

var op = new Array(4);
op[0] = new CriaMenu("Cadastrar",op1,null);
op[1] = new CriaMenu("Alterar",op2,null);
op[2] = new CriaMenu("Excluir",op3,null);
op[3] = new CriaMenu("Consultar",op4,null);

build_menu(1,op)