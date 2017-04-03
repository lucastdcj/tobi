<p align="justify">

<p>Atualmente, uma empresa precisa oferecer mais que altos salários para manter seus melhores funcionários.
Um dos benefícios comumente oferecidos é acesso a um suprimento infinito de comida e bebida disponível em
cozinhas, onde os funcionários podem preparar lanches e refeições.</p>
<p>Uma empresa de tecnologia decidiu posicionar uma cozinha em suas instalações; entretanto, essa tarefa requer
um certo planejamento. Analisando a planta do prédio é possível criar um diagrama contendo todas as salas,
todos os corredores que as ligam e os seus respectivos comprimentos, em metros. A cozinha deve ser posicionada
em uma das salas de tal forma que a distância entre a cozinha e a sala mais distante da cozinha seja a menor
possível.</p>
<p>Obviamente, a empresa deseja utilizar esse fato para anunciar que "nenhum de seus funcionários está a mais de
<i>X</i> metros de uma cozinha". Eles contrataram o seu escritório de arquitetura para posicionar a cozinha na sala
que minimiza <i>X</i> e você, como programador, deve escrever um programa que informa qual será essa distância.</p>

<h3>Entrada</h3>
<p>A entrada contém um único conjunto de testes, que deve ser lido do <i>dispositivo de entrada padrão</i> (normalmente
o teclado). A primeira linha da entrada contém dois inteiros, <i>S</i> e <i>C</i>, (1 &le; <i>S</i> &le; 250, 1 &le; <i>C</i> &le; 50.000) indicando,
respectivamente, o número de salas e o número de corredores. As <i>C</i> linhas seguintes contêm, cada uma, três
inteiros, <i>A</i>, <i>B</i> e <i>D</i> (1 &le; <i>A</i> &le; <i>N</i> , 1 &le; <i>B</i> &le; <i>N</i> , 1 &le; <i>D</i> &le; 100, <i><i>A</i></i> &ne; <i>B</i>) indicando que existe um corredor de <i>D</i>
metros ligando a sala <i>A</i> à sala <i>B</i>. Cada corredor é informado uma única vez na entrada. Note que um corredor
ligando as salas <i>A</i> e <i>B</i> pode ser percorrido nos dois sentidos (da sala <i>A</i> para a sala <i>B</i> e da sala <i>B</i> para a sala
<i>A</i>).</p>

<h3>Sa&iacute;da</h3>
<p>Seu programa deve imprimir, na <i>saída padrão</i>, uma única linha, contendo um inteiro indicando a distância
entre a cozinha e a sala mais distante, considerando que a cozinha foi posicionada na sala onde essa distância é
mínima.</p>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
4 6
1 2 1
2 3 1
2 4 2
3 4 1
1 4 1
3 1 4
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
2
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
4 4
1 2 10
2 3 1
3 4 4
2 4 3
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
5 6
1 2 10
2 3 10
2 4 11
2 5 11
3 4 10
4 5 10
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
11
      </pre>
    </td>
  </tr>
</table>


</p>
