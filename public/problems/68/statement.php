<p align="justify">

<p>
Carlos e Paula acabaram de ganhar um saco com bolinhas de chocolate. Como sabem que vão comer tudo
muito rápido inventaram uma brincadeira:</p>
<p></p>

<ul>
<li> Eles vão comer de forma alternada, um depois o outro, sendo que sempre a Paula começa.</li>
<li> Quem comer a última bolinha ganha a brincadeira.</li>
<li> A cada vez, só se pode comer de 1 a M bolinhas, sendo o M decidido pela mãe de Paula, de forma que não engasguem com o chocolate.</li>
</ul>
<p>
Um exemplo de partida para M = 5, onde Paula ganhou:</p>


<table align="center" border="1">
<tr><th>Quem joga</th><th>Quantas comeu</th><th>Número de bolinhas restantes</th></tr>
<tr align="center"><td></td><td>-</td><td>17</td></tr>
<tr align="center"><td>Paula</td><td>5</td><td>12</td></tr>
<tr align="center"><td>Carlos</td><td>4</td><td>8</td></tr>
<tr align="center"><td>Paula</td><td>2</td><td>6</td></tr>
<tr align="center"><td>Carlos</td><td>5</td><td>1</td></tr>
<tr align="center"><td>Paula</td><td>1</td><td>0</td></tr>
</table>

<p>
Ambos são muito espertos e jogam de maneira ótima, de forma que se existe para um deles uma 
sequência de jogadas que garante a vitória independente da jogada do outro, essa pessoa jogará dessa forma.
Sua tarefa é determinar quem vai ganhar a brincadeira, se ambos jogam de forma ótima.</p>
<h3>Entrada</h3>
A entrada consiste de uma linha contendo dois inteiros N e M, 
sendo N o número de bolinhas de chocolate e M o número de bolinhas permitidas por vez.



<h3>Saída</h3>
<p>
Seu programa deve imprimir na <i>saída padrão</i> 
uma linha, contendo o nome do vencedor, como exemplificado abaixo.
</p>

<h3>Restrições</h3>
<ul>
<li>1 &le; N &le; 106</li>
<li>1 &le; M &le; 103</li>
</ul>

<h3>
Informações sobre a pontuação
</h3>

<ul>
<li> Em um conjunto de casos de teste que totaliza 30 pontos, N &le; 50 e M &le; 5.</li>
<li> Em um conjunto de casos de teste que totaliza 60 pontos, N &le; 104 e M &le; 100.</li>
</ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
<tr><td valign="top" width="50%">
<b>Entrada</b>
<pre>
5 3
</pre>
</td>
<td valign="top" width="50%">
<b>Saída</b>
<pre>
Paula
</pre>
</td></tr></table>

<p></p>
<table width="100%" cellspace="2" border="1">
<tr><td valign="top" width="50%">
<b>Entrada</b>
<pre>
30 5
</pre>
</td>
<td valign="top" width="50%">
<b>Saída</b>
<pre>
Carlos
</pre>
</td></tr></table>

</p>
