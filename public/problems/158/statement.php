<p align="justify">

<p>Seu amigo sacoleiro pediu sua ajuda num problema que ele está enfrentando. Ele tem um mapa de cidades
que ele já conhece e que são interessantes para ele, além das rotas entre as mesmas. Ele pretende fazer uma
viagem para comprar presentes para seu filho e para sua filha. O problema é que nem todos os presentes têm o
mesmo preço, alguns são obviamente mais caros que os outros, e ele não quer ser injusto dando presentes mais
caros para um ou para outro. O objetivo é fazer com que diferença entre a soma dos valores dos presentes seja
a menor possível (de preferência que sejam iguais, naturalmente). Há, também, um limite de quanto ele pode
gastar na viagem.</p>
<p>O sacoleiro tem um mapa com <i>N</i> cidades e as rotas que as ligam. Além disso, cada cidade pertence ao
grupo <i>A</i> ou ao grupo <i>B</i>. No grupo <i>A</i> estão as cidades em que há presentes para o filho, enquanto que no grupo
B estão as cidades com presentes para a filha. Sempre que ele para numa cidade ele pode comprar ou não o
presente, <b>mesmo que ele já tenha estado lá antes</b>, inclusive pode comprar mais de uma unidade do mesmo
presente (enquanto tiver dinheiro disponível, naturalmente). As cidades são numeradas de 0 a <i>N</i> - 1. O trajeto
deve sempre começa na cidade 0. O tamanho do percurso não importa para o sacoleiro. O total disponível
de dinheiro para os presentes é <i>T</i>. O sacoleiro não pode terminar a viagem sem ter comprado pelo menos um
presente para algum dos filhos.</p>

<h3>Tarefa</h3>
<p>Escreva um programa que, dadas <i>N</i> cidades, as rotas entre elas e os valores de presentes de cada cidade, retorne
qual a diferença mínima possível entre a soma dos presentes do grupo <i>A</i> e a soma dos presentes do grupo <i>B</i>.</p>

<h3>Entrada</h3>
<p>A entrada contém um único conjunto de testes, que deve ser lido do <i>dispositivo de entrada padrão</i> (normalmente
o teclado). A primeira linha da entrada contém um inteiro <i>N</i> (2 &le; <i>N</i> &le; 30) que indica a quantidade de cidades.
A segunda linha contém um inteiro <i>T</i> (10 &le; <i>T</i> &le; 100) que indica a quantidade de dinheiro que o sacoleiro tem
para gastar. As <i>N</i> linhas seguintes contêm a descrição cada cidade. Cada uma dessas linhas tem o formato
<i>XPCKV<sub>0</sub>V<sub>1</sub>...V<sub>K-1</sub></i>, onde <i>X</i> é um inteiro que representa a cidade (numeradas de 0 a <i>N</i> - 1); <i>P</i> 
é um inteiro (1 &le; <i>P</i> &le; 10) que indica o valor do presente da cidade <i>X</i>; <i>C</i> é um caractere A ou B, indicando a que grupo a
cidade <i>X</i> pertence; <i>K</i> é um inteiro (0 &le; <i>K</i> < <i>N</i> ) que indica quantas rotas saem da cidade <i>X</i>; e cada V<sub><i>i<i></i></i></sub>
é um inteiro indicando um dos possíveis destinos a partir da cidade <i>X</i>. Note que as rotas não são bidirecionais. Uma
cidade nunca terá rota para ela mesma e pode-se assumir que <i>i<i> &ne; <i>j<i> => V<sub><i>i<i></i></i></sub> &ne; V<sub><i>j<i></i></i></sub>.</i></i></i></i></p>

<h3>Sa&iacute;da</h3>
<p>Seu programa deve imprimir, na <i>saída padrão</i>, uma única linha com um inteiro representando a menor diferença
possível de valores entre os presentes comprados para o grupo <i>A</i> e para o grupo <i>B</i>.</p>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
4
20
0 9 A 2 1 2
1 8 B 1 2
2 7 A 1 3
3 6 B 1 1
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


</p>
