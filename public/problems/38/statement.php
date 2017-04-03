<p align="justify">

<p>Em um arquip&eacute;lago no meio do Oceano Pac&iacute;fico a economia &eacute; regida pela pesca, pois o peixe &eacute; o principal
alimento dispon&iacute;vel. Ultimamente, a popula&ccedil;&atilde;o desse arquip&eacute;lago tem aumentado drasticamente, o que levou a
um grande aumento da pesca, e, consequentemente, a problemas.</p>
<p>Neste arquip&eacute;lago, cada pescador vai diariamente ao alto mar com a inten&ccedil;&atilde;o de conseguir trazer o maior n&uacute;mero
de peixes para o seu vilarejo. Com a expans&atilde;o da pesca, os pescadores est&atilde;o come&ccedil;ando a jogar suas redes de
pesca por cima das de outros pescadores. Com isso, os pescadores perdem, pois apenas o primeiro pescador
pega os peixes da intersec&ccedil;&atilde;o entre as redes.</p>
<p>A Associa&ccedil;&atilde;o dos Pescadores da ilha decidiu fazer um levantamento para descobrir quanto do mar est&aacute; de fato
sendo aproveitado, ou seja, qual a &aacute;rea do mar que est&aacute; coberta por pelo menos uma rede de pesca.</p>
<p>Como h&aacute; muitas intersec&ccedil;&otilde;es entre as redes de pesca, &eacute; muito dif&iacute;cil para a associa&ccedil;&atilde;o calcular a &aacute;rea total da
regi&atilde;o coberta pelas redes. Por este motivo, eles pediram para que voc&ecirc; escrevesse um programa para resolver
este problema.</p>
<p>Como &eacute; muito dif&iacute;cil navegar pelo mar, os pescadores sempre jogam as redes de forma que as regi&otilde;es cobertas por
cada rede s&atilde;o sempre ret&acirc;ngulos com lados paralelos aos eixos, se imaginarmos o mar como um plano cartesiano.</p>


<h3>Entrada</h3>

<p>A primeira linha da entrada possui um inteiro <i>N</i> indicando o n&uacute;mero de redes que foram lan&ccedil;adas. As pr&oacute;ximas
<i>N</i> linhas descrevem as regi&otilde;es cobertas pelas redes: cada uma cont&eacute;m quatro inteiros <i>X</i><sub>i</sub>
e <i>X</i><sub>f</sub> , <i>Y</i><sub>i</sub> e <i>Y</i><sub>f</sub>. A regi&atilde;o coberta pela rede em quest&atilde;o cont&eacute;m todo ponto (<i>X</i>, <i>Y</i>) tal que <i>X</i><sub>i</sub> &le; <i>X</i> &le; <i>X</i><sub>f</sub> e <i>Y</i><sub>i</sub> &le; <i>Y</i> &le; <i>Y</i><sub>f</sub> </p>

<h3>Sa&iacute;da</h3>
<p>
A sa&iacute;da deve conter apenas uma linha contendo a &aacute;rea da regi&atilde;o do mar realmente aproveitada pelos pescadores,
ou seja, a &aacute;rea total da regi&atilde;o do mar coberta por pelo menos uma rede de pesca.
</p>

<h3>Restri&ccedil;&otilde;es</h3>
<ul>
  <li>1 &le; <i>N</i> &le; 100</li>
  <li>1 &le; <i>X</i><sub>i</sub> &le; <i>X</i><sub>f</sub> &le; 100</li>
  <li>1 &le; <i>Y</i><sub>i</sub> &le; <i>Y</i><sub>f</sub> &le; 100</li>
</ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
2
1 3 1 3
2 4 2 4
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
7
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
3
1 6 1 2
3 7 1 2
2 5 1 2
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
6
      </pre>
    </td>
  </tr>
</table>

</p>
