<p align="justify">

<p>
Arthur é um menino pobre, e por isso tudo o que ele tem é de qualidade inferior. Porém, Arthur
é uma pessoa muito inteligente e dedicada, e portanto está na escola, para poder ter uma boa
educação e conseguir mudar essa situação.
Atualmente, Arthur está estudando divisão, na matéria de matemática. Na hora fazer exercícios, 
os alunos fazem uso de uma calculadora para verificar se o que fizeram está correto. Como sabemos,
Arthur não tem muito dinheiro, logo a calculadora que ele tem não é muito boa. 
Tal calculadora reconhece apenas números com N bits, ou seja, ela não é capaz de fazer contas
com números maiores ou iguais a 2<sup>N</sup>.

Arthur, por ser inteligente, consegue, na maioria das vezes, contornar esse problema de uma maneira
muito perspicaz. Por exemplo, suponha que arthur precise fazer o calculo da divisão 200/90 (duzentos 
dividido por noventa), mas que sua calculadora seja de apenas 5 bits (isto é, não consegue trabalhar 
com números maiores ou iguais que 2<sup>5</sup> = 32. Ele sabe que se dividir o dividendo e o divisor por 10, 
o resultado continuará o mesmo. Então, ele faz o cálculo de 20/9, e consegue o resultado desejado 
(você pode assumir que, mesmo que o resultado não seja um número inteiro, ele será mostrado mesmo
assim).

Arthur, porém, começou a estudar outras matérias mais avançadas, como multiplicação e geometria, 
e já não tem tanto tempo livre para descobrir maneiras de fazer divisões em sua calculadora. Ele 
pede a sua ajuda para fazer um programa que, dados o número de bits da calculadora, o dividendo e 
o divisor, diga a ele a melhor maneira de se calcular a divisão em tal calculadora. A melhor maneira
é aquela em que o dividendo e o divisor são os menores possíveis, e ainda assim o resultado é exatamente
o mesmo que o da divisão dada na entrada.</p>

<h3>Entrada</h3>
<p>
A entrada contém um único teste, a ser lido da <i>entrada padrão</i>.
O teste contém uma linha com três inteiros N, D, Q
indicando, respectivamente, o número de bits da calculadora, o dividendo e o divisor 
da conta que Arthur precisa fazer.</p>

<h3>Saída</h3>
<p>
Seu programa deve imprimir uma única linha na <i>saída padrão</i>,
contendo dois inteiros R e P,
onde R é o dividendo e P é o divisor, mostrando a melhor maneira possível de se efetuar a divisão na calculadora de Arthur.
Se for impossível realizar essa divisão na calculadora dada, mostre a palavra IMPOSSIVEL (com letras maiúsculas, sem acento).
</p>

<h3>Restrições</h3>
<ul>
<li>1 &le; N &le; 1000
<ii>1 &leq; N &leq; 30
</ii></li><li> 1 &leq; D &le; 268435456</li>
<li>2 &leq; Q &le; 268435456</li> 
</ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
<tr><td valign="top" width="50%">
<b>Entrada</b>
<pre>
30 200 90
</pre>
</td>
<td valign="top" width="50%">
<b>Saída</b>
<pre>
20 9
</pre>
</td></tr></table>

<p></p>
<table width="100%" cellspace="2" border="1">
<tr><td valign="top" width="50%">
<b>Entrada</b>
<pre>
16 62 5
</pre>
</td>
<td valign="top" width="50%">
<b>Saída</b>
<pre>
IMPOSSIVEL
</pre>
</td></tr></table>
<p></p>

<p></p>
<table width="100%" cellspace="2" border="1">
<tr><td valign="top" width="50%">
<b>Entrada</b>
<pre>
100 31 29
</pre>
</td>
<td valign="top" width="50%">
<b>Saída</b>
<pre>
31 29
</pre>
</td></tr></table>

</p>
