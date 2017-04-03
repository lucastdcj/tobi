<p align="justify">

A maratona é talvez a prova mais desgastante entre as modalidades
olímpicas: são quarenta e dois mil, cento e noventa e cinco metros de
percurso. Por isso, os organizadores sempre posicionam vários postos
de água ao longo do trajeto da prova, onde copos de água são
distribuídos aos competidores.
<p>
João Saci é um jovem atleta que tem boas chances de se tornar um
maratonista de primeira linha. No entanto, João Saci descobriu que
somente consegue terminar uma maratona se ingerir alguns copos de água
durante o percurso. O Laboratório de Biomecânica da universidade
local, através de experimentos, determinou que João Saci consegue
percorrer exatamente mais dois mil metros após o instante em que
ingere um copo de água. A distância que João Saci consegue percorrer
após ingerir um copo de água é denominada de distância intermediária
máxima. Assim, se a distância entre dois postos de água consecutivos
no percurso da maratona for sempre menor ou igual do que a distância
intermediária máxima de João Saci, ele consegue terminar a prova. Caso
contrário ele não consegue terminar a prova.</p>
<p>
O Laboratório de Biomecânica quer agora realizar estudos similares com
outros maratonistas, que têm valor de distâncias intermediárias
máximas distintas, e precisa de sua ajuda.</p>
<p>
Sua tarefa é escrever um programa que, dada a posição dos postos de
água ao longo do percurso, e a distância intermediária máxima de um
atleta, determine se o atleta consegue ou não completar a prova.</p>

<h3>Entrada</h3>
<p>
A primeira linha da entrada contém dois números inteiros N e M,
separados por um espaço em branco, indicando respectivamente o número de postos de água e a distância
intermediária máxima de um atleta, em metros. A
segunda linha contém N números inteiros P<sub>i</sub>, separados por um espaço em branco, 
representando a posição dos postos de água ao longo
do trajeto da maratona. A posição de um posto de água é dada pela
distância, em metros, do início do percurso até o posto de água. O primeiro posto de água
está sempre localizado no ponto de partida (ou seja, P<sub>1</sub> = 0) e todos
os postos estão em posições distintas. Além disso, os postos de água
são dados na ordem crescente de sua distância ao início do percurso.

Note que a distância total da prova é a oficial para a maratona, ou
seja, 42195 metros.</p>

<h3>Saída</h3>
<p>
Seu programa deve imprimir na <i>saída padrão</i> 
uma única linha 
contendo o caractere 'S' se o atleta consegue terminar a prova, ou o
caractere 'N' caso contrário.
</p>

<h3>Restrições</h3>
<ul>
<li>2 &le; N &le; 10000</li>
<li>1 &le; M &le; 42195</li>
<li>0 &le; P<sub>i</sub> &le; 42195 para 1 &le; i &le; N</li>
</ul>

<h3>Informações sobre a pontuação</h3>
<ul>
<li> Em um conjunto de casos de teste que totaliza 30 pontos, N &le; 100.</li>
<li> Em um conjunto de casos de teste que totaliza 70 pontos, N &le; 2000.</li>
</ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
<tr><td valign="top" width="50%">
<b>Entrada</b>
<pre>
3 20000
0 20000 33333
</pre>
</td>
<td valign="top" width="50%">
<b>Saída</b>
<pre>
S
</pre>
</td></tr></table>

<p></p>
<table width="100%" cellspace="2" border="1">
<tr><td valign="top" width="50%">
<b>Entrada</b>
<pre>
8 6000
0 6000 12000 18000 24000 32000 37000 40000
</pre>
</td>
<td valign="top" width="50%">
<b>Saída</b>
<pre>
N
</pre>
</td></tr></table>

</p>
