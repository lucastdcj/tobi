<p align="justify">

<p>A informatização dos sistemas bancários permitiu grandes economias de tempo e dinheiro, permitindo que vários
tipos de transações financeiras pudessem ser realizadas pela Internet. Para possibilitar isso, cada banco recebeu
um código bancário, que é um número utilizado pelos sistemas de computador para identificar cada banco.</p>
<p>Quando um banco decide comprar outro, ocorre o que se chama uma fusão: os dois bancos tornam-se um
só banco. Para manter compatibilidade com os sistemas eletrônicos dos bancos, qualquer um dos códigos dos
antigos bancos pode ser usado para se referir ao novo banco.</p>
<p>Com a crise econômica internacional, as fusões entre bancos têm sido cada vez mais comuns; por isso, muitas
vezes é difícil decidir se dois códigos bancários na realidade se referem ao mesmo banco (devido aos dois bancos
terem se fundido, diretamente ou não).</p>

<h3>Tarefa</h3>
<p>Escreva um programa que, dada uma série de fusões entre bancos, responde a várias consultas perguntando se
dois códigos bancários se referem ao mesmo banco.</p>

<h3>Entrada</h3>
<p>A primeira linha da entrada contém dois inteiros <i>N</i> e <i>K</i>, indicando o número de bancos e o número de operações
efetuadas (1 &le; <i>N</i> &le; 100.000, 1 &le; <i>K</i> &le; 100.000). Os códigos de cada um dos <i>N</i> bancos, inicialmente, são os
inteiros de 1 até <i>N</i> .</p>
<p>Cada uma das <i>K</i> linhas seguintes descreve ou uma fusão entre bancos ou uma consulta.</p>
<ul>
  <li>Uma fusão é descrita na entrada como uma linha que começa com o caractere 'F', um espaço, e dois códigos
bancários, que se referem aos dois bancos que estão sofrendo a fusão, separados por um espaço em branco;</li>
</ul>
<ul>  
  <li>Uma consulta é descrita na entrada como uma linha que começa com o caractere 'C', um espaço, e os dois
códigos a serem consultados, separados por um espaço em branco. Os códigos bancários consultados são
sempre distintos.</li>
</ul>
<p>As fusões são sempre realizadas entre bancos diferentes, e todos os códigos bancários fornecidos na entrada são
válidos.</p>

<h3>Sa&iacute;da</h3>
<p>Seu programa deve imprimir uma linha para cada consulta na entrada. Caso os dois códigos bancários consultados se
 refiram ao mesmo banco, imprima uma linha contendo o caractere 'S'; caso contrário, imprima uma
linha contendo apenas o caractere 'N'.</p>

<h3>Informa&ccedil;&otilde;es sobre a pontua&ccedil;&atilde;o</h3>
<ul>
  <li>Em um conjunto de casos de teste que totaliza 40 pontos, <i>N</i> &le; 100 e <i>K</i> &le; 100.</li>  
</ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
3 5
C 1 2
F 1 2
C 1 2
F 1 3
C 1 3     
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
N
S
S
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
4 5
F 1 2
F 2 3
C 1 3
F 2 4
C 1 4
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
S
S
      </pre>
    </td>
  </tr>
</table>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
4 4
F 1 2
F 3 4
F 1 3
C 2 4
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
S
      </pre>
    </td>
  </tr>
</table>

</p>
