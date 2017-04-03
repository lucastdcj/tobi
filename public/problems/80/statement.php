<p align="justify">

<p>
Certas regiões resolveram o problema de tráfego intenso com a
construção de auto estradas, que são estradas contendo em geral quatro ou mais
pistas de rolagem em cada sentido, de forma que um número grande
de carros possa passar sem que ocorram congestionamentos. O problema 
das auto estradas é que, junto com os carros temos um aumento considerável 
de ruído nas imediações da pista, o que incomoda os moradores das 
regiões próximas.</p>

<p>
A GoTo engenharia, uma empresa do ramo de construção especializada em
obras de estradas, encontrou uma solução
engenhosa para o problema: instalar grandes painéis defletores de som de
cada lado da auto estrada para tentar minimizar o ruído percebido
pelos vizinhos.</p>

<p>
Os painéis são construídos em blocos contínuos de 10 metros lineares.
A auto estrada também é dividida em blocos de 10 metros de extensão, sendo cada bloco 
descrito por um código, como definido abaixo:</p>

<ul>        
<li><b>P</b> - Pista, trecho em linha reta sem curvas ou saídas. 
Deve-se instalar um painel de cada lado da auto estrada.</li> 

<li><b>C</b> - Curva, trecho em curva de 90 graus na auto estrada. Deve-se
instalar dois painéis de concreto do lado externo da curva; o outro lado fica
sem painel instalado.</li> 

<li><b>A</b> - Acesso, trecho em linha reta no qual existe uma entrada ou uma saída a partir de um dos
lados da auto estrada (mas não do outro). Deve-se instalar um painel
 no lado onde <b>não</b> existe o acesso.</li>

<li><b>D</b> - Duplo acesso, trecho em linha reta no qual existem dois acessos (entradas ou saidas, em
qualquer combinação possível), um de cada lado da rodovia. Nenhum painel
deve ser instalado nesse bloco da auto estrada.</li>
</ul>

Apesar de ser uma empresa formada por engenheiros, nenhum dos funcionários
da GoTo sabe programar, de forma que eles decidiram contrataram você como consultor
independente. Você deve escrever um programa para,  dado um mapa da auto estrada, determinar quantos
painéis defletores são necessários para cobrir toda a extensão
dessa auto estrada.

<h3>Entrada</h3>
<p>

A entrada contém um único conjunto de testes, que deve ser lido do
<i>dispositivo de entrada padrão</i>. A primeira linha
contém um inteiro C,
indicando o comprimento da auto estrada, em blocos de 10  metros. A linha seguinte contém C
caracteres, cada letra descrevendo um bloco de 10 metros da auto estrada, como definido 
acima.</p>

<h3>Saída</h3>
<p>
Seu programa deve imprimir na <i>saída padrão</i> uma única linha contendo
um número inteiro, representando quantas unidades de painel são necessárias
para cobrir toda a extensão da auto estrada.
</p>


<h3>Restrições</h3>
<ul>
<li>1 &le; C &le; 10<sup>6</sup></li>
</ul>

<h3>Informações sobre a pontuação</h3>

<ul>
<li>Para um subconjunto dos casos de teste totalizando 30 pontos, 1 &leq; C &leq; 100.</li>
<li>Para um subconjunto dos casos de teste totalizando 55 pontos, 1 &leq; C &leq; 10<sup>3</sup>.</li>
</ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
<tr><td valign="top" width="50%">
<b>Entrada</b>
<pre>
5
DAPCD
</pre>
</td>
<td valign="top" width="50%">
<b>Saída</b>
<pre>
5
</pre>
</td></tr></table>

<p></p>
<table width="100%" cellspace="2" border="1">
<tr><td valign="top" width="50%">
<b>Entrada</b>
<pre>
8
AACCAAPP
</pre>
</td>
<td valign="top" width="50%">
<b>Saída</b>
<pre>
12
</pre>
</td></tr></table>
<p></p>

<p></p>
<table width="100%" cellspace="2" border="1">
<tr><td valign="top" width="50%">
<b>Entrada</b>
<pre>
14
ADCCPPPPPAADCP
</pre>
</td>
<td valign="top" width="50%">
<b>Saída</b>
<pre>
21
</pre>
</td></tr></table>

</p>
