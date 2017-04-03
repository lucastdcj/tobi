<p align="justify">

<p>Gugo, o duende, ficou preso em uma caverna e precisa sair o mais rapidamente poss&iacute;vel. A caverna &eacute; formada por sal&otilde;es interligados por t&uacute;neis, na forma de uma grade retangular, com N linhas e M colunas. Alguns dos sal&otilde;es da caverna t&ecirc;m paredes de cristal. Duendes, como todos sabem, n&atilde;o gostam de ficar em ambientes com qualquer tipo de cristal, pois seus organismos entram em resson&acirc;ncia com a estrutura de cristais, e em casos extremos os duendes podem at&eacute; mesmo explodir. Compreensivelmente, Gugo n&atilde;o quer entrar em nenhum sal&atilde;o com parede de cristal.</p>

<p>A figura abaixo mostra uma caverna com quatro linhas e cinco colunas de sal&otilde;es; os sal&otilde;es cinza t&ecirc;m paredes de cristal. A posi&ccedil;&atilde;o inicial de Gugo &eacute; indicada com um caractere &lsquo;*&rsquo;.</p>

<p><img src="http://www.spoj.pl/content/wanderley:duende1.png" alt="" /></p>

<h3>Tarefa</h3>

<p>Voc&ecirc; deve escrever um programa que, dadas a configura&ccedil;&atilde;o da caverna e a posi&ccedil;&atilde;o inicial de Gugo dentro da caverna, calcule qual o n&uacute;mero m&iacute;nimo                                 de sal&otilde;es pelos quais o duende deve passar antes de                                                   sair da caverna (n&atilde;o contando o sal&atilde;o em que o duende est&aacute; inicialmente), mas contando o sal&atilde;o que tem sa&iacute;da para o exterior).</p>

<h3>Entrada</h3>

<p>A caverna ser&aacute; modelada como uma matriz de duas dimens&otilde;es, cujos elementos representam os sal&otilde;es. Um sal&atilde;o que n&atilde;o tem parede de cristal e que tem sa&iacute;da para o exterior da caverna &eacute; representado pelo valor 0; um sal&atilde;o que n&atilde;o tem parede de cristal e n&atilde;o tem sa&iacute;da para o exterior &eacute; representado pelo valor 1; um sal&atilde;o que tem parede de cristal &eacute; representado pelo valor 2; e o sal&atilde;o em que o duende est&aacute; inicialmente (que n&atilde;o tem sa&iacute;da para o exterior e nem paredes de cristal) &eacute; representado pelo valor 3. A figura abaixo mostra a representa&ccedil;&atilde;o da caverna apresentada acima.</p>

<p><img src="http://www.spoj.pl/content/wanderley:duende2.png" alt="" /></p>

<p>A primeira linha da entrada cont&eacute;m dois n&uacute;meros inteiros N e M que indicam respectivamente o n&uacute;mero de linhas (1 &lt;= N &lt;= 10) e o n&uacute;mero de colunas (1 &lt;= M &lt;= 10) da representa&ccedil;&atilde;o da caverna. Cada uma das N linhas seguintes cont&eacute;m M n&uacute;meros inteiros Ci, descrevendo os sal&otilde;es da caverna e a posi&ccedil;&atilde;o inicial do duende (0 &lt;= Ci &lt;= 3). Voc&ecirc; pode supor que sempre h&aacute; um trajeto que leva Gugo &agrave; sa&iacute;da da caverna.</p>

<h3>Sa&iacute;da</h3>

<p>Seu programa deve produzir uma unica linha na sa&iacute;da, contendo um n&uacute;mero inteiro representando a quantidade m&iacute;nima de sal&otilde;es pelos quais Gugo deve passar antes de conseguir sair da caverna (n&atilde;o contando o sal&atilde;o em que ele est&aacute; inicialmente, mas contando o sal&atilde;o que tem sa&iacute;da para o exterior).</p>

<table style="width: 100%;" border="0" align="center">

<tbody>

<tr>

<td>

<h3>Exemplo 1</h3>

<pre><strong>Entrada:</strong>

4 5

0 1 1 1 1

0 2 2 2 1

2 1 1 1 1

1 1 1 3 1



<strong>Sa&iacute;da:</strong>

8

</pre>

</td>

<td>

<h3>Exemplo 2</h3>

<pre><strong>Entrada:</strong>

1 10

2 0 1 1 3 1 1 1 0 1



<strong>Sa&iacute;da:</strong>

3

</pre>

</td>

</tr>

</tbody>

</table>

<p><strong>

<p>Restri&ccedil;&otilde;es</p>

</strong></p>

<p>1 &lt;= N &lt;= 10<br /> 1 &lt;= M &lt;= 10<br /> 0 &lt;= Ci &lt;= 3</p>


</p>
