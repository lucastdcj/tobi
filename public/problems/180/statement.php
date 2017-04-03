<p align="justify">
<p align="justify">&nbsp;</p>

<p>Recentemente Juquinha ganhou de anivers&aacute;rio um joguinho bem cl&aacute;ssico: Tiro ao Alvo. Ele arrumou um &oacute;timo lugar em seu quarto para se divertir com o jogo, por&eacute;m ap&oacute;s ler todas as regras do jogo ele percebeu que precisa da sua ajuda para calcular a pontua&ccedil;&atilde;o obtida.</p>

<p>Segundo as regras, o alvo do jogo &eacute; composto por <em>C</em> c&iacute;rculos, todos centrados na origem (0,0). Juquinha atira <em>T</em> vezes e ap&oacute;s cada tiro informa suas coordenadas. A pontua&ccedil;&atilde;o de cada tiro &eacute; feita da seguinte forma: para cada c&iacute;rculo em que o tiro estiver contido Juquinha recebe um ponto.</p>

<p>Considere por exemplo a figura abaixo. O tiro marcado com a letra A recebe zero pontos, pois n&atilde;o est&aacute; contido por nenhum c&iacute;rculo. O tiro marcado com a letra B recebe um ponto, pois est&aacute; contido por um c&iacute;rculo (o mais externo). O tiro marcado com a letra C recebe dois pontos, pois est&aacute; contido por dois c&iacute;rculos (note que este caso mostra que tiros exatamente na borda de um c&iacute;rculo s&atilde;o considerados como contidos pelo c&iacute;rculo). J&aacute; o tiro marcado com a letra D recebe tr&ecirc;s pontos, pois est&aacute; contido pelos tr&ecirc;s c&iacute;rculos. Considerando todos os pontos, a pontua&ccedil;&atilde;o total de Juquinha &eacute; de 13 pontos.</p>

<img src="http://www.spoj.com/content/marcoskwkm:tiro13.jpg" alt="" />

<p>Dados os raios de <em>C</em> c&iacute;rculos centrados na origem e as coordenadas dos <em>T</em> tiros realizados por Juquinha, escreva um programa que calcula o total de pontos que Juquinha obteve.</p>

<h3>Entrada</h3>

<p>A primeira linha da entrada cont&eacute;m dois inteiros positivos, <em>C</em> e <em>T</em>, que representam, respectivamente, o n&uacute;mero de c&iacute;rculos do alvo e o n&uacute;mero de tiros.</p>

<p>Cada uma das <em>C</em> linhas seguintes cont&eacute;m um inteiro positivo. O <em>i</em>-&eacute;simo inteiro <em>R<sub>i</sub></em> representa o raio do <em>i</em>-&eacute;simo c&iacute;rculo. Os raios <em>R<sub>i</sub></em> s&atilde;o fornecidos em ordem crescente.</p>

<p>Cada uma das <em>T</em> linhas seguintes cont&eacute;m um par <em>X</em>, <em>Y</em> de inteiros, que representam as coordenadas de cada tiro.</p>

<h3>Sa&iacute;da</h3>

<p>Seu programa deve imprimir uma &uacute;nica linha, contendo apenas um inteiro, o total de pontos obtidos por Juquinha.</p>

<h3>Restri&ccedil;&otilde;es</h3>

<ul>

<li>1 &le; C &le; 10<sup>5</sup> </li>

<li>1 &le; <em>R<sub>i</sub></em> &le; 10<sup>6</sup> para 1 &le; <em>i</em> &le; <em>C</em> </li>

<li><em>R<sub>i</sub></em> &gt; <em>R</em><sub><em>i</em>-1</sub> para 2 &le; <em>i</em> &le; <em>C</em> </li>

<li>1 &le; <em>T</em> &le; 10<sup>5</sup> </li>

<li>-10<sup>5</sup> &le; <em>X</em>, <em>Y</em> &le; 10<sup>5</sup> </li>

</ul>

<h3>Exemplos</h3>

<pre><strong>Entrada</strong>

3 10

1

2

5

0 0

-2 0

0 -2

3 -4

-4 -3

3 1

6 2

-1 2

-5 -2

1 -1



<strong>Sa&iacute;da</strong>

13



<strong>Entrada</strong>

3 6

1

2

5

1 0

0 3

-5 0

0 0

-3 -3

1 1



<strong>Sa&iacute;da</strong>

11

</pre>

