/* 
Estas fun�oes e c�digos s�o para o funcionamento do menu horizontal.
*/

var saiu = 0;	//Vari�vel que indica se o mouse est� em cima do menu ou j� saiu.
var intervalo;	//Intervalo retornado pela fun��o setInterval() serve para depois usar a fun��o clearInterval();
var localizacao = "http://leo/vcds/";

function start(){ //Quando o mouse passar em cima do menu que apareceu ent�o ser� executada esta fun��o.
	//Esta fun��o seta um intervalo de meio segundo 500 milisegundos para a execu��o da fun��o checamouse() ou seja,
	//a fun��o checamouse() ser� executada neste intervalo de tempo at� que seja executada o Clear interval.
	saiu = 0;
	intervalo = setInterval(checamouse, 500);
}

function checamouse(){
	if (saiu != 0){//Quando o mouse sai de cima do menu a variavel saiu fica iqual a 1 ent�o:
		escondemenu(); //O menu � escondido 
		clearInterval(intervalo); //Para a repeti��o da execu��o desta fun��o.
		saiu = 0;
	}
}

/*function escondeselect(){ //Codigo que procura dentro de um formul�rio a exist�ncia de um menu select. Caso ele exista este ficar� escondido.
	if (document.forms[0]){
		for (i = 0; i < document.forms[0].elements.length; i++){
			if (document.forms[0].elements(i).type == "select-one"){
				if (document.forms[0].elements(i).style.visibility == "") document.forms[0].elements(i).style.visibility = "hidden";
				else if (document.forms[0].elements(i).style.visibility == "visible") document.forms[0].elements(i).style.visibility = "hidden";
			}
		}
	}
}*/

function mostramenu_leo(){ //Insere dentro do <div> menucursos a tabela abaixo:
	/*escondemenu();
	escondeselect();*/
	var html = 		'<table width="110" cellpadding="3" cellspacing="0" class="tabela_menu">'
				+	'<tr><td class="celulasubmenu"><a href="vcd_browser.php" class="submenu">VCDs</td></tr>'
				+	'<tr><td class="celulasubmenu"><a href="clientes_browser.php" class="submenu">Clientes</td></tr>'
				+	'<tr><td class="celulasubmenu"><a href="tipos_vcds.php" class="submenu">Tipos de CDs</td></tr>'
				+	"</table>";
	document.all["menuleo"].innerHTML = html;
	document.all["menuleo"].style.position = "absolute";
	document.all["menuleo"].style.visibility = "visible";
	//document.all["menuleo"].style.width = "100%";
	document.all["menuleo"].style.left = "200px";
	document.all["menuleo"].style.top = "110px";
	document.all["menuleo"].style.top = "110px";
}

function escondemenu(){ //Faz qualquer menu que est� sendo mostrado seja escondido.
	document.all["menuleo"].innerHTML = "";
	document.all["menuleo"].style.visibility = "hidden";
	/*if (document.forms[0]){ //Codigo que procura dentro de um formul�rio a exist�ncia de um menu select. Caso ele exista este ser� reamostrado.
		for (i = 0; i < document.forms[0].elements.length; i++){
			if (document.forms[0].elements(i).type == "select-one"){
				if (document.forms[0].elements(i).style.visibility == "hidden") document.forms[0].elements(i).style.visibility = "visible";
			}
		}
	}*/
}