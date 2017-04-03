<p align="justify">

<p>Bob &eacute; um aluno do ensino m&eacute;dio que gosta muito de matem&aacute;tica. Na &uacute;ltima aula ele aprendeu o que s&atilde;o
<i>Progress&otilde;es Aritm&eacute;ticas</i> (<i>PAs</i>) e ficou fascinado por elas. Pelo que Bob entendeu, Progress&otilde;es Aritm&eacute;ticas s&atilde;o
sequ&ecirc;ncias de n&uacute;meros nas quais a diferen&ccedil;a entre dois elementos consecutivos &eacute; sempre igual a uma constante <i>r</i>,
chamada de raz&atilde;o da PA.</p>
<p>Um exemplo de Progress&atilde;o Aritm&eacute;tica de raz&atilde;o 2 &eacute; -1, 1, 3, 5. Al&eacute;m disso, toda sequ&ecirc;ncia com um ou dois
elementos &eacute; sempre uma Progress&atilde;o Aritm&eacute;tica. Por outro lado, 5, 6, 8, 9, 10 n&atilde;o &eacute; uma PA porque a diferen&ccedil;a
entre elementos consecutivos n&atilde;o &eacute; constante: a diferen&ccedil;a entre os dois primeiros elementos &eacute; 6 - 5 = 1, enquanto
a diferen&ccedil;a entre o terceiro e o segundo elementos &eacute; 8 - 6 = 2.</p>
<p>Bob percebeu que qualquer sequ&ecirc;ncia, mesmo que a mesma n&atilde;o seja uma Progress&atilde;o Aritm&eacute;tica, pode ser
quebrada em sequ&ecirc;ncias menores que s&atilde;o PAs. Por exemplo, vimos que a sequ&ecirc;ncia 5, 6, 8, 9, 10 n&atilde;o &eacute; uma PA,
mas podemos quebrar ela entre o 6 e o 8 para obtermos as sequ&ecirc;ncias 5, 6 e 8, 9, 10, que s&atilde;o PAs. Note que n&atilde;o
existe como quebrar a sequ&ecirc;ncia em menos partes se quisermos ter apenas PAs no fim do procedimento.</p>
<p>Bob &eacute; fascinado por programa&ccedil;&atilde;o mas ainda n&atilde;o sabe programar muito bem, e por isso pediu sua ajuda: ele
n&atilde;o est&aacute; conseguindo descobrir como quebrar sequ&ecirc;ncias muito grandes de um jeito eficiente; por isso, pediu
que voc&ecirc; escrevesse um programa para, dada uma sequ&ecirc;ncia qualquer, imprimir o n&uacute;mero m&iacute;nimo de partes em
que precisamos quebrar a sequ&ecirc;ncia para termos apenas Progress&otilde;es Aritm&eacute;ticas no t&eacute;rmino do processo. Caso
a sequ&ecirc;ncia original j&aacute; seja uma PA, podemos terminar o processo com uma &uacute;nica parte, e portanto a resposta
para esse caso &eacute; 1.</p>


<h3>Entrada</h3>

<p>A primeira linha da entrada &eacute; composta por um inteiro <i>N</i> , o n&uacute;mero de elementos da sequ&ecirc;ncia. Na segunda
linha existem <i>N</i> inteiros <i>a<sub>i</sub></i>, os elementos da sequ&ecirc;ncia.</p>

<h3>Sa&iacute;da</h3>
<p>
A sa&iacute;da deve conter uma &uacute;nica linha, indicando o n&uacute;mero m&iacute;nimo de partes em que Bob precisa quebrar a
sequ&ecirc;ncia original para que ele termine apenas com PAs.
</p>

<h3>Restri&ccedil;&otilde;es</h3>
<ul>
  <li>1 &le; <i>N</i> &le; 10<sup>5</sup></li>
  <li>-10<sup>5</sup> &le; <i>a<sub>i</sub></i> &le; 10<sup>5</sup></li>
</ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
5
1 2 3 4 5
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
1
      </pre>
    </td>
  </tr>
  
</table>


<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
7
-2 0 2 3 3 4 6
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

<p>&Eacute; f&aacute;cil verificar que a sequ&ecirc;ncia -2, 0, 2, 3, 3, 4, 6 (do exemplo acima) n&atilde;o &eacute; uma PA, pois 2 - 0  &ne; 3 - 2.
Verificando manualmente, voc&ecirc; pode constatar que n&atilde;o &eacute; poss&?vel particionar a sequ&ecirc;ncia em duas de
tal forma que ambas as partes sejam PAs. Entretanto, existe uma maneira de particionar a sequ&ecirc;ncia
em 3 PAs: </p>
<table border="1"><tr><td width="60" align="center">-2, 0, 2</td> <td width="60" align="center">3, 3</td> <td width="60" align="center">4, 6</td></tr></table>  
<p>Portanto, temos que a resposta para este exemplo &eacute; 3.</p>




<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
4
-2 0 3 6
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
2
      </pre>
    </td>
  </tr>
</table>
<p>A sequ&ecirc;ncia -2, 0, 3, 6 (do exemplo acima) pode ser particionada de v&aacute;rias formas. As &uacute;nicas 
maneiras que resultam em PAs s&atilde;o as seguintes:</p>
<ul>
<li>Com 4 partes temos 1 possibilidade:</li>
  <table border="1">
    <tr><td width="40" align="center">-2</td><td width="40" align="center">0</td><td width="40" align="center">3</td><td width="40" align="center">6</td></tr>
  </table>
<li>Com 3 partes temos 3 possibilidades:</li>
  <table border="1">
    <tr><td width="40" align="center">-2,0</td><td width="40" align="center">3</td><td width="40" align="center">6</td></tr>
    <tr><td width="40" align="center">-2</td><td width="40" align="center">0,3</td><td width="40" align="center">6</td></tr>
    <tr><td width="40" align="center">-2</td><td width="40" align="center">0</td><td width="40" align="center">3,6</td></tr>
  </table>
<li>Com 2 partes temos 2 possibilidades:</li>
  <table border="1">
    <tr><td width="40" align="center">-2,0</td><td width="40" align="center">3,6</td></tr>
    <tr><td width="40" align="center">-2</td><td width="40" align="center">0,3,6</td></tr>
  </table>
</ul>
<br>



</p>
