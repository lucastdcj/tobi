<p align="justify">


<p>
O Comitê Olímpico Internacional (COI) está visitando as cidades candidatas a sediar as Olimpíadas de 2016. 
O Rio de Janeiro é uma das cidades concorrentes, mas a competição é muito acirrada.</p> 

<p>
O COI tem um conjunto de exigências que devem ser obedecidas pelas cidades candidatas, como boas arenas 
para os jogos (ginásios, campos de futebol, pistas de atletismo, parque aquático,...), bons alojamentos, um plano 
para o tráfego de veículos durante os jogos, etc. Durante sua visita ao Rio de Janeiro, o COI colocou ainda mais 
uma exigência: a demonstração da qualidade dos sistemas de informática. Especificamente,o COI quer que a 
organização local demonstre a sua capacidade em informática produzindo um programa que gere a classificação 
final dos países, considerando o número total de medalhas recebidas pelos atletas de cada país.</p> 

<p> 

Sua tarefa é escrever um programa que, dada a informação dos países que receberam medalhas de ouro, prata 
e bronze em cada modalidade, gere a lista de classificação dos países na competição. Nesta tarefa, os países 
serão identificados por números inteiros. O melhor colocado deve ser o país que conseguiu o maior número de 
medalhas, independentemente do tipo da medalha (ouro, prata ou bronze). Se houver empate entre dois países 
no número total de medalhas, o melhor classificado é o país que tem o menor número de identificação.</p> 





<h3>Entrada</h3>
<p> 

A primeira linha da entrada contém dois números inteiros N e M, separados por um espaço em branco, indicando 
respectivamente o número de países e número de modalidades esportivas envolvidas na 
competição. Os países são identificados por números inteiros de 1 a N. 

Cada uma das M linhas seguintes contém três números inteiros O, P e B, separados por um espaço em 
branco, representando os países cujos atletas receberam respectivamente medalhas de ouro, prata 
e bronze. Assim, se uma das M linhas contém os números 321, significa que nessa 
modalidade a medalha de outro foi ganha pelo país 3, a de prata pelo país 2 e a de bronze pelo país 1.</p> 

<h3>Saída</h3>
<p>
Seu programa deve imprimir na <i>saída padrão</i>
uma linha contendo N números, separados por um espaço em 
branco, representando os países na ordem decrescente de classificação (o primeiro número representa o país que 
é o primeiro colocado,o segundo número representa o país que é o segundo colocado, e assim por diante). 
 
</p>

<h3>Restrições</h3>
<ul>
<li>1 &leq; N &leq; 100</li>
<li>1 &leq; M &leq; 100</li>
<li>1 &leq; O &leq; N</li>
<li>1 &leq; P &leq; N</li>
<li>1 &leq; B &leq; N</li>
</ul>

<h3>Informações sobre a pontuação</h3>
<ul>
<li> 
Em um conjunto de casos de teste que totaliza 30 pontos, N &leq; 
10 e M &leq; 
10.</li> 

<li> 
Em um conjunto de casos de teste que totaliza 70 pontos, N &leq; 
50 e M &leq; 
50.</li> 
</ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
<tr><td valign="top" width="50%">
<b>Entrada</b>
<pre>
2 2 
2 1 2 
1 2 2
</pre>
</td>
<td valign="top" width="50%">
<b>Saída</b>
<pre>
2 1 
</pre>
</td></tr></table>

<p></p>
<table width="100%" cellspace="2" border="1">
<tr><td valign="top" width="50%">
<b>Entrada</b>
<pre>
4 3 
3 2 1 
4 3 1 
4 3 1
</pre>
</td>
<td valign="top" width="50%">
<b>Saída</b>
<pre>
1 3 4 2
</pre>
</td></tr></table>
<p></p>

<p></p>
<table width="100%" cellspace="2" border="1">
<tr><td valign="top" width="50%">
<b>Entrada</b>
<pre>
3 3 
3 1 2 
2 3 1 
1 2 3 
</pre>
</td>
<td valign="top" width="50%">
<b>Saída</b>
<pre>
1 2 3
</pre>
</td></tr></table>

</p>
