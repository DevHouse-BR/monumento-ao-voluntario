<?
error_reporting(E_NONE);
require("includes/funcoes.php");
setcookie("pginicial", "sim");

if($_COOKIE["pginicial"] == "sim") inicia_pagina(false);
else inicia_pagina(true);

?>
 <table width="100%">
					<tr>
						<td width="70%" style="text-align:justify; padding:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px;" align="left" valign="top"><p align="left"><img src="images/bullet.gif" align="absmiddle">&nbsp;�������
<b>Projeto Comunit�rio do Centen�rio</b><br>
<br>
<center><b>�Monumento ao Volunt�rio�</b></center>


<p class=MsoNormal><b><span style='font-size:14.0pt;mso-bidi-font-size:12.0pt'>Discri��o
b�sica:</span> </b><span style='mso-spacerun:yes'>�</span>Representa��o de duas
m�os unidas, simbolizando a ajuda de quem est� em melhor condi��o �quele que
est� em patamar inferior.<span style='mso-bidi-font-size:10.0pt'><o:p></o:p></span></p>

<p class=MsoNormal>1. OBJETIVOS:</p>

<p class=MsoNormal>O Projeto <b style='mso-bidi-font-weight:normal'>�<u>Monumento
ao Volunt�rio </u>�</b> tem como objetivos principais:</p>


<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l2 level1 lfo1;tab-stops:list 36.0pt'>Reconhecer
     o trabalho volunt�rio realizado por milhares de pessoas.</li>
 <li class=MsoNormal style='mso-list:l2 level1 lfo1;tab-stops:list 36.0pt'>Promover
     a cultura do voluntariado. </li>
 <li class=MsoNormal style='mso-list:l2 level1 lfo1;tab-stops:list 36.0pt'>Divulgar
     casos exemplares de voluntariado em Joinville. Oferecendo op��es �queles
     que querem ajudar e n�o sabem como.</li>
 <li class=MsoNormal style='mso-list:l2 level1 lfo1;tab-stops:list 36.0pt'>Unir
     Rotary em torno de uma bandeira universal do voluntariado, fazendo com que
     entre em contato com projetos j� desenvolvidos por outras
     pessoas/entidades.</li>
 <li class=MsoNormal style='mso-list:l2 level1 lfo1;tab-stops:list 36.0pt'>Promover
     um padr�o de voluntariado Rotary, ajudando a separar voluntariado de real
     valor social do meramente promocional.</li>
 <li class=MsoNormal style='mso-list:l2 level1 lfo1;tab-stops:list 36.0pt'>Marcar
     o centen�rio do Rotary International</li>
</ul>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<p class=MsoNormal>2. LOCAL DO PROJETO</p>

<p class=MsoNormal>Em primeira etapa, como projeto piloto, ser� erguido o <u>Monumento
ao Volunt�rio</u> em pra�a central de Joinville, Santa Catarina, Brasil.</p>


<p class=MsoNormal>Este monumento tem dezessete metros de altura e nele
ser� fixada a roda denteada e abaixo desta a inscri��o <b style='mso-bidi-font-weight:
normal'>�HOMENAGEM AO VOLUNT�RIO�.</b></p>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<p class=MsoNormal>3. IMPORT�NCIA DO PROJETO</p>

<p class=MsoNormal>O projeto <u>Monumento ao Volunt�rio</u>, possu� enorme
import�ncia cultural.</p>


<p class=MsoNormal>Em um mundo cada vez mais materialista e individualista, �
fundamental a promo��o e divulga��o de a��es realizadas em prol de outras
pessoas, sem nenhum benef�cio material imediato.</p>

<p class=MsoNormal>Apesar de em muitas partes do mundo a a��o do<span
style='mso-spacerun:yes'>� </span>voluntariado ser uma pr�tica j� consolidada,
em outras, como no Brasil, ela est� apenas iniciando.</p>

<p class=MsoNormal>Dessa forma, � natural que pessoas que hoje realizam
trabalhos volunt�rios encontrem diversos obst�culos como a indiferen�a de
outros e a descren�a por parte de terceiros sobre objetivo de simplesmente
ajudar sem algo material em troca.</p>

<p class=MsoNormal>Forma-se assim um ex�rcito numeroso de volunt�rios, que dedica
parte de sua vida em prol de outros sem esmerar que esse esfor�o seja
reconhecido.</p>
			  <p>e-mail: <a href="mailto:doar@monumentoaovoluntario.com.br">doar@monumentoaovoluntario.com.br </a></p><br><br>
			  <center><img src="images/rotary_100.jpg"></center>
			  </td>
			  <td width="30%" align="left" valign="top" style="padding:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; border-left: 2px solid #FFFFFF;">
				<? lista_noticias(); ?>
			  </td>
					</tr>
				</table>
<?
especificacoes();
if($_COOKIE["pginicial"] == "sim") fim_pagina(false);
else fim_pagina(true);
?>