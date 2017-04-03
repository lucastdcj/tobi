<p align="justify">

<p>Leonardo Nascimento &eacute; um garoto de 13 anos apaixonado por cartografia. Durante as f&eacute;rias de janeiro de 2011,
ele alternava seu tempo entre navegar na internet (pesquisando sobre mapas) e arrumar sua cole&ccedil;&atilde;o de mapas.
Navegando na internet, Leonardo descobriu um site especializado em mapas, o Google Maps. Depois de alguns
dias usando o site, Leonardo percebeu que quando diminu&iacute;a o zoom algumas ruas n&atilde;o eram mais exibidas no
mapa, isto &eacute;, o zoom determinava tamb&eacute;m o n&iacute;vel de detalhe do mapa. A figura abaixo ilustra um dos testes
feito por Leonardo.</p>

<center><pre><img src="task_images/2011f2p2_rmapa1.png" width="220" height="220">      <img src="task_images/2011f2p2_rmapa2.png" width="220" height="220"></pre></center>

<p>Ele sabe que voc&ecirc; participa da OBI e que voc&ecirc; adora resolver os problemas que envolvem mapas. Ent&atilde;o resolveu
formular o seguinte problema: dado um mapa de cidades e rodovias que as ligam, selecione um subconjunto
das rodovias tal que entre qualquer par de cidades exista uma rota ligando-as e a soma dos comprimentos
das rodovias &eacute; m&iacute;nimo. Na figura abaixo e &agrave; esquerda temos um exemplo com cinco cidades e seis rodovias
ligando-as. A figura abaixo e &agrave; direita ilustra uma solu&ccedil;&atilde;o cuja soma dos comprimentos &eacute; 34.</p>

<center><pre><img src="task_images/2011f2p2_rmapa3.png" width="240" height="220">      <img src="task_images/2011f2p2_rmapa4.png" width="260" height="220"></pre></center>

<p>Para facilitar um pouco sua vida, Leonardo, determinou que voc&ecirc; s&oacute; precisa dizer a soma dos comprimentos das
rodovias do subconjunto selecionado para um dado mapa.</p>

<h3>Entrada</h3>

<p>A primeira linha da entrada cont&eacute;m dois n&uacute;meros <i>N</i> e <i>M</i> que representam o n&uacute;mero de cidades e o n&uacute;mero de
rodovias respectivamente. Cada uma das pr&oacute;ximas <i>M</i> linhas &eacute; composta por tr&ecirc;s inteiros <i>U</i>, <i>V</i> e <i>C</i> que indiciam
que existe uma rodovia de comprimento <i>C</i> que liga as cidades <i>U</i> e <i>V</i> .</p>

<h3>Sa&iacute;da</h3>
<p>A sa&iacute;da consiste em apenas uma linha contendo a soma do comprimento das rodovias selecionadas.</p>

<h3>Restri&ccedil;&otilde;es</h3>
<ul>
  <li>1 &le; <i>N</i> &le; 500.</li>
  <li>1 &le; <i>M</i> &le; 124750.</li>
  <li>1 &le; <i>U</i>, <i>V</i> &le; <i>N</i> e <i>U</i> 6 &ne; <i>V</i>.</li>
  <li>1 &le; <i>C</i> &le; 500.</li>
</ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
5 6
1 2 15
1 3 10
2 3 1
3 4 3
2 4 5
4 5 20
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
34
      </pre>
    </td>
  </tr>
</table>

<p></p>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
4 6
1 2 1
1 3 10
1 4 1
2 3 1
2 4 10
3 4 1
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
3
      </pre>
    </td>
  </tr>
</table>

</p>
