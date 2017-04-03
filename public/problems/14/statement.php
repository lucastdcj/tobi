<p align="justify">

<p>Um terrorista internacional telefonou avisando que há uma bomba a bordo de um dos diversos ônibus interestaduais
da Nlogônia. Essa bomba explodirá se, por qualquer motivo, o ônibus for obrigado a parar. O esquadrão
anti-bombas já se posicionou na estrada para desarmar a bomba em movimento, mas o ônibus está prestes a
entrar na capital da Nlogônia, Nlogópolis, e precisa sair de lá para o esquadrão poder desarmar o artefato. Por
questões de segurança, o esquadrão anti-bombas somente pode desarmar o artefato fora da capital.</p>
<p>No projeto urbano de Nlogópolis, todas as interseções consistem de rotatórias, de forma que os veículos nunca
precisam parar nas interseções. Em compensação, toda rua (que tem mão única e sempre liga duas rotatórias)
possui uma faixa de pedestres com um semáforo; enquanto alguns semáforos abrem nos minutos múltiplos de 3 e
fecham nos demais, outros fecham nos minutos múltiplos de 3 e abrem nos demais. Todas as ruas de Nlogópolis
foram projetadas de tal forma que sempre levam exatamente um minuto para serem percorridas.</p>
<p>O ônibus vai entrar em Nlogópolis exatamente meio-dia em ponto em uma das rotatórias, e deve sair por outra
rotatória específica para encontrar o esquadrão anti-bombas na estrada. O comandante da polícia local lhe
pediu que escreva um programa que determina o menor tempo necessário para que o ônibus saia da cidade,
pela rotatória específica de saída. Note que o ônibus pode ser forçado a parar em um semáforo, por falta de
alternativas adequadas, e nesse caso a bomba explodirá. Ele também pode ficar circulando indefinidamente pela
cidade, e nesse caso eventualmente terá que parar por falta de combustível (e a bomba explodirá).</p>

<h3>Entrada</h3>
<p><i>A</i> primeira linha da entrada contém quatro inteiros <i>N</i>, <i>E</i>, <i>S</i>, <i>M</i>, indicando, respectivamente, o número de
rotatórias (numeradas de 0 a <i>N</i> - 1), o número da rotatória de entrada do ônibus, o número da rotatória de
saída do ônibus e o número de ruas da cidade.</p>
<p>Cada uma das <i>M</i> linhas seguintes contém três inteiros <i>A</i>, <i>B</i> e <i>T</i>, indicando respectivamente a rotatória de
origem da rua, a rotatória de destino da rua e a temporização do semáforo daquela rua: <i>T</i> = 1 se o semáforo
daquela rua abre nos minutos múltiplos de 3, e <i>T</i> = 0 se o semáforo daquela rua fecha nos minutos múltiplos
de 3.</p>

<h3>Sa&iacute;da</h3>
<p>Imprima uma única linha contendo um único número inteiro, o menor tempo necessário em minutos para que
o ônibus saia da cidade ileso. Se for impossível evitar a explosão do ônibus, imprima uma única linha contendo
o caractere '*'.</p>

<h3>Restri&ccedil;&otilde;es</h3>
<ul>
  <li>2 &le; <i>N</i> &le; 500</li>
  <li>1 &le; <i>M</i> &le; 2000</li>
  <li>0 &le; <i>E</i>, <i>S</i> &le; <i>N</i> - 1</li>
  <li> pode haver até duas ruas de uma rotatória <i>A</i> para outra <i>B</i> (possivelmente igual a <i>A</i>), mas no caso de
  haver duas ruas, então numa o semáforo abre nos minutos múltiplos de 3, na outra o semáforo fecha nos
  minutos múltiplos de 3.</li>
</ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
6 5 4 7
0 1 0
1 2 0
1 2 1
2 3 1
2 4 0
3 0 0
5 0 1
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
8
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
4 0 3 4
0 1 1
1 2 0
2 3 1
2 0 0
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
*
      </pre>
    </td>
  </tr>
</table>

</p>
