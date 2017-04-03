<p align="justify">

<p>
Bob trabalha no OBM (Órgão Brasileiro de Metereologia), que é a organização responsável pela medição dos
índices pluviométricos (quantidade de chuva acumulada) em todo o país. Eles são muito eficientes no que fazem,
mas estão com um problema: eles não sabem como proceder para calcular a quantidade acumulada de chuva
que caiu em cada região em dois períodos consecutivos, muito embora eles saibam os dados de cada período
separadamente.</p>
<p>
Como a chefia do Órgão estava muito ocupada, acabou ficando a cargo de Bob, o estagiário, a tarefa de
implementar um programa que some, para cada região, a quantidade de chuva acumulada em dois períodos
consecutivos.</p>
<p>
O mapa que o OBM usa é dividido em N x N regiões, sendo que para cada região, a cada período, é determinado
um número inteiro indicando a quantidade de chuva acumulada. A quantidade de chuva acumulada total em
cada região em dois períodos consecutivos é a soma das quantidades de chuva em cada um dos períodos.
Mas como Bob é só um estagiário e não está acostumado a fazer nada mais do que tirar cópias de documentos,
ele pediu sua ajuda para implementar o programa que calcula a quantidade de chuva acumulada total nos dois
períodos para cada uma das regiões, dadas as quantidades de chuva acumulada em cada período para cada
região.</p>


<h3>Entrada</h3>
<p>
A primeira linha da entrada contém um inteiro N indicando a dimensão dos dois mapas que devem ser lidos.
Nas próximas 2xN linhas são dados os dois mapas, cada mapa indicando a quantidade de chuva acumulada nas
regiões em um período. Cada mapa é descrito em N linhas consecutivas, cada linha contendo N inteiros, sendo
que cada inteiro indica a quantidade de chuva acumulada, no período, em uma região.</p>

<h3>Saída</h3>
<p>
A saída deverá conter N linhas, com N inteiros em cada linha, indicando a quantidade de chuva acumulada
total em cada uma das regiões nos dois períodos considerados.
</p>

<h3>Restrições</h3>
<ul>
<li> 1 &le; N &le; 100</li>
<li> 0 &le; quantidade de chuva acumulada em cada região de cada mapa &le; 100</li>
</ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
<tr><td valign="top" width="50%">
<b>Entrada</b>
<pre>
2
1 2
3 4
10 11
12 13
</pre>
</td>
<td valign="top" width="50%">
<b>Saída</b>
<pre>
11 13
15 17
</pre>
</td></tr></table>

<p></p>
<table width="100%" cellspace="2" border="1">
<tr><td valign="top" width="50%">
<b>Entrada</b>
<pre>
3
1 1 1
1 2 2
1 2 3
3 2 1
2 2 1
1 1 1
</pre>
</td>
<td valign="top" width="50%">
<b>Saída</b>
<pre>
4 3 2
3 4 3
2 3 4
</pre>
</td></tr></table>


</p>
