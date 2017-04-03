<p align="justify">

<p>Houve uma determinada época no planeta Terra em que a população estava grande demais, e determinadas
medidas foram tomadas para sanar esse problema. Uma vez que as primeiras colônias já haviam se estabelecido
no planeta Marte, todos os países concordaram em mandar para lá algumas pessoas. O presidente de Pizzalândia,
Lagosta da Silva, era uma pessoa que valorizava a família, e decidiu que não ia separar famílias em nome dessa
atitude. Resolveu, então, mandar uma família inteira para Marte. No caso, a dele mesmo, a família Silva,
provavelmente a mais numerosa do planeta.</p>
<p>Tal família estabeleceu-se em Marte sem problemas, ainda mais com novas invenções que havia por lá. Uma delas
era a pílula de nanicolina, substância descoberta naquele planeta, próximo à uma região onde existem pedras
voadoras, pedras macias e até pedras falantes. Lendas dizem que algum outro ser extra-terrestre depositou a
nanicolina ali num passado distante, enquanto visitava o planeta. O efeito da pílula de nanicolina é a diminuição
de tamanho de quem a toma, por um determinado tempo. Tal pílula foi, então, produzida em escala industrial
e hoje em dia é distribuída pelos governos marcianos aos colonos que lá residem.</p>
<p>A família Silva, todos os anos, encontra-se em alguma das muitas colônias em Marte para celebrar o aniversário
da chegada deles ao planeta. O chefe da família é quem sempre paga o transporte de todos. O transporte é feito
através de ônibus-flutuadores fretados. Como todos podem tomar pílulas da nanicolina e ficarem minúsculos,
podemos dizer que dentro de cada ônibus-flutuador cabem infinitas pessoas, e que o efeito da pílula vai durar
durante toda a viagem.</p>
<p>Assim, o preço de uma viagem de ônibus-flutuador entre duas colônias não depende do número de pessoas que
viajam, sendo um preço fixo. Isso permite que algumas economias sejam feitas. Suponha que existam quatro
colônias dos Silvas em Marte, ilustrados abaixo:</p>
<center> 
  <img src="task_images/2008f2p2_frete.png" width="300px" height="170px">
</center>
<p>Os círculos representam as colônias, e as conexões entre elas representam as estradas existentes.</p>
<p>O número nas conexões representa o preço de uma viagem de ônibus-flutuador em qualquer direção. Ou seja,
uma viagem da colônia <i>A</i> direto para a colônia <i>C</i> (ou de <i>C</i> para <i>A</i>), custa 5 moedas de silício, não importa o
número de passageiros.</p>
<p>Suponha que o grande encontro seja na colônia <i>A</i>. Se o chefe da família pagar o frete de <i>B</i> para <i>A</i>, de <i>C</i> para
<i>A</i> e de <i>D</i> para <i>A</i>, vai acabar gastando 25 moedas.</p>
<p>Mas uma coisa que poderia ser feita, também, é: os Silvas das colônias <i>B</i> e <i>D</i> vão para a <i>C</i>. Da <i>C</i>, todos vão
para a colônia <i>A</i>. Isso tudo teria um gasto de somente 10 moedas.</p>
<p>Este ano o número de colônias dos Silvas aumentou muito em Marte, e o chefe da família está muito preocupado
com o dinheiro que vai gastar para pagar todas as viagens. Então ele contratou você, que é o melhor programador
daquele planeta, a fazer um programa que recebe as informações a respeito das colônias, das estradas e dos fretes
de ônibus-flutuadores, e determine qual é a menor quantidade de dinheiro necessária para custear o transporte
de todos os Silvas para o encontro. O desespero do chefe da família é tanto que ele não se importa em qual
colônia será o encontro, desde que os custos sejam minimizados.</p>
<p>Você pode assumir que:</p>
<ul>
  <li>Entre duas colônias diferentes existe no máximo uma estrada direta.</li>
  <li>Sempre existe um caminho (de uma ou mais estradas) entre quaisquer duas colônias.</li>  
</ul>

<h3>Entrada</h3>
<p>A entrada contém um único teste, a ser lido da <i>entrada padrão</i>. A primeira linha contém dois inteiros: <i>N</i> e
<i>M</i> (2 &le; <i>N</i> &le; 1000, 1 &le; <i>M</i> &le; 10.000), que representam, respectivamente, o número de colônias e o número de
estradas existentes. Depois, seguem <i>M</i> linhas com 3 inteiros: <i>P</i>, <i>Q</i> e <i>U</i> (0 &le; <i>P</i>, <i>Q</i> &le; <i>N</i> - 1, 1 &le; <i>U</i> &le; 1000),
indicando que existe uma estrada de mão dupla entre as colônias <i>P</i> e <i>Q</i>, cujo custo do frete de viagem entre
essas duas colônias é <i>U</i> moedas.</p>

<h3>Sa&iacute;da</h3>
<p>Seu programa deve imprimir, na <i>saída padrão</i>, um único inteiro, representando o número mínimo de moedas
necessárias para custear o transporte de todos os Silvas à colônia onde será realizada o encontro.</p>

<h3>Informa&ccedil;&otilde;es sobre a pontua&ccedil;&atilde;o</h3>
<ul>
  <li>Em um conjunto de casos de teste que totaliza 30 pontos, <i>N</i> &le; 10 e <i>M</i> &le; 100.</li>
  <li>Em um conjunto de casos de teste que totaliza 55 pontos, <i>N</i> &le; 100 e <i>M</i> &le; 1000.</li> 
</ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
4 6
0 1 10
0 2 5
0 3 10
1 2 3
1 3 4
2 3 2
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
10
      </pre>
    </td>
  </tr>
</table>

<p></p>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
4 6
0 1 1
0 2 1
0 3 1
1 2 3
1 3 4
2 3 2
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
3
      </pre>
    </td>
  </tr>
</table>

</p>
