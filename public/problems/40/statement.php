<p align="justify">

<p>
Arnaldo e Bernardo são dois garotos que compartilham um peculiar gosto por curiosidades matemáticas. Nos
últimos tempos, sua principal diversão tem sido investigar propriedades matemágicas de tabuleiros quadrados
preenchidos com inteiros. Recentemente, durante uma aula de matemática, os dois desaaram os outros alunos
da classe a criar quadrados mágicos, que são quadrados preenchidos com números de 1 a N<sup>2</sup>, de tal forma que a
soma dos N números em uma linha, coluna ou diagonal principal do quadrado tenham sempre o mesmo valor.
A ordem de um quadrado mágico é o seu número de linhas, e o valor do quadrado mágico é o resultado da soma
de uma linha. Um exemplo de quadrado mágico de ordem 3 e valor 15 é mostrado na figura abaixo:</p>
<table border="1" align="center">
<tr><td width="15" align="center">2</td><td width="15" align="center">7</td><td width="15" align="center">6</td></tr>
<tr><td width="15" align="center">9</td><td width="15" align="center">5</td><td width="15" align="center">1</td></tr>
<tr><td width="15" align="center">4</td><td width="15" align="center">3</td><td width="15" align="center">8</td></tr>
</table>

<h3>Entrada</h3>
<p>
A primeira linha da entrada contém um único número inteiro N, indicando a ordem do quadrado (seu número
de linhas). As N linhas seguintes descrevem o quadrado. Cada uma dessas linhas contém N números inteiros
separados por um espaço em branco.</p>

<h3>Saída</h3>
<p>
Seu programa deve imprimir  uma única linha na <i>saída padrão</i>. Caso o quadrado seja mágico, a linha deve conter o valor do
quadrado (ou seja, a soma de uma de suas linhas). Caso contrário, a linha deve conter o número 0.
</p>

<h3>Restrições</h3>
<ul>
<li>3 &le; N &le; 1000</li>
<li>2 &le; valor de cada célula &le; 10<sup>9</sup></li>
</ul>


<h3>Informações sobre a pontuação</h3>
<ul><li>Em um conjunto de casos de teste que totaliza 30 pontos, N &le; 3.</li>
<li> Em um conjunto de casos de teste que totaliza 70 pontos, N &le; 100.</li>
</ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
<tr><td valign="top" width="50%">
<b>Entrada</b>
<pre>
3
1 1 1
1 1 1
1 1 1
</pre>
</td>
<td valign="top" width="50%">
<b>Saída</b>
<pre>
0
</pre>
</td></tr></table>

<p></p>
<table width="100%" cellspace="2" border="1">
<tr><td valign="top" width="50%">
<b>Entrada</b>
<pre>
4
16 3 2 13
5 10 11 8
9 6 7 12
4 15 14 1
</pre>
</td>
<td valign="top" width="50%">
<b>Saída</b>
<pre>
34
</pre>
</td></tr></table>

<p></p>
<table width="100%" cellspace="2" border="1">
<tr><td valign="top" width="50%">
<b>Entrada</b>
<pre>
3
4 8 9
11 7 3
6 5 10
</pre>
</td>
<td valign="top" width="50%">
<b>Saída</b>
<pre>
0
</pre>
</td></tr></table>

</p>
