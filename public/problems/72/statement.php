<p align="justify">

<p>

Os computadores foram inventados para realizar cálculos muito
rapidamente, e atendem a esse requisito de maneira
extraordinária. Porém, nem toda conta pode ser feita num computador,
pois ele não consegue representar todos os números dentro de sua
memória. Em um computador pessoal atual, por exemplo, o maior inteiro
que é possível representar em sua memória é 4.294.967.295. Caso alguma
conta executada pelo computador dê um resultado acima desse número,
ocorrerá o que chamamos de <i>overflow</i>, que é quando o
computador faz uma conta e o resultado não pode ser representado, por
ser maior do que o valor máximo permitido (em inglês
 <i>overflow</i> significa trasbordar).

Por exemplo, se um computador só pode representar números menores do que 1023 e mandamos
ele executar a conta 1022 + 5, vai ocorrer <i>overflow</i> .</p>

<h3>Tarefa</h3>

Dados o maior número que um computador consegue representar e uma
expressão de soma ou multiplicação entre dois inteiros, determine se
ocorrerá <i>overflow</i> .

<h3>Entrada </h3>

A primeira linha da entrada contém um inteiro  N  representando o maior número que o computador consegue
representar. A segunda linha contém um inteiro  P, seguido de um espaço em branco, seguido de um caractere C (que
pode ser `+' ou `*', representando os operadores de adição e
multiplicação, respectivamente), seguido de um espaço em branco,
seguido de um outro inteiro  Q. Essa linha
representa a expressão  P + Q , se o caractere C for `+', ou  P x
Q, se o caractere C for `*'.

<h3>Saída</h3>

Se programa deve imprimir uma única linha, contendo a palavra `OVERFLOW ' se o resultado da expressão causar um 
<i>overflow</i>, ou a palavra `OK ' caso contrário. 
Ambas as palavras devem ser escritas com letras maiúsculas.

<h3>Restrições</h3>
<ul>
<li>1 &leq; N \leq 500.000</li> 
<li>0 &leq; P \leq
1000</li>
<li>0 &leq; Q &leq; 1000</li> 
</ul>

<h3>Informações sobre a pontuação</h3>

<ul>
<li>Em um conjunto de casos de teste que totaliza 30 pontos,
 N &leq; 10 ,  P &leq; 10  e  Q &leq; 10 .</li>

<li>Em um conjunto de casos de teste que totaliza 80 pontos, 
 N &leq; 100 ,
 P &leq; 100  e
 Q &leq; 100 .</li>

</ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
<tr><td valign="top" width="50%">
<b>Entrada</b>
<pre>
10
5 + 5
</pre>
</td>
<td valign="top" width="50%">
<b>Saída</b>
<pre>
OK
</pre>
</td></tr></table>

<p></p>
<table width="100%" cellspace="2" border="1">
<tr><td valign="top" width="50%">
<b>Entrada</b>
<pre>
44
23 * 2
</pre>
</td>
<td valign="top" width="50%">
<b>Saída</b>
<pre>
OVERFLOW
</pre>
</td></tr></table>
<p></p>

<p></p>
<table width="100%" cellspace="2" border="1">
<tr><td valign="top" width="50%">
<b>Entrada</b>
<pre>
323500
42 * 35
</pre>
</td>
<td valign="top" width="50%">
<b>Saída</b>
<pre>
OK
</pre>
</td></tr></table>

</p>
