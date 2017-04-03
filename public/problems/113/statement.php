<p align="justify">

<p>Mini-Poker &eacute; o nome de um jogo de cartas que &eacute; uma simplifica&ccedil;&atilde;o de Poker, um dos mais famosos jogos de cartas do mundo. Mini-Poker &eacute; jogado com um baralho normal de 52 cartas, com quatro naipes (copas, paus, espadas e ouro), cada naipe compreendendo treze cartas (&Aacute;s, 2, 3, 4, 5, 6, 7, 8, 9, 10, Valete, Dama, Rei).</p>

<p>No in&iacute;cio do jogo, cada jogador recebe cinco cartas. O conjunto de cinco cartas vale um certo n&uacute;mero de pontos, de acordo com as regras descritas abaixo. Diferentemente do jogo de Poker normal, em Mini-Poker o naipe das cartas &eacute; desconsiderado. Assim, para simplificar a descri&ccedil;&atilde;o do jogo, vamos utilizar os n&uacute;meros de 1 a 13 para identificar as cartas do baralho, na ordem dada acima. Uma outra diferen&ccedil;a &eacute; que pode ocorrer empate entre mais de um vencedor; nesse caso os vencedores dividem o pr&ecirc;mio.</p>

<p>As regras para pontua&ccedil;&atilde;o em Mini-Poker s&atilde;o as seguintes:</p>

<p>1. Se as cinco cartas est&atilde;o em seq&uuml;&ecirc;ncia a partir da carta x (ou seja, os valores das cartas s&atilde;o x, x+1, x+2, x+3 e x+4), a pontua&ccedil;&atilde;o &eacute; x+200 pontos. Por exemplo, se as cartas recebidas s&atilde;o 10, 9, 8, 11 e 12, a pontua&ccedil;&atilde;o &eacute; 208 pontos.</p>

<p>2. Se h&aacute; quatro cartas iguais x (uma quadra, ou seja, os valores das cartas s&atilde;o x, x, x, x e y), a pontua&ccedil;&atilde;o &eacute; x+180 pontos. Por exemplo, se as cartas recebidas s&atilde;o 1, 1, 1, 10 e 1, a pontua&ccedil;&atilde;o &eacute; 181 pontos.</p>

<p>3. Se h&aacute; tr&ecirc;s cartas iguais x e duas outras cartas iguais y (uma trinca e um par, ou seja, os valores das cartas s&atilde;o x, x, x, y e y), a pontua&ccedil;&atilde;o &eacute; x + 160 pontos. Por exemplo, se as cartas recebidas s&atilde;o 10, 4, 4, 10 e 4, a pontua&ccedil;&atilde;o &eacute; 164 pontos.</p>

<p>4. Se h&aacute; tr&ecirc;s cartas iguais x e duas outras cartas diferentes y e z (uma trinca, ou seja, os valores das cartas s&atilde;o x, x, x, y e z), a pontua&ccedil;&atilde;o &eacute; x + 140 pontos. Por exemplo, se as cartas recebidas s&atilde;o 2, 3, 2, 2 e 13, a pontua&ccedil;&atilde;o &eacute; 142 pontos.</p>

<p>5. Se h&aacute; duas cartas iguais x, duas outras cartas iguais y (x != y) e uma outra carta distinta z (dois pares, ou seja, os valores das cartas s&atilde;o x, x, y, y e z), a pontua&ccedil;&atilde;o &eacute; <code>3 &times; x + 2 &times; y + 20</code> pontos, em que x &gt; y. Por exemplo, se as cartas recebidas s&atilde;o 12, 7, 12, 8 e 7, a pontua&ccedil;&atilde;o &eacute; 70 pontos.</p>

<p>6. Se h&aacute; apenas duas cartas iguais x e as outras s&atilde;o todas distintas (um par, ou seja, os valores das cartas s&atilde;o x, x, y, z e t), a pontua&ccedil;&atilde;o &eacute; x pontos. Por exemplo, se as cartas recebidas s&atilde;o 12, 13, 5, 8 e 13, a pontua&ccedil;&atilde;o &eacute; 13 pontos.</p>

<p>7. Se todas as cartas s&atilde;o distintas, n&atilde;o h&aacute; pontua&ccedil;&atilde;o.</p>

<h3>Tafefa</h3>

<p>Escreva um programa que, fornecidas as cartas dadas a um jogador, calcule pontua&ccedil;&atilde;o do jogador naquela jogada.</p>

<h3>Entrada</h3>

<p>A entrada &eacute; composta por v&aacute;rios casos de teste, cada um correspondendo a uma jogada. A primeira linha da entrada cont&eacute;m um inteiro N que indica o n&uacute;mero de casos de teste (1 &lt;= N &lt;= 100). Cada uma das N linhas seguintes cont&eacute;m cinco n&uacute;meros inteiros C1,C2,C3,C4 e C5, representando as cinco cartas recebidas por um jogador (1 &lt;= C1,C2,C3,C4,C5 &lt;= 13).</p>

<h3>Sa&iacute;da</h3>

<p>Para cada caso de teste da entrada, seu programa deve produzir tr&ecirc;s linhas na sa&iacute;da. A primeira linha deve conter um identificador do caso de teste, no formato &ldquo;Teste n&rdquo;, onde n &eacute; numerado seq&uuml;encialmente a partir de 1. A segunda linha deve conter a pontua&ccedil;&atilde;o do jogador considerando as cinco cartas recebidas. A terceira linha deve ser deixada em branco. A grafia mostrada no Exemplo de Sa&iacute;da, abaixo, deve ser seguida rigorosamente.</p>

<h3>Exemplo</h3>

<pre><strong>Entrada:</strong>

2

12 3 10 3 12

1 2 3 5 4



<strong>Sa&iacute;da:</strong>

Teste 1

62



Teste 2

201

</pre>

<h3>Restri&ccedil;&otilde;es</h3>

<pre><code>1 &lt;= N &lt;= 100

1 &lt;= C1,C2,C3,C4,C5 &lt;= 13

</code></pre>


</p>
