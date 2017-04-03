<p align="justify">

<p>A Nlogônia é um país tropical, com muitas belezas naturais internacionalmente famosas; dentre elas, encontram-se 
as belas praias que compõem o arquipélago do país, que todo verão recebem milhões de turistas estrangeiros.</p>
<p>O Ministério do Turismo da Nlogônia está preparando o país para a chegada dos turistas, mas para fazer seu
planejamento, precisa saber a extensão da costa nlogônica. Para isso, ele gerou um mapa que divide o território
nacional em vários quadrados, que podem ser ocupados por água ou por terra; considera-se que um quadrado é
parte da costa nlogônica se ele é um quadrado ocupado por terra que tem um lado em comum com um quadrado
ocupado por água.</p>
<p>Na figura abaixo, (a) mostra um trecho do mapa gerado e (b) mostra os quadrados do trecho dado que são
costa.</p>
<center> 
  <img src="task_images/2012f2p1_costa.png" width="500px" height="250px">
</center>
<p>Como a Nlogônia é um país muito grande, o ministro do turismo pediu que você escrevesse um programa que,
dado o mapa da Nlogônia, determina a extensão da costa nlogônica.</p>


<h3>Entrada</h3>
<p>A primeira linha da entrada contém dois inteiros <i>M</i> e <i>N</i> indicando, respectivamente, o número de linhas e o
número de colunas do mapa. Cada uma das <i>M</i> linhas seguintes contém <i>N</i> caracteres: um caractere '.' indica
que aquele quadrado do território é ocupada por água; um caractere '#' indica que aquele quadrado do território
é ocupada por terra.</p>
<p>Considere que todo o espaço fora da área do mapa é ocupado por água.</p>

<h3>Sa&iacute;da</h3>
<p>Seu programa deve imprimir uma única linha contendo um único inteiro, indicando quantos quadrados do
território fazem parte da costa da Nlogônia.</p>

<h3>Restri&ccedil;&otilde;es</h3>
<ul>
  <li>1 &le; <i>M</i>,<i>N</i> &le; 1000</li>
</ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
5 5
.....
..#..
.###.
..#..
.....
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
4     
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
10 10
..........
.....###..
....#####.
.#...##...
..........
.......##.
.##.......
..##......
..###.....
..#####...
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
22
      </pre>
    </td>
  </tr>
</table>


</p>
