<p align="justify">

<p>A empresa de jogos Sonyc está desenvolvendo um novo jogo de naves espaciais, chamado <i>Space Traveller</i> (Viajante Espacial).
 O objetivo do jogo é viajar entre dois pontos sem colidir com nenhum asteróide no caminho.</p>
<p>Para o protótipo, você foi contratado para implementar o programa responsável por verificar se um tiro disparado
pela nave atingiu um determinado asteróide. Nessa primeira versão, os tiros disparados pela nave são projeções
num plano 2D, formando uma linha reta infinita, e asteróides são circunferências perfeitas. Para que um tiro
efetivamente destrua qualquer asteróide, ele deve tangenciar a circunferência que define o asteróide.</p>
<p>Dada uma sequências de tiros realizados pela nave e a localização de um asteróide, você deve dizer quantos tiros
acertaram o asteróide.</p>

<h3>Entrada</h3>
<p>A entrada contém um único conjunto de testes, que deve ser lido do <i>dispositivo de entrada padrão</i> (normalmente
o teclado). A primeira linha da entrada contém quatro números inteiros <i>N</i> , <i>X</i><sub>C</sub>, <i>Y</i><sub>C</sub> e <i>R</i> (1 &le; <i>N</i> &le; 1.000,0 &le; <i>X</i><sub>C</sub> &le; 1.000, 0 &le; <i>Y</i><sub>C</sub> &le; 1.000, 1 &le; <i>R</i> &le; 1.000)
 indicando, respectivamente, o número de tiros, as duas coordenadas no plano do centro do asteróide (<i>X</i><sub>C</sub>, <i>Y</i><sub>C</sub>), e o raio do asteróide.</p>
<p>Em seguida haverá <i>N</i> linhas, uma para cada tiro. Cada linha terá 4 inteiros <i>X</i><sub>1</sub>, <i>Y</i><sub>1</sub>, <i>X</i><sub>2</sub>, <i>Y</i><sub>2</sub>(0 &le; <i>X</i><sub>1</sub>, <i>X</i><sub>2</sub>, <i>Y</i><sub>1</sub>, <i>Y</i><sub>2</sub> &le; 1.000),
 representando duas coordenadas de pontos <i>distintos</i> da reta formada pela projeção do tiro.</p>
 
 
<h3>Sa&iacute;da</h3>
<p>Seu programa deve imprimir, na <i>saída padrão</i>, uma única linha, contendo um inteiro, indicando quantos tiros
atigiram o asteróide.</p>

<h3>Informa&ccedil;&otilde;es sobre a pontua&ccedil;&atilde;o</h3>
<ul>
  <li>Em um conjunto de casos de teste que totaliza 30 pontos, <i>N</i> &le; 10 e <i>X</i><sub>1</sub>, <i>Y</i><sub>1</sub>, <i>X</i><sub>2</sub>, <i>Y</i><sub>2</sub>, <i>X</i><sub>c</sub>, <i>Y</i><sub>c</sub>, <i>R</i> &le; 20</li>
  <li>Em um conjunto de casos de teste que totaliza 55 pontos, <i>N</i> &le; 100 e <i>X</i><sub>1</sub>, <i>Y</i><sub>1</sub>, <i>X</i><sub>2</sub>, <i>Y</i><sub>2</sub>, <i>X</i><sub>c</sub>, <i>Y</i><sub>c</sub>, <i>R</i> &le; 100</li> 
</ul>


<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Exemplo de entrada</b>
      <pre>
2 10 10 5
10 1 10 3
4 11 4 10
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Exemplo de Sa&iacute;da</b>
      <pre>
1   
      </pre>
    </td>
  </tr>
</table>
<br>
<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Exemplo de entrada</b>
      <pre>
2 5 5 1
0 0 0 1
0 0 1 0
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Exemplo de Sa&iacute;da</b>
      <pre>
0   
      </pre>
    </td>
  </tr>
</table>
<br>
<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Exemplo de entrada</b>
      <pre>
3 6 4 2
1 4 2 4
1 5 6 4
0 0 6 1
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Exemplo de Sa&iacute;da</b>
      <pre>
2   
      </pre>
    </td>
  </tr>
</table>

</p>
