<p align="justify">

<p>Detecção de colisão é uma das operações mais comuns (e importantes) em jogos eletrônicos. O objetivo,
basicamente, é verificar se dois objetos quaisquer colidiram, ou seja, se a interseção entre eles é diferente de
vazio. Isso pode ser usado para saber se duas naves colidiram, se um monstro bateu numa parede, se um
personagem pegou um item, etc.</p>
<p>Para facilitar as coisas, muitas vezes os objetos são aproximados por figuras geométricas simples (esferas,
paralelepípedos, triângulos etc). Neste problema, os objetos são aproximados por retângulos num plano 2D.</p>

<h3>Tarefa</h3>
<p>Escreva um programa que, dados dois retângulos, determine se eles se interceptam ou não.</p>
<h3>Entrada</h3>
<p>A entrada contém um único conjunto de testes, que deve ser lido do <i>dispositivo de entrada padrão</i> (normalmente
o teclado). Cada caso de teste contém duas linhas. Cada linha contém quatro inteiros (<i>x</i><sub>0</sub>, <i>y</i><sub>0</sub>, <i>x</i><sub>1</sub>, <i>y</i><sub>1</sub>, sendo
0 &le; <i>x</i><sub>0</sub> < <i>x</i><sub>1</sub> &le; 1.000.000 e 0 &le; <i>y</i><sub>0</sub> < <i>y</i><sub>1</sub> &le; 1.000.000) separados por um espaço em branco representando um
retângulo. Os lados do retângulo são sempre paralelos aos eixos <i>x</i> e <i>y</i>.</p>

<h3>Sa&iacute;da</h3>
<p>Seu programa deve imprimir, na <i>saída padrão</i>, uma única linha para cada caso de teste, contendo o número 0
(zero) caso não haja interseção ou o número 1 (um) caso haja.</p>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
0 0 1 1
0 0 1 1     
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
1     
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
0 0 2 2
1 1 3 3
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
1
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
0 0 1 1
2 2 3 3
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
0
      </pre>
    </td>
  </tr>
</table>

</p>
