<p align="justify">

<p>
Para descontrair os alunos após as provas da OBI, a Diretora da escola
organizou um campeonato de aviões de papel. Cada aluno participante
receberá uma certa quantidade de folhas de um papel especial para
fazer os seus modelos de aviões. A quantidade de folhas que cada aluno
deverá receber ainda não foi determinada: ela será decidida pelos
juízes do campeonato.</p>
<p>
A diretora convidou, para atuarem como juízes, engenheiros
da Embraer, uma das mais bem sucedidas empresas brasileiras,
que vende aviões com tecnologia brasileira no mundo todo. 
O campeonato está programado para começar logo após a prova da OBI,
mas os juízes ainda não chegaram à escola. A diretora está aflita,
pois comprou uma boa quantidade de folhas de papel especial, mas
não sabe se a quantidade comprada vai ser suficiente.</p>
<p>
Considere, por exemplo, que a Diretora comprou 100 folhas de papel
especial, e que há 33 competidores. Se os juízes decidirem que cada
competidor tem direito a três folhas de papel, a quantidade comprada
pela diretora é suficiente. Mas se os juízes decidirem que cada
competidor tem direito a quatro folhas, a quantidade comprada pela
diretora não seria suficiente.</p>
<p>
Você deve escrever um programa que, dados o número de competidores,
o número de folhas de papel especial compradas pela Diretora e o
número de folhas que cada competidor deve receber, determine
se o número de folhas comprado pela Diretora é suficiente.</p>

<h3>Entrada</h3>
<p>A entrada é composta de uma linha contendo três números inteiros  C,
 P e
 F 
representando respectivamente o número de competidores,
a quantidade de folhas de papel especial compradas pela Diretora e
a quantidade de folhas de papel especial que cada competidor deve receber.</p>

<h3>Saída</h3>
<p>
Seu programa deve imprimir na <i>saída padrão</i> uma única linha 
contendo  o caractere `S ' se a quantidade de folhas compradas
pela Diretora é suficiente, ou o caractere `N ' caso contrário.
Note que os caracteres devem ser letras maiúsculas.
</p>

<h3>Restrições</h3>
<ul>
<li> 1 &leq; C &leq; 1000</li>
<li>  1 &leq; P &leq; 1000</li> 
<li> 1 &leq; F &leq; 1000</li> 
</ul>

<h3>Informações sobre a pontuação </h3>

<ul>

<li>Em um conjunto de casos de teste que totaliza 30 pontos, 
 C &leq; 10,  
 P &leq; 10  e
 F &leq; 10.</li> 

<li>Em um conjunto de casos de teste que totaliza 80 pontos,
 C &leq; 100,  
 P &leq; 100  e
 F &leq; 100.</li> 

</ul>
<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
<tr><td valign="top" width="50%">
<b>Entrada</b>
<pre>
10 100 10
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
10 90 10
</pre>
</td>
<td valign="top" width="50%">
<b>Saída</b>
<pre>
N
</pre>
</td></tr></table>
<p></p>

<p></p>
<table width="100%" cellspace="2" border="1">
<tr><td valign="top" width="50%">
<b>Entrada</b>
<pre>
5 40 2
</pre>
</td>
<td valign="top" width="50%">
<b>Saída</b>
<pre>
S
</pre>
</td></tr></table>

</p>
