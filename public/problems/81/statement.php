<p align="justify">

<p>
Juninho é um menino muito visionário e inteligente, que quer ficar rico.
Aos 12 anos de idade, já está interessado em investimentos de ações na bolsa
de valores. Uma ação é como se fosse um pedaço de uma empresa que qualquer 
pessoa pode comprar. E como cada empresa tem tamanhos e valores diferentes, 
cada ação também tem diferentes valores, e esses valores mudam o tempo todo.
Suponha, por exemplo, que Juninho compre uma ação de uma empresa de petróleo,
que custe R$ 100. Suponha que no dia seguinte, essa empresa descubra um enorme
poço de petróleo, o que vai dar muitos lucros para ela no futuro. Essa empresa,
então, passa a ser mais valorizada, e conseqüentemente o preço das ações sobem. Suponha
que as ações subiram 20% nesse dia. Então Juninho, que tinha uma ação de R$ 100, hoje
tem a mesma ação, mas que vale R$ 120. Ou seja, se ele a vender hoje, vai ter
um lucro de R$ 20, só por ter comprado e vendido a ação.

Uma empresa de refrigerantes criou um novo tipo de investimento especial para iniciantes. Ela ocorre 
da seguinte maneira:</p>

<ul>
<li>O investidor compra as ações da empresa na manhã do dia X;</li>

<li> O dinheiro fica investido durante exatamente quatro dias seguidos;</li>

<li>Ao final dos quatro dias, são aplicados <b>juros simples</b> ao
  preço das ações; todas elas são vendidas e o dinheiro é dado de
  volta ao investidor.</li>
</ul>
Por exemplo, suponha que as variações do preço das ações sejam:

<ul>
<li>Dia 1: Aumento de 3%</li>
<li>Dia 2: Aumento de 1%</li>
<li>Dia 3: Queda de 2%</li>
<li> Dia 4: Queda de 3%</li>
<li>Dia 5: Aumento de 5%</li>
<li>Dia 6: Queda de 5%</li>
</ul>
Se aplicarmos R$ 100 no dia 1, ao final do dia 4 vamos ter uma
variação de 3+1-2-3 = -1, ou seja, prejuízo de R$ 1. Mas se
começarmos aplicando no dia 2, ao final teremos uma variação de
1-2-3+5 = 1%, ou seja, lucro de R$ 1.

Juninho, que além de inteligente é também vidente (ou seja, consegue prever o
futuro), pediu a sua ajuda para descobrir qual é a maior quantidade de
dinheiro que ele pode lucrar investindo exatamente R$ 100,00 durante
quatro dias. Para isso, ele vai te dizer a variação das ações nos
próximos N dias seguidos, onde N &geq; 4.

<h3>Entrada</h3>
<p>
A entrada é composta por duas linhas. Na primeira, é dado um número
inteiro N,
indicando a quantidade de dias que Juninho já sabe qual será a
variação do valor da ação.  Na segunda linha são dados N números inteiros X<sub>i</sub>,
separados por espaços em branco, sendo
X<sub>i</sub> a variação do preço das ações no dia i.</p>

<h3>Saída</h3>
<p>
Seu programa deve imprimir na <i>saída padrão</i> uma única linha,
contendo um número inteiro indicando qual é o maior lucro que Juninho pode conseguir ao investir nos
dias que ele previu (o dinheiro não pode ficar investido em nenhum dia que ele não previu).
Note que o `lucro' pode na verdade ser prejuízo (lucro negativo), se as ações se
desvalorizarem.
</p>

<h3>Restrições</h3>
<ul>
<li>4 &le; N &le; 10<sup>5</sup></li>
<li>-1000 &leq; X<sub>i</sub> &leq; 1000</li>
</ul>

<h3>Informações sobre a pontuação</h3>

<ul>
<li> Em um conjunto de casos de teste que totaliza 30 pontos, N &le; 10 e $0 &leq; X_i &le; 100.</li>

<li>Em um conjunto de casos de teste que totaliza 55 pontos, N &le; 100 e -100 &leq; X_i &le; 100.</li>
</ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
<tr><td valign="top" width="50%">
<b>Entrada</b>
<pre>
5
3 1 -2 -3 5 
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
6
-2 1 -2 1 0 -3
</pre>
</td>
<td valign="top" width="50%">
<b>Saída</b>
<pre>
0
</pre>
</td></tr></table>
<p></p>

<p></p>
<table width="100%" cellspace="2" border="1">
<tr><td valign="top" width="50%">
<b>Entrada</b>
<pre>
8
-1 -2 -3 -4 -5 -6 -7 -8
</pre>
</td>
<td valign="top" width="50%">
<b>Saída</b>
<pre>
-10
</pre>
</td></tr></table>

</p>
