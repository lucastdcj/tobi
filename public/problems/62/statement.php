<p align="justify">

<p>O conglomerado indiano Tutu é um conjunto de empresas que atua nos mais diversos ramos da indústria,
produzindo desde sapatos até aviões e foguetes. Por ser tão diversificada, precisa de grandes e rápidos sistemas
para cálculos de contabilidade.</p>

<p>Um dos módulos mais importantes desse sistema é o de fornecimento de produtos, onde fica a base de dados de
produtos e fornecedores. Um mesmo produto pode ser fornecido por vários fornecedores diferentes.</p>

<p>O sistema possui duas grandes matrizes: a matriz <b>A</b>, onde cada linha representa um produto e cada coluna
representa um fornecedor. O valor da matriz na linha <i>m</i> e coluna <i>n</i> representa o preço do produto <i>m</i> se for
comprado do fornecedor <i>n</i>.</p>

<p>A outra grande matriz é a <b>B</b>, onde cada linha representa um dia do mês e cada coluna é um produto. O valor
da matriz na linha <i>m</i> e coluna <i>n</i> representa a quantidade do produto <i>n</i> a ser adquirido no dia <i>m</i>.</p>

<p>Tal empresa tem uma política de fidelidade com seus fornecedores, e uma das práticas efetuadas pela empresa
é, em um determinado dia, comprar todos os produtos necessários de um único fornecedor. Isto é, em um dia
todos os produtos adquiridos serao comprados do fornecedor <i>x</i>, no outro dia do fornecedor <i>y</i>, e assim por diante.</p>

<p>Para auxiliar a escolha de qual fornecedor será o escolhido no dia, foi gerada outra matriz <b>C</b>, que é o resultado
da multiplicação das matrizes <b>A</b> × <b>B</b>. Essa matriz diz o quanto será gasto pela empresa se adquirir todos os
produtos de um determinado fornecedor em um determinado dia.</p>

<p>As matrizes <b>A</b> e <b>B</b> são quadradas (o número de linhas é igual ao número de colunas) e têm valores definidos
pelas fórmulas</p>

<center> 
<p><b>A</b><sub><i>ij</i></sub> = (<i>P</i> × <i>i</i> + <i>Q</i> × <i>j</i>) (mod <i>X</i>)</p>
<p><b>B</b><sub><i>ij</i></sub> = (<i>R</i> × <i>i</i> + <i>S</i> × <i>j</i>) (mod <i>Y</i> )</p>
</center>

<p>onde i é o índice da linha da matriz e j é o índice da coluna da matriz (todos os índices vão de 1 até <i>N</i>). Os
inteiros <i>P</i>, <i>Q</i>, <i>R</i>, <i>S</i>, <i>X</i> e<i> <i>Y</i></i> são parâmetros constantes, que definem as duas matrizes <b>A</b> e <b>B</b>.</p>

<h3>Tarefa</h3>
<p>Escreva um programa que, dados os parâmetros das matrizes <b>A</b> e <b>B</b>, e a posição de uma das entradas as matriz
<b>C</b>, calcula o valor daquela entrada.</p>

<h3>Entrada</h3>

<p>A primeira linha da entrada contém um inteiro <i>N</i>, indicando as dimensões das matrizes <b>A</b>, <b>B</b> e <b>C</b> (2 &le; <i>N</i> &le;
10<sup>5</sup>). A linha seguinte contém seis inteiros <i>P</i>, <i>Q</i>, <i>R</i>, <i>S</i>, <i>X</i> e <i>Y</i> , indicando os parâmetros das matrizes <b>A</b> e <b>B</b>
(2 &le; <i>X</i>, <i>Y</i> &le; 10<sup>4</sup>; 0 &le; <i>P</i>,<i>Q</i> < <i>X</i>; 0 &le; <i>R</i>, <i>S</i> < <i>Y</i> ). Finalmente, a última linha da entrada contém dois inteiros <i>I</i>
e <i>J</i>, indicando a linha e a coluna da matriz <b>C</b> a serem consultados (1 &le; <i>I</i>, <i>J</i> &le; <i>N</i>).</p>

<h3>Saída</h3>
<p>Seu programa deve imprimir uma única linha contendo o valor da matriz <b>C</b> na linha e coluna especificadas.</p>


<h3>Informações sobre a pontuação</h3>
<ul>
  <li>Em um conjunto de casos de teste que totaliza 40 pontos, <i>N</i> &le; 100.</li>  
</ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
3
4 3 2 3 5 6
2 2
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Saída</b>
      <pre>
18
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
4
3 5 1 0 6 7
4 3
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Saída</b>
      <pre>
30
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
2
2 2 0 1 3 2
2 1
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Saída</b>
      <pre>
2
      </pre>
    </td>
  </tr>
</table>

</p>
