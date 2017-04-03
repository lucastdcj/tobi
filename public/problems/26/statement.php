<p align="justify">

<p>
A Betalândia é um país que apenas recentemente se abriu para o comércio exterior e está preparando agora
sua primeira grande exportação. A Sociedade Betalandesa de Comércio (SBC) cou encarregada de conduzir
a exportação e determinou que, seguindo os padrões internacionais, a carga será transportada em contêineres,
que são, por sua vez, colocados em grandes navios para o transporte internacional.</p>
<p>
Todos os contêineres betalandeses são idênticos, medindo A metros de largura, B metros de comprimento e C
metros de altura. Um navio porta-contêineres pode ser visto como um retângulo horizontal de X metros de
largura e Y metros de comprimento, sobre o qual os contêineres são colocados. Nenhuma parte de contêiner
pode car para fora do navio. Além disso, para possibilitar a travessia de pontes, a altura máxima da carga no
navio não pode ultrapassar Z metros.</p>
<p>
<center>
<img src="task_images/2011f1pj_transporte.png">
</center></p>

<p>
Devido a limitações do guindaste utilizado, os contêineres só podem ser carregados alinhados com o navio.
Ou seja, os contêineres só podem ser colocados sobre o navio de tal forma que a largura e o comprimento do
contêiner estejam paralelos à largura e ao comprimento do navio, respectivamente.</p>
<p>
A SBC está com problemas para saber qual a quantidade máxima de contêineres que podem ser colocados no
navio e pede sua ajuda. Sua tarefa, neste problema, é determinar quantos contêineres podem ser carregados no
navio respeitando as restrições acima.</p>

<h3>Entrada</h3>
<p>
A entrada consiste de duas linhas. A primeira linha contém três inteiros A, B e C que representam as dimensões
dos contêineres, enquanto a segunda linha contém outros três inteiros X, Y e Z que representam as dimensões
do navio.</p>
<h3>Saída</h3>
<p>
Seu programa deve imprimir apenas uma linha contendo um inteiro que indica a quantidade máxima de contêineres que o navio consegue transportar.</p>

<h3>Restrições</h3>
<ul>
<li> 1 &le; A, B, C, X, Y, Z &le; 10<sup>6</sup></li>
<li> É garantido que a maior resposta será menor ou igual a 10<sup>6</sup></li>
</ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
<tr><td valign="top" width="50%">
<b>Entrada</b>
<pre>
1 1 1
1 1 1
</pre>
</td>
<td valign="top" width="50%">
<b>Saída</b>
<pre>
1
</pre>
</td></tr></table>

<p></p>
<table width="100%" cellspace="2" border="1">
<tr><td valign="top" width="50%">
<b>Entrada</b>
<pre>
1 2 5
9 6 11
</pre>
</td>
<td valign="top" width="50%">
<b>Saída</b>
<pre>
54
</pre>
</td></tr></table>

<p></p>
<table width="100%" cellspace="2" border="1">
<tr><td valign="top" width="50%">
<b>Entrada</b>
<pre>
1 2 12
6 9 10
</pre>
</td>
<td valign="top" width="50%">
<b>Saída</b>
<pre>
0
</pre>
</td></tr></table>

</p>
