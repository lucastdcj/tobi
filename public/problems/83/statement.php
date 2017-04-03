<p align="justify">

<p>
O principal prêmio da Olimpíada Brasileira de Informática é o convite
para os cursos de programação oferecidos no Instituto de Computação da
Unicamp, com todas as despesas pagas pela Fundação Carlos Chagas,
patrocinadora da OBI. São convidados apenas os competidores que
atingem um certo número mínimo de pontos, consideradas as duas fases
de provas.

Você foi contratado pela Coordenação da OBI para fazer um programa
que, dados os números de pontos obtidos por cada competidor em cada
uma das fases, e o número mínimo de pontos para ser convidado,
determine quantos competidores serão convidados para o curso na
Unicamp. Você deve considerar que</p>


<ul><li>todos os competidores participaram das duas fases;</li>
<li>o total de pontos de um competidor é a soma dos pontos obtidos nas duas fases.</li>
</ul>

Por exemplo, se a pontuação mínima para ser convidado é 435 pontos, um
competidor que tenha obtido 200 pontos na primeira fase e 235 pontos
na segunda fase será convidado para o curso na Unicamp. Já um
competidor que tenha obtido 200 pontos na primeira fase e 234 pontos
na segunda fase não será convidado.

<h3>Entrada</h3>
<p>

A entrada contém um único conjunto de testes, que deve ser lido do
<i>dispositivo de entrada padrão</i>. A
primeira linha da entrada contém dois números inteiros N e P,
representando respectivamente o número de competidores  e o número mínimo de pontos para ser convidado. 
Cada uma das N linhas seguintes contém dois números inteiros
X e Y indicando a pontuação de um competidor em cada uma das fases.</p>

<h3>Saída</h3>
<p>
Seu programa deve imprimir na <i>saída padrão</i> uma única linha
contendo um único inteiro, indicando o número de competidores que
serão convidados a participar do curso na Unicamp. </p>

<h3>Restrições</h3>
<ul>
<li>1 &le; N &le; 1000</li>
<li> 1 &le; P &le; 1000</li>
<li>0 &le; X &le; 400</li>
<li>0 &le; Y &le; 400</li>
</ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
<tr><td valign="top" width="50%">
<b>Entrada</b>
<pre>
3 100
50 50
100 0
49 50
</pre>
</td>
<td valign="top" width="50%">
<b>Saída</b>
<pre>
2
</pre>
</td></tr></table>

<p></p>
<table width="100%" cellspace="2" border="1">
<tr><td valign="top" width="50%">
<b>Entrada</b>
<pre>
4 235
100 134
0 0
200 200
150 150
</pre>
</td>
<td valign="top" width="50%">
<b>Saída</b>
<pre>
2
</pre>
</td></tr></table>

</p>
