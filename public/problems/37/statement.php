<p align="justify">

<p>Pedrinho e Zezinho est&atilde;o precisando estudar resolu&ccedil;&atilde;o de express&otilde;es matem&aacute;ticas para uma prova que ir&atilde;o fazer.
Para isso, eles querem resolver muitos exerc&iacute;cios antes da prova. Como sabem programar, ent&atilde;o decidiram fazer
um gerador de express&otilde;es matem&aacute;ticas.</p>

<p>O gerador de express&otilde;es que eles criaram funciona em duas fases. Na primeira fase &eacute; gerada uma cadeia de
caracteres que cont&eacute;m apenas os caracteres '{', '[', '(', '}', ']' e ')'. Na segunda fase, o gerador adiciona os
n&uacute;meros e operadores na estrutura criada na primeira fase. Uma cadeia de caracteres &eacute; dita <i>bem definida</i> (ou
v&aacute;lida) se atende as seguintes propriedades:</p>

<ol>
  <li>Ela &eacute; uma cadeia de caracteres vazia (n&atilde;o cont&eacute;m nenhum caractere).</li>
  <li>Ela &eacute; formada por uma cadeia <i>bem definida</i> envolvida por par&ecirc;nteses, colchetes ou chaves. Portanto, se a
cadeia S &eacute; <i>bem definida</i>, ent&atilde;o as cadeias (S), [S] e {S} tamb&eacute;m s&atilde;o <i>bem definidas</i>.</li>
  <li>Ela &eacute; formada pela concatena&ccedil;&atilde;o de duas cadeias bem definidas. Logo, se as cadeias X e Y s&atilde;o <i>bem
definidas</i>, a cadeia XY &eacute; <i>bem definida</i>.</li>
</ol>

<p>Depois que Pedrinho e Zezinho geraram algumas express&otilde;es matem&aacute;ticas, eles perceberam que havia algum
erro na primeira fase do gerador. Algumas cadeias n&atilde;o eram <i>bem definidas</i>. Eles querem come&ccedil;ar a resolver as
express&otilde;es o mais r&aacute;pido poss&iacute;vel, e sabendo que voc&ecirc; &eacute; um &oacute;timo programador (e participa da OBI) resolveram
pedir que escreva um programa que dadas v&aacute;rias cadeias geradas na primeira fase, determine quais delas s&atilde;o
<i>bem definidas</i> e quais n&atilde;o s&atilde;o.</p>

<h3>Entrada</h3>

<p>A entrada &eacute; composta por diversas inst&acirc;ncias. A primeira linha da entrada cont&eacute;m um inteiro T indicando o
n&uacute;mero de inst&acirc;ncias. Em seguida temos <i>T</i> linhas, cada uma com uma cadeia <i>A</i>.</p>

<h3>Sa&iacute;da</h3>
<p>Para cada inst&acirc;ncia imprima uma linha contendo a letra S se a cadeia &eacute; <i>bem definida</i>, ou a letra N caso contr&aacute;rio.
</p>

<h3>Restri&ccedil;&otilde;es</h3>
<ul>
  <li>1  &le; T &le; 20.</li>
  <li>a cadeia de caracteres <i>A</i> tem entre 1 e 100000 caracteres.</li>
  <li>a cadeia de caracteres <i>A</i> cont&eacute;m apenas caracteres '{', '[', '(', '}', ']' e ')'.</li>

</ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
12
()
[]
{}
(]
}{
([{}])
{}()[]
()]
{[]
(
(([{}{}()[]])(){}){}
(((((((((({([])}])))))))))
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
S
S
S
N
N
S
S
N
N
N
S
N
      </pre>
    </td>
  </tr>
</table>
<br>

</p>
