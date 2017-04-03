<p align="justify">

<p>Todos os anos, a SBC (Sociedade Brasileira de Caminhoneiros) reúne seus membros em alguma cidade para
discutir sobre a profiss&atilde;o. Nessas reuni&otilde;es s&atilde;o discutidos os problemas da categoria e s&atilde;o apresentadas sugest&otilde;es
sobre como melhorar as condiç&otilde;es de trabalho.</p>

<p>O grande problema desse tipo de encontro é que os membros est&atilde;o espalhados pelo país, uma vez que a profiss&atilde;o
exige que eles viajem para diversos lugares todos os dias. Por isso, a escolha da cidade onde será feita a reuni&atilde;o
sempre é feita de modo que n&atilde;o prejudique demais nenhum dos caminhoneiros. O critério para tal é que a maior
das distâncias percorridas pelos caminhoneiros para chegar ao local da reuni&atilde;o deve ser a menor possível. Ou
seja, a distância percorrida pelo caminhoneiro que vai percorrer a maior distância entre todos os caminhoneiros
para chegar à reuni&atilde;o deve ser a menor possível.</p>

<h3>Tarefa</h3>
<p>Dadas as cidades onde se encontram os caminhoneiros e a descrição das estradas que interligam essas cidades,
escreva um programa que determina qual será a menor distância máxima percorrida por um caminhoneiro para
chegar até o local da reuni&atilde;o. Os caminhoneiros conhecem bem as estradas, e portando sempre fazem o menor
caminho possível até a cidade da reuni&atilde;o. Sempre existe um caminho ligando quaisquer duas cidades.</p>

<h3>Entrada</h3>
<p>A primeira linha da entrada possui dois números inteiros N (2 &le; N &le; 100) e M (N - 1 &le; M &le; 10000), que
representam, respectivamente, o número de cidades e o número de estradas que as interligam. As cidades s&atilde;o
identificadas por números inteiros entre 0 e N - 1. As próximas M linhas da entrada possuem, cada uma, a
descriç&atilde;o de uma estrada. Cada descriç&atilde;o de entrada é composta por três números inteiros: U, V e W, onde U
e V representam cidades (0 &le; U &le; N - 1 e 0 &le; V &le; N - 1) e W representa o comprimento da estrada que une
essas duas cidades (todas as estradas s&atilde;o m&atilde;o dupla, 1 &le; W &le; 100). &Eacute; sempre possível viajar entre qualquer
duas cidades com as estradas existentes, mas pode haver mais de uma estrada ligando o mesmo par de cidades.</p>

<h3>Sa&iacute;da</h3>
<p>Seu programa deve imprimir uma única linha contendo um número inteiro, a distância máxima percorrida por
um caminhoneiro para ir até a reuni&atilde;o, obedecidas as restriç&otilde;es estabelecidas (ou seja, essa distância máxima
deve ser a menor possível).</p>

<h3>Informa&ccedil;&otilde;es sobre a pontua&ccedil;&atilde;o</h3>
<ul>
  <li>Em um conjunto de casos de teste que totaliza 30 pontos, N &le; 4.</li>
</ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
4 4
0 1 2
0 2 4
1 3 1
2 3 5
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
4 5
0 1 2
0 2 4
1 3 1
2 3 5
3 2 2
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

<p></p>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
7 12
0 1 22
0 2 30
0 5 35
1 5 11
1 6 30
1 2 25
2 3 15
2 6 10
3 4 15
3 5 10
4 5 20
5 6 33
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
30
      </pre>
    </td>
  </tr>
</table>


</p>
