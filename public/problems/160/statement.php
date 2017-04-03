<p align="justify">

<p>Rodrigo pediu uma pizza de mussarela de <i>N</i> fatias, uma parte somente com cebola e o resto somente com
azeitonas. Entretanto, ao receber a pizza em casa, notou que o motoqueiro que a entregou não foi cuidadoso o
suficiente, pois tanto as tiras de cebola quanto as azeitonas estavam espalhadas por toda a pizza. Para piorar,
como a pizza era de mussarela, as tiras de cebola e as azeitonas estavam grudadas na pizza.</p>
<p>Como gosta mais de cebola do que de azeitona, Rodrigo deseja pegar fatias consecutivas da pizza de tal
forma que estas contenham a maior diferença possível entre tiras de cebola e azeitonas. Para isso, ele contou
quantas tiras e quantas azeitonas tinham em cada fatia e subtraiu os dois valores, nessa ordem. Assim, sempre
que uma fatia contiver mais cebolas que azeitonas, ela recebe um número positivo, e caso contrário, um número
negativo. Uma fatia cujo número seja zero contém o mesmo número de tiras de cebolas e azeitonas.</p>
<center> 
  <img src="task_images/2007f2p2_pizza.png">
</center>
<p>Por exemplo, supondo que as fatias contenham as seguintes diferenças: 5,-3,-3, 2,-1, 3, pode-se pegar uma
fatia consecutiva com 9 cebolas a mais que azeitonas, utilizando as fatias com as diferenças 2,-1, 3, 5 (lembre-se
de que estamos tratando de um círculo e, portanto, a fatia com diferença 5 é vizinha da fatia com diferença 3 e
vice-versa).</p>
<p>Como Rodrigo não entende de programação, ele resolveu contar com seus serviços.</p>
<p><i>OBS</i>: repare que é melhor não escolher nenhuma fatia caso somente seja possível escolher fatias consecutivas
com mais azeitonas que cebolas.</p>

<h3>Tarefa</h3>
<p>Escreva um programa que, dados as diferenças entre as quantidades de cebolas e azeitonas em cada fatia de
pizza, retorne a maior quantidade possível de cebolas que Rodrigo pode comer a mais do que a quantidade de
azeitonas utilizando somente fatias consecutivas de pizza. (lembrando que a primeira fatia é adjacente à última
e vice-versa).</p>

<h3>Entrada</h3>
<p>A entrada contém um único conjunto de testes, que deve ser lido do <i>dispositivo de entrada padrão</i> (normalmente
o teclado). A primeira linha da entrada contém um inteiro <i>N</i> que indica o número de fatias de pizza (1 &le; <i>N</i> &le;
100.000). A segunda linha contém <i>N</i> inteiros <i>K</i> (-100 &le; <i>K</i> &le; 100) separados por um espaço em branco com
as diferenças entre as quantidades de cebolas e de azeitonas.</p>

<h3>Sa&iacute;da</h3>
<p>Seu programa deve imprimir, na <i>saída padrão</i>, uma única linha, contendo a maior quantidade de cebolas que
Rodrigo pode comer a mais do que azeitonas.</p>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
6
5 -3 -3 2 -1 3
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
9
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
7
1 -2 2 -1 4 1 -5
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
6
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
-3 -10
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
