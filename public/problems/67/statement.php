<p align="justify">

<p>
Jimmy é um garoto muito esperto que adora música. No último mês ele ganhou um campeonato de um jogo
cujo objetivo é tocar guitarra. Empolgado, Jimmy decidiu montar uma banda. Para Jimmy a banda perfeita
tem quatro integrantes, ele e mais três: um baterista, um baixista e um cantor.</p>
<p>
Agora Jimmy precisa encontrar os outros integrantes da banda. Para isto ele reuniu todos os álbums que
encontrou na internet e, após escutá-los diversas vezes, compilou o que ele chama de lista de entrosamento entre
músicos. Nessa lista ele atribui, para cada par de músicos que já tocaram juntos, uma nota inteira de 1 a 100,
que é uma medida de quão bem os músicos tocam juntos (o nível de entrosamento entre eles). Se dois músicos
nunca tocaram juntos o nível de entrosamento é zero. Jimmy nunca tocou com nenhum músico da lista.</p>
<p>
Jimmy pretende formar a sua banda a partir da lista de entrosamento entre músicos, da seguinte maneira:
ele quer escolher os outros três músicos de tal forma que a soma dos níveis de entrosamento dos integrantes
da banda seja a maior possível (ou seja, a soma dos níveis de entrosamento dos três pares possíveis de serem
formados entre os três novos integrantes seja a maior possível).
Mas a lista de entrosamento entre músicos ficou muito grande e Jimmy não está conseguindo escolher os
integrantes. Por isso, Jimmy está pedindo sua ajuda.</p>
<p>
Você deve ajudar Jimmy a montar a melhor banda possível fazendo um programa que receba uma lista contendo
o nível de entrosamento para cada par de músicos que já tocaram junto, e determine os músicos que formariam
a melhor banda.</p>
<h3>Entrada</h3>
<p>
A primeira linha da entrada é formada por dois inteiros N e M, informando respectivamente o número de
músicos  e o número de pares de músicos que já tocaram juntos. Os músicos são
identificados por números inteiros de 1 a N. Cada uma das M linhas seguintes contém três inteiros X, Y e Z,
em que X e Y representa um par de músicos e Z representa o seu nível de
entrosamento. Cada par de músicos que já tocou junto aparece uma única vez na entrada.</p>
<h3>Saída</h3>
<p>
Seu programa deve imprimir na <i>saída padrão</i>  uma única linha, contendo três números inteiros separados por
espaço em branco, identificando os três outros músicos que devem compor a banda (em qualquer ordem). Se
existir mais de uma melhor banda, Jimmy contenta-se com qualquer uma.</p>

<h3>Restrições</h3>
<ul>
<li>3 &leq; N &leq; 100</li>
<li>0 &leq; M &leq; 10<sup>4</sup></li>
<li>1 &leq; X &leq; N</li>
<li>1 &leq; Y &leq; N</li> 
<li> X &ne; Y</li>
<li>1 &leq; Z &leq; 100</li>
</ul>

<h3>Informações sobre a pontuação</h3>
<ul>
<li> Em um conjunto de casos de teste que totaliza 30 pontos, N &leq; 10 e M &leq; 100.</li>
<li> Em um conjunto de casos de teste que totaliza 80 pontos, N &leq; 50 e M &leq; 2450.</li>
</ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
<tr><td valign="top" width="50%">
<b>Entrada</b>
<pre>
3 3
1 2 50
2 3 27
3 1 1
</pre>
</td>
<td valign="top" width="50%">
<b>Saída</b>
<pre>
1 2 3
</pre>
</td></tr></table>

<p></p>
<table width="100%" cellspace="2" border="1">
<tr><td valign="top" width="50%">
<b>Entrada</b>
<pre>
58
1 2 50
1 3 50
1 4 50
2 3 50
2 5 10
3 4 50
3 5 25
4 5 20
</pre>
</td>
<td valign="top" width="50%">
<b>Saída</b>
<pre>
1 3 4
</pre>
</td></tr></table>
<p></p>

<p></p>
<table width="100%" cellspace="2" border="1">
<tr><td valign="top" width="50%">
<b>Entrada</b>
<pre>

</pre>
</td>
<td valign="top" width="50%">
<b>Saída</b>
<pre>

</pre>
</td></tr></table>

</p>
